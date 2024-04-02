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

$dictionary['hr_Employee_absences'] = array(
    'table' => 'hr_employee_absences',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
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
                'link' => 'absence_user',
                'table' => 'users',
                'isnull' => 'true',
                'module' => 'Users',
                'source' => 'non-db',
                'custom_readonly' => true
            ),
        'absence_user' =>
            array(
                'name' => 'absence_user',
                'type' => 'link',
                'vname' => 'LBL_NAME',
                'relationship' => 'absences_user',
                'source' => 'non-db',
            ),
        //end target_groups relate
        'from_date' =>
            array (
                'required' => true,
                'name' => 'from_date',
                'vname' => 'LBL_FROM_DATE',
                'type' => 'date',
                'audited' => true,
                'comment' => 'Starting date of absence',
                'validation' =>
                    array (
                        'type' => 'isbefore',
                        'compareto' => 'to_date',
                    ),
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
                'custom_readonly' => true
            ),
        'to_date' =>
            array (
                'name' => 'to_date',
                'vname' => 'LBL_TO_DATE',
                'type' => 'date',
                'audited' => true,
                'comment' => 'Ending date of absence',
                'importable' => 'required',
                'required' => true,
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
                'custom_readonly' => true
            ),
        'absence_type' => array(
            'required' => true,
            'name' => 'absence_type',
            'vname' => 'LBL_ABSENCE_TYPE',
            'type' => 'enum',
            'options' => 'absence_type_list',
            'len' => 50,
            'comment' => 'Absences type for the user to choose',
            'merge_filter' => 'enabled',
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
),
    'relationships' => array (
        'absences_user' =>
            array (
                'lhs_module' => 'hr_Employee_absences',
                'lhs_table' => 'hr_employee_absences',
                'lhs_key' => 'user_id',
                'rhs_module' => 'Users',
                'rhs_table' => 'users',
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
VardefManager::createVardef('hr_Employee_absences', 'hr_Employee_absences', array('basic','assignable','security_groups'));