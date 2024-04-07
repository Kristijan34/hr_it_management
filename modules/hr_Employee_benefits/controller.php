<?php

class hr_Employee_benefitsController extends SugarController {

    function action_editview() {
        global $current_user;
        $this->view = 'edit';
    }

    function action_detailview() {
        clearTplCache();
        $this->view = 'detail';
    }

    function action_notifyUsers()
    {
        global $mod_strings;

        $users = $this->bean->notifyUsers();
        //  $GLOBALS['log']->fatal("APPROVERS: " . print_r($approvers, true));

        $this->sendEmail($users['email']);


        echo '';
        exit();
    }

    private function sendEmail($approvers_email) {
        global $sugar_config, $mod_strings,$current_user;

        require_once('include/SugarPHPMailer.php');

        $from_name = $approvers_email['from_name'];
        $from_email = $approvers_email['from_email'];
        $benefit_name = $_REQUEST['benefit_name'];
        $provider = $_REQUEST['provider'];
        $description = $_REQUEST['description'];
        $valid_from = $_REQUEST['valid_from'];
        $valid_to = $_REQUEST['valid_to'];

        $subject = $mod_strings['LBL_EMPLOYEE_DISCOUNT'];
        $body = $mod_strings['LBL_EMAIL_BENEFIT_BODY'];
        $subject = str_replace('$benefit_name', $benefit_name, $subject);
        $body = str_replace('$provider', $provider, $body);
        $body = str_replace('$description', $description, $body);
        $body = str_replace('$current_user', $current_user->name, $body);
        $body = str_replace('$valid_from', $valid_from, $body);
        $body = str_replace('$valid_to', $valid_to, $body);

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
