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

$dictionary['hr_Approvals'] = array(
    'table' => 'hr_approvals',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'name' => array(
            'required' => true,
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'varchar',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
        ),
  'status' => 
  array (
    'required' => false,
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'new',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'approval_status_dom',
    'studio' => 'visible',
    'dependency' => false,
  ),

        'entity_type_name' => array(
            'name' => 'entity_type_name',
            'type' => 'varchar',
            'vname' => 'LBL_ENTITY_TYPE',
            'source' => 'non-db',
        ),
        'entity_name' => array(
            'name' => 'parent_name',
            'type' => 'varchar',
            'vname' => 'LBL_ENTITY_ID',
            'source' => 'non-db',
        ),
  'entity_type' =>
  array (
    'required' => false,
    'name' => 'entity_type',
    'vname' => 'LBL_ENTITY_TYPE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'entity_id' =>
  array (
    'required' => false,
    'name' => 'entity_id',
    'vname' => 'LBL_ENTITY_ID',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),

  //relation for approver id
        'approver_name'=>
            array(
                'name'=> 'approver_name',
                'ext2' => 'users',
                'module' => 'Employees',
                'id_name'=>'approver_id',
                'vname'=>'LBL_APPROVER_ID',
                'type'=>'relate',
                'source'=>'non-db',
                'options'=> 'moduleList',
                'audited' => true,
                'required'=> true,
            ),
        'approver_id' =>
            array(
                'name' => 'approver_id',
                'vname' => 'LBL_APPROVER_ID',
                'type' => 'varchar',
                'required' => false,
                'reportable' => true,
                'importable' => 'true',
                'audited' => true,
            ),
        'approver_employees' => array(
            'name' => 'approver_employees',
            'type' => 'link',
            'vname' => 'LBL_EMPLOYEE',
            'relationship' => 'approver_employees',
            'source' => 'non-db',
        ),
        // end relation for approver
),
    'relationships' => array (
        'approver_employees' => array(
            'lhs_module' => 'hr_Approvals',
            'lhs_table' => 'hr_approvals',
            'lhs_key' => 'approver_id',
            'rhs_module' => 'Employees',
            'rhs_table' => 'users',
            'rhs_key' => 'id',
            'relationship_type' => 'one-to-many',
        ),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('hr_Approvals', 'hr_Approvals', array('basic','assignable','security_groups'));