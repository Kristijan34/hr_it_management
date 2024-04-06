<?php

class hr_Employee_absencesController extends SugarController {

    function action_editview() {
        global $current_user;
        $this->view = 'edit';
    }

    function action_detailview() {
        clearTplCache();
        $this->view = 'detail';
    }

    function action_sendForApproval()
    {
        global $mod_strings;

        $approvers = $this->bean->sendForApproval();
        //  $GLOBALS['log']->fatal("APPROVERS: " . print_r($approvers, true));
        if (empty($approvers)) {
            echo $mod_strings['LBL_NO_APPROVERS'];
            exit();
        }

        $this->createApproval($approvers['user_id']);
        $this->sendEmail($approvers['email']);

        $this->bean->updateStatus('sent_for_approval');

        echo '';
        exit();
    }
    private function createApproval($approvers_ids) {
        global $current_user;
        foreach ($approvers_ids as $approver_id) {
            $guid = create_guid();
            $approval = BeanFactory::newBean('hr_Approvals');
            $approval->id = $guid;
            $approval->new_with_id = $guid;
            $approval->name = 'Absence approval for : ' . $_REQUEST['user_name'];
            $approval->entity_type = $_REQUEST['module'];
            $approval->entity_id = $_REQUEST['record'];
            $approval->approver_id = $approver_id;
            $approval->status = 'pending';
            $approval->created_by = $current_user->id;
            $approval->modified_user_id = $current_user->id;
            $approval->save();
            //$this->createAlertForApprovers($approver_id, $guid);
        }
    }

    private function sendEmail($approvers_email) {
        global $sugar_config, $mod_strings;

        require_once('include/SugarPHPMailer.php');
        // $GLOBALS['log']->fatal("URL: " . print_r($_SERVER['HTTP_REFERER'], true));
        // $GLOBALS['log']->fatal("APPROVERS EMAIL: " . print_r($approvers_email, true));

        $from_name = $approvers_email['from_name'];
        $from_email = $approvers_email['from_email'];
        $target_name = $_REQUEST['user_name'];
        $absence_type = $_REQUEST['absence_type'];

        $subject = $mod_strings['LBL_EMAIL_APPROVAL_SUBJECT'];
        $body = $mod_strings['LBL_EMAIL_APPROVAL_BODY'];
        $body = str_replace('$url', $_SERVER['HTTP_REFERER'], $body);
        $subject = str_replace('$target_name', $target_name, $subject);
        $subject = str_replace('$absence_type', $absence_type, $subject);
        $body = str_replace('$target_name', $target_name, $body);

        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $from_email;
        $mail->FromName = $from_name;
        $mail->Body = $body;
        $mail->Subject = from_html($subject);
        $mail->isHTML(true);
        $mail->prepForOutbound();
        foreach ($approvers_email['name'] as $k => $approval_email) {
            $mail->AddAddress($approvers_email['address'][$k], $approval_email);
        }

        $mail->Send();
    }




}

?>
