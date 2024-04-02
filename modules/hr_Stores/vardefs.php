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

$dictionary['hr_Stores'] = array(
    'table' => 'hr_stores',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        //start regions relate
        'region_id' =>
            array (
                'required' => false,
                'name' => 'region_id',
                'vname' => 'LBL_REGION',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'audited' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'region_name' =>
            array(
                'required' => true,
                'name' => 'region_name',
                'rname' => 'name',
                'id_name' => 'region_id',
                'vname' => 'LBL_REGION',
                'type' => 'relate',
                'link' => 'store_to_region',
                'table' => 'hr_regions',
                'isnull' => 'true',
                'module' => 'hr_Regions',
                'source' => 'non-db',
            ),
        'store_to_region' =>
            array(
                'name' => 'store_to_region',
                'type' => 'link',
                'vname' => 'LBL_REGION',
                'relationship' => 'stores_to_region',
                'source' => 'non-db',
            ),
        //end regions relate
),
    'relationships' => array (
        'stores_to_region' =>
            array (
                'lhs_module' => 'hr_Stores',
                'lhs_table' => 'hr_stores',
                'lhs_key' => 'region_id',
                'rhs_module' => 'hr_Regions',
                'rhs_table' => 'hr_regions',
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
VardefManager::createVardef('hr_Stores', 'hr_Stores', array('basic','assignable','security_groups'));