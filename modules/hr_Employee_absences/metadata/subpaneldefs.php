<?php
$layout_defs['hr_Employee_absences'] = array(
    // list of what Subpanels to show in the DetailView
    'subpanel_setup' => array(
        'hr_approvals' => array(
            'order' => 100,
            'sort_by' => 'name',
            'sort_order' => 'asc',
            'module' => 'hr_Approvals',
            'subpanel_name' => 'approvals',
            'get_subpanel_data' => 'absence_approvals',
            'title_key' => 'LBL_APPROVALS',
            'top_buttons' => array(
            ),
        ),
    ),
);
