<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$module_name = 'itg_Approvals';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),
    'where' => '',
    'list_fields' => array(
        'approver_name' => array(
            'vname' => 'LBL_APPROVER_ID',
            'width' => '20%',
        ),
        'status' => array(
            'vname' => 'LBL_STATUS',
            'width' => '20%',
        ),
        'date_entered' => array(
            'vname' => 'LBL_DATE_ENTERED',
            'width' => '20%',
        ),
        'date_modified' => array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '20%',
        ),
        'created_by_name' =>
            array(
                'vname' => 'LBL_CREATED',
                'width' => '25%',
                'default' => true,
            ),
        'modified_by_name' =>
            array(
                'vname' => 'LBL_MODIFIED',
                'width' => '25%',
                'default' => true,
            ),
        'approv_button' => array(
            'widget_class' => 'SubPanelCustomApprovalButtons',
            'module' => $module_name,
            'width' => '20%',
            'itg_db_name' => 'HR_APPROVALS',
            'itg_db_column' => 'STATUS',
            'itg_db_buttons' => array (
                'approved' => "LBL_APPROVE",
                'rejected' => "LBL_REJECT",
            ),
        ),
    ),
);
?>