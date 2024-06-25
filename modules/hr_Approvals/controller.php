<?php
class hr_ApprovalsController extends SugarController {

       
     function action_editview() {

        $this->view = 'edit';
    }
   
    
    
    function action_detailview() {
        
        $this->view = 'detail';
    }

    public function action_approval() {
        global $db;
        $sql = "UPDATE " . $_REQUEST['itg_db_name'] . " SET " . $_REQUEST['itg_db_column'] . " = '" . $_REQUEST['new_status'] . "' WHERE id = '" . $_REQUEST['record_id'] . "'";
        $db->query($sql);
        $result = $this->bean->checkEntityApprovalStatus($_REQUEST['record_id']);
        //$GLOBALS['log']->fatal('result is ' . print_r($result,true));
        if($result['cnt'] > 0){
            $this->updateAbsence($result['table_name'],$result['record_id']);
            $approvers = $this->getApprovers($result['record_id']);

            $this->sendEmail($approvers['email']);
        }
        echo json_encode(array('status'=>'success'));
        exit;
    }

    private function updateAbsence($table_name,$record_id)
    {
        global $db;





        $sql = "UPDATE " . $table_name . " SET status = 'approved' WHERE id = '{$record_id}'";
        $GLOBALS['log']->fatal('sql for update absence ' . $sql);
        $db->query($sql);

    }

    function getApprovers($record_id) {
        global $db, $current_user;

        $approvers = array();

        $sql = "SELECT hea.user_id,
                CONCAT(u.first_name, ' ', u.last_name) AS fullname,
                ea.email_address,
                (SELECT value FROM config WHERE name='fromaddress') AS from_email,
                (SELECT value FROM config WHERE name='fromname') AS from_name
                FROM hr_employee_absences hea
                JOIN email_addr_bean_rel eabr ON eabr.bean_id = hea.user_id AND eabr.deleted = 0
                JOIN email_addresses ea ON eabr.email_address_id = ea.id AND ea.deleted = 0
                JOIN users u ON u.id = hea.user_id
                WHERE hea.id = '{$record_id}'";
        // $GLOBALS['log']->fatal("SQL: $sql");
        $result = $db->query($sql);
        $cnt=0;
        while ($row = $db->fetchByAssoc($result)) {
            $approvers['user_id'][$cnt] = $row['user_id'];
            $approvers['email']['name'][$cnt] = $row['fullname'];
            $approvers['email']['address'][$cnt] = $row['email_address'];
            $approvers['email']['from_name']  = $row['from_name'];
            $approvers['email']['from_email'] = $row['from_email'];
            $approvers['email']['to'] = $row['fullname'];
            $cnt++;
        }

        return $approvers;
    }

    private function sendEmail($approvers_email) {
        global $sugar_config, $mod_strings;

        require_once('include/SugarPHPMailer.php');

        $from_name = $approvers_email['from_name'];
        $from_email = $approvers_email['from_email'];
        $full_name = $approvers_email['to'];

        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $from_email;
        $mail->FromName = $from_name;
        $mail->Body = '<p>Почитуван/а, </p> <br> Вашето барање е одобрено.';
        $mail->Subject =from_html("Одобрување за " . $full_name);
        $mail->isHTML(true);
        $mail->prepForOutbound();
        foreach ($approvers_email['name'] as $k => $approval_email) {
            $mail->AddAddress($approvers_email['address'][$k], $approval_email);
        }

        $mail->Send();
    }
}

?>
