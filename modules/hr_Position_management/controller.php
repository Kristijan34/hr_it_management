<?php
class hr_Position_managementController extends SugarController {

       
     function action_editview() {

        $this->view = 'edit';
    }

    function action_detailview() {
        
        $this->view = 'detail';
    }

    function action_getStoresByRegion()
    {
        $stores_by_region = $this->bean->getStoresByRegion();

        echo json_encode($stores_by_region);
        exit();

    }

}

?>
