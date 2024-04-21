<?php
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


class hr_Employee_absences extends Basic
{
    public $new_schema = true;
    public $module_dir = 'hr_Employee_absences';
    public $object_name = 'hr_Employee_absences';
    public $table_name = 'hr_employee_absences';
    public $importable = false;

    public $id;
    public $name;
    public $user_name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    function sendForApproval() {
        global $db, $current_user;

        $approvers = array();

        $sql = "SELECT pm.user_id,
                    CONCAT(u.first_name, ' ', u.last_name) AS fullname,
                    ea.email_address,
                    (SELECT value FROM config WHERE name='fromaddress') AS from_email,
                    (SELECT value FROM config WHERE name='fromname') AS from_name,
                    r.name
                FROM hr_position_management pm
                JOIN email_addr_bean_rel eabr ON eabr.bean_id = pm.user_id AND eabr.deleted = 0
                JOIN email_addresses ea ON eabr.email_address_id = ea.id AND ea.deleted = 0
                JOIN users u ON u.id = pm.user_id
                JOIN acl_roles ar on pm.approval_role_id = ar.id
                JOIN hr_regions r on pm.region_id = r.id 
                WHERE pm.region_id = (SELECT region_id from hr_position_management where user_id = '{$current_user->id}')
                AND pm.user_id NOT IN ('{$current_user->id}')";
        // $GLOBALS['log']->fatal("SQL: $sql");
        $result = $db->query($sql);
        $cnt=0;
        while ($row = $db->fetchByAssoc($result)) {
            $approvers['user_id'][$cnt] = $row['user_id'];
            $approvers['email']['name'][$cnt] = $row['fullname'];
            $approvers['email']['address'][$cnt] = $row['email_address'];
            $approvers['email']['from_name']  = $row['from_name'];
            $approvers['email']['from_email'] = $row['from_email'];
            $cnt++;
        }

        return $approvers;
    }

    function updateStatus($new_status) {
        $employee_absence = BeanFactory::newBean($this->module_dir);
        $employee_absence->id = $_REQUEST['record'];
        $employee_absence->status = $new_status;
        $employee_absence->save();

        $this->createStatusHistory($_REQUEST['status'], $new_status);
    }

    private function createStatusHistory($old_value, $new_value) {
        global $db, $current_user;

        $sql = "INSERT INTO {$this->table_name}_audit (id, parent_id, date_created, created_by, field_name, data_type, before_value_string, after_value_string)
            VALUES ('" . create_guid() . "', '" . $_REQUEST['record'] . "', NOW(), '" . $current_user->id . "', 'status', 'varchar', '{$old_value}', '{$new_value}')
            ";
        $db->query($sql);
    }

    function create_new_list_query($order_by, $where, $filter=array(), $params=array(), $show_deleted = 0, $join_type='', $return_array = false, $parentbean=null, $singleSelect = false, $ifListForExport = false) {
        global $current_user;
        $sql_arr = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect, $ifListForExport);
           $getUsersFromRegion = $current_user->getUsersFromRegion();
            $sql_arr['where'].= " and hr_employee_absences.user_id in ($getUsersFromRegion)";
        $GLOBALS['log']->fatal('$sql_arr ' . print_r($sql_arr,true));

        return $sql_arr;
    }


}