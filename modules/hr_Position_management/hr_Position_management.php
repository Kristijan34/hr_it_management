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


class hr_Position_management extends Basic
{
    public $new_schema = true;
    public $module_dir = 'hr_Position_management';
    public $object_name = 'hr_Position_management';
    public $table_name = 'hr_position_management';
    public $importable = false;

    public $id;
    public $name;
    public $store_id;
    public $region_id;
    public $role_id;
    public $approval_role_id;
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

    function fill_in_additional_list_fields() {
        parent::fill_in_additional_list_fields();
        $this->region_name = $this->getRegionName($this->region_id);
        $this->store_name = $this->getStoreName($this->store_id);
        $this->role_name = $this->getRoleName($this->role_id);
        if($this->approval_role_id != ''){
            $this->approval_name = $this->getApprovalName($this->approval_role_id);
        }
    }

    function getRoleName($role_id){
        global $db;
        $sql = "SELECT name FROM acl_roles WHERE id = '{$role_id}'";
        $res= $db->query($sql);
        $row = $db->fetchByAssoc($res);
        return $row['name'];
    }
    function getApprovalName($role_id){
        global $db;
        $sql = "SELECT name FROM acl_roles WHERE id = '{$role_id}'";
        $res= $db->query($sql);
        $row = $db->fetchByAssoc($res);
        return $row['name'];
    }
    function getRegionName($region_id){
        global $db;
        $sql = "SELECT name FROM hr_regions WHERE id = '{$region_id}'";
        $res= $db->query($sql);
        $row = $db->fetchByAssoc($res);
        return $row['name'];
    }

    function getStoreName($store_id){
        global $db;
        $sql = "SELECT name FROM hr_stores WHERE id = '{$store_id}'";
        $res= $db->query($sql);
        $row = $db->fetchByAssoc($res);
        return $row['name'];
    }

    function getStoresByRegion()
    {
        global $db;
        $stores_by_region = array();

        $sql = "SELECT st.id, st.name, st.region_id
                FROM hr_stores st 
                JOIN hr_regions reg ON st.region_id = reg.id WHERE st.deleted = 0 AND reg.deleted = 0
                ORDER BY st.name ASC";
        $result = $db->query($sql);
        while ($row = $db->fetchByAssoc($result)){
            $stores_by_region[$row['region_id']][$row['id']]['name'] = $row['name'];
        }

        return $stores_by_region;

    }

    function create_new_list_query($order_by, $where, $filter=array(), $params=array(), $show_deleted = 0, $join_type='', $return_array = false, $parentbean=null, $singleSelect = false, $ifListForExport = false) {
        global $current_user;
        $sql_arr = parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect, $ifListForExport);
        $user_id = $current_user->id;
        $role_name = ACLRole::getUserRoleNames($user_id);
        //$is_it =
        if($current_user->id != 1 && !in_array('HR Manager',$role_name)){
        if(!isset($_SESSION['selected_region_id'])){
            $region = $current_user->getCurrentUserRegion();
            //$GLOBALS['log']->fatal('$region ' . print_r($region,true));
        }
        else{
            $region = $_SESSION['selected_region_id'];
        }
            $sql_arr['where'].= " AND hr_position_management.region_id = '{$region}'";
        }
      //  }
//
        if(isset($_SESSION['selected_region_id'])){
            $region = $_SESSION['selected_region_id'];
            $sql_arr['where'].= " AND hr_position_management.region_id = '{$region}'";
            //$GLOBALS['log']->fatal('$region ' . print_r($region,true));
        }
        return $sql_arr;
    }

}