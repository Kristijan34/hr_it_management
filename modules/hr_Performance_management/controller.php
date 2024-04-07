<?php

class hr_Performance_managementController extends SugarController {

    function action_editview() {
        global $current_user;
        $this->view = 'edit';
    }

    function action_detailview() {
        $this->view = 'detail';
    }

    function action_getUserPosition(){
        global $mod_strings;

        $res = array('data' => array(), 'error' => '');

        $res['data'] = $this->bean->getUserPosition();

        if (count($res['data']) == 0) {
            $res['error'] = $mod_strings['LBL_USER_NOT_IN_POSITION_MANAGEMENT'];
        }


        echo json_encode($res);
        exit();
    }



}

?>
