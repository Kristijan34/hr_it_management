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
        $GLOBALS['log']->fatal($sql);
        $db->query($sql);
        echo json_encode(array('status'=>'success'));
        exit;
    }

}

?>
