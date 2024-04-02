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

$dictionary['hr_Position_management'] = array(
    'table' => 'hr_position_management',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        //start approval relate
        'approval_role_id' =>
            array (
                'required' => false,
                'name' => 'approval_role_id',
                'vname' => 'LBL_APPROVAL',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'audited' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'approval_name' =>
            array(
                'required' => true,
                'name' => 'approval_name',
                'rname' => 'name',
                'id_name' => 'approval_role_id',
                'vname' => 'LBL_APPROVAL',
                'type' => 'relate',
                'link' => 'approval_role',
                'table' => 'acl_roles',
                'isnull' => 'true',
                'module' => 'ACLRoles',
                'source' => 'non-db',
            ),
        'approval_role' =>
            array(
                'name' => 'approval_role',
                'type' => 'link',
                'vname' => 'LBL_APPROVAL',
                'relationship' => 'approval_roles',
                'source' => 'non-db',
            ),
        //end approval relate
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
                'link' => 'position_user',
                'table' => 'users',
                'isnull' => 'true',
                'module' => 'Users',
                'source' => 'non-db',
            ),
        'position_user' =>
            array(
                'name' => 'position_user',
                'type' => 'link',
                'vname' => 'LBL_NAME',
                'relationship' => 'position_users',
                'source' => 'non-db',
            ),
        //end user relate
        'region_id' =>
            array(
                'name' => 'region_id',
                'type' => 'enum',
                'vname' => 'LBL_REGION',
                'function' => 'getRegions',
                'audited' => true,
                'required' => true,
                'importable' => true
            ),
        'region_name' =>
            array (
                'required' => false,
                'name' => 'region_name',
                'vname' => 'LBL_REGION',
                'type' => 'varchar',
                'massupdate' => 0,
                'source' => 'non-db'
            ),
        'store_id' =>
            array(
                'name' => 'store_id',
                'type' => 'enum',
                'vname' => 'LBL_STORE',
                'function' => 'getStores',
                'audited' => true,
                'required' => true,
                'importable' => true
            ),
        'store_name' =>
            array (
                'required' => false,
                'name' => 'store_name',
                'vname' => 'LBL_STORE',
                'type' => 'varchar',
                'massupdate' => 0,
                'source' => 'non-db'
            ),

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
                'required' => true,
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
            ),
        'user_role' =>
            array(
                'name' => 'position_user',
                'type' => 'link',
                'vname' => 'LBL_NAME',
                'relationship' => 'users_roles',
                'source' => 'non-db',
            ),
        //end role relate
),
    'relationships' => array (
        'position_users' =>
            array (
                'lhs_module' => 'hr_Position_management',
                'lhs_table' => 'hr_position_management',
                'lhs_key' => 'user_id',
                'rhs_module' => 'Users',
                'rhs_table' => 'users',
                'rhs_key' => 'id',
                'relationship_type' => 'one-to-one',
            ),
        'users_roles' =>
            array (
                'lhs_module' => 'hr_Position_management',
                'lhs_table' => 'hr_position_management',
                'lhs_key' => 'role_id',
                'rhs_module' => 'ACLRoles',
                'rhs_table' => 'acl_roles',
                'rhs_key' => 'id',
                'relationship_type' => 'one-to-one',
            ),
        'approval_roles' =>
            array (
                'lhs_module' => 'hr_Position_management',
                'lhs_table' => 'hr_position_management',
                'lhs_key' => 'approval_role_id',
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
VardefManager::createVardef('hr_Position_management', 'hr_Position_management', array('basic','assignable','security_groups'));