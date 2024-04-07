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

$dictionary['hr_Performance_management'] = array(
    'table' => 'hr_performance_management',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        //start user relate
        'user_id' =>
            array (
                'required' => false,
                'name' => 'user_id',
                'vname' => 'LBL_NAME',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'audited' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'user_name' =>
            array(
                'required' => true,
                'name' => 'user_name',
                'rname' => 'name',
                'id_name' => 'user_id',
                'vname' => 'LBL_NAME',
                'type' => 'relate',
                'link' => 'performance_user',
                'table' => 'users',
                'isnull' => 'true',
                'module' => 'Users',
                'source' => 'non-db',
                'custom_readonly' => true
            ),
        'performance_user' =>
            array(
                'name' => 'performance_user',
                'type' => 'link',
                'vname' => 'LBL_NAME',
                'relationship' => 'performance_users',
                'source' => 'non-db',
            ),
        //end user relate

        //start role relate
        'role_id' =>
            array (
                'required' => false,
                'name' => 'role_id',
                'vname' => 'LBL_ROLE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'audited' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'role_name' =>
            array(
                'name' => 'role_name',
                'rname' => 'name',
                'id_name' => 'role_id',
                'vname' => 'LBL_ROLE',
                'type' => 'relate',
                'link' => 'user_role',
                'table' => 'acl_roles',
                'isnull' => 'true',
                'module' => 'ACLRoles',
                'source' => 'non-db',
                'custom_readonly' => true
            ),
        'user_role' =>
            array(
                'name' => 'user_role',
                'type' => 'link',
                'vname' => 'LBL_NAME',
                'relationship' => 'users_roles',
                'source' => 'non-db',
            ),
        //end role relate

        'region_name'=>
            array(
                'name'=> 'region_name',
                'ext2' => 'hr_Regions',
                'module' => 'hr_Regions',
                'id_name'=>'region_id',
                'vname'=>'LBL_REGION',
                'type'=>'relate',
                'source'=>'non-db',
                'options'=> 'moduleList',
                'audited' => true,
                'custom_readonly' => true
            ),
        'region_id' =>
            array(
                'name' => 'region_id',
                'vname' => 'LBL_REGION',
                'type' => 'id',
                'required' => true,
                'reportable' => true,
                'audited' => true,
            ),
        'store_name'=>
            array(
                'name'=> 'store_name',
                'ext2' => 'hr_Stores',
                'module' => 'hr_Stores',
                'id_name'=>'store_id',
                'vname'=>'LBL_STORE',
                'type'=>'relate',
                'source'=>'non-db',
                'options'=> 'moduleList',
                'audited' => true,
                'custom_readonly' => true
            ),
        'store_id' =>
            array(
                'name' => 'store_id',
                'vname' => 'LBL_STORE',
                'type' => 'id',
                'required' => true,
                'reportable' => true,
                'audited' => true,
            ),
        'status' => array(
            'required' => true,
            'audited' => true,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'options' => 'performance_status_dom',
            'len' => 50,
            'comment' => 'Absences type for the user to choose',
            'merge_filter' => 'enabled',
        ),
        'target_date' =>
            array (
                'name' => 'target_date',
                'vname' => 'LBL_TARGET_DATE',
                'type' => 'date',
                'audited' => true,
                'comment' => 'Target goal',
                'importable' => 'required',
                'required' => true,
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
                'custom_readonly' => true
            ),
        'goal' => array(
            'required' => true,
            'name' => 'goal',
            'vname' => 'LBL_GOAL',
            'type' => 'text',
            'importable' => 'true',
            'audited' => true,
        ),

),
    'relationships' => array (
        'performance_users' =>
            array (
                'lhs_module' => 'hr_Performance_management',
                'lhs_table' => 'hr_performance_management',
                'lhs_key' => 'user_id',
                'rhs_module' => 'Users',
                'rhs_table' => 'users',
                'rhs_key' => 'id',
                'relationship_type' => 'one-to-one',
            ),
        'users_roles' =>
            array (
                'lhs_module' => 'hr_Performance_management',
                'lhs_table' => 'hr_performance_management',
                'lhs_key' => 'role_id',
                'rhs_module' => 'ACLRoles',
                'rhs_table' => 'acl_roles',
                'rhs_key' => 'id',
                'relationship_type' => 'one-to-one',
            ),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('hr_Performance_management', 'hr_Performance_management', array('basic','assignable','security_groups'));