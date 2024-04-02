<?php

class hr_Employee_absencesController extends SugarController {

    function action_editview() {
        global $current_user;
        $this->view = 'edit';
    }

    function action_detailview() {
       // clearTplCache();
        $this->view = 'detail';
    }

}

?>
