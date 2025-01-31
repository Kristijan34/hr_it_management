<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
class SugarWidgetSubPanelCustomApprovalButtons extends SugarWidgetField
{
    public function displayList(&$layout_def)
    {
        global $app_strings;
        global $subpanel_item_count;
        global $db;
        global $current_user;
        $return_module = $_REQUEST['module'];
        $return_id = $_REQUEST['record'];
        $module_name = $layout_def['module'];
        $record_id = $layout_def['fields']['ID'];
        $unique_id = $layout_def['subpanel_id'] . "_close_" . $subpanel_item_count; //bug 51512
        $itg_db_name = $layout_def['itg_db_name'];
        $itg_db_column = $layout_def['itg_db_column'];


        $sql = "SELECT * FROM HR_APPROVALS WHERE deleted=0 and id = '{$record_id}'";
        $res= $db->query($sql);
        $row = $db->fetchByAssoc($res, -1, true);
        $status = $row['status'];
//

        $html = "<link rel=\"stylesheet\" href=\"custom/include/generic/SugarWidgets/SugarWidgetSubPanelCustomApprovalButtons.css\">";
        $html .= "<script type=\"text/javascript\" src=\"custom/include/generic/SugarWidgets/SugarWidgetSubPanelCustomApprovalButtons.js\"></script>";
        if (($layout_def['fields']['APPROVER_ID'] == $current_user->id) && ($status=='pending')){
            foreach ($layout_def['itg_db_buttons'] as $key => $val) {
                $html .= "<li class='custom_height customAppBut' id=\"$unique_id\" onclick='EmployeeAbsences.popup(\"$module_name\",\"$record_id\",\"{$layout_def['fields']['APPROVER_NAME']}\",\"{$layout_def['fields']['STATUS']}\",\"$itg_db_name\",\"$itg_db_column\",\"$key\");' style=\"color:#F08377;text-align:center;\">" . $app_strings[$val] . "</li>";
            }
        }
        else{
            $html .= "<li class='custom_height'></li";
        }
        if ($layout_def['EditView']) {
            return $html;
        } else {
            return '';
        }
    }
}
