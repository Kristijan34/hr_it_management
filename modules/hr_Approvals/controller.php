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
        }
        echo json_encode(array('status'=>'success'));
        exit;
    }

    private function updateAbsence($table_name,$record_id)
    {
        global $db;

        $sql = "UPDATE " . $table_name . " SET status = 'approved' WHERE id = '{$record_id}'";
        //$GLOBALS['log']->fatal('sql for update absence ' . $sql);
        $db->query($sql);

    }

}

?>
