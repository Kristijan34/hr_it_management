<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Доделено на Корисник ID',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата на креирање',
    'LBL_DATE_MODIFIED' => 'Дата на промена',
    'LBL_MODIFIED' => 'Променето од',
    'LBL_MODIFIED_NAME' => 'Променето од - Име',
    'LBL_CREATED' => 'Креирано од',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Избришан',
    'LBL_NAME' => 'Име',
    'LBL_CREATED_USER' => 'Крирано од корисник',
    'LBL_MODIFIED_USER' => 'Променето од корисник',
    'LBL_LIST_NAME' => 'Име',
    'LBL_EDIT_BUTTON' => 'Промени',
    'LBL_REMOVE' => 'Избриши',
    'LBL_LIST_FORM_TITLE' => 'Reports List',
    'LBL_MODULE_NAME' => 'Извештаи',
    'LBL_MODULE_TITLE' => 'Извештаи',
    'LBL_HOMEPAGE_TITLE' => 'My Reports',
    'LNK_NEW_RECORD' => 'Create Report',
    'LNK_LIST' => 'Извештаи',
    'LBL_SEARCH_FORM_TITLE' => 'Search Reports',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_NEW_FORM_TITLE' => 'New Reports',
    'LBL_REPORT_MODULE' => 'Report Module',
    'LBL_GRAPHS_PER_ROW' => 'Charts per row',
    'LBL_FIELD_LINES' => 'Display Fields',
    'LBL_ADD_FIELD' => 'Add Field',
    'LBL_CONDITION_LINES' => 'Conditions',
    'LBL_ADD_CONDITION' => 'Add Condition',
    'LBL_EXPORT' => 'Експортирај',
    'LBL_DOWNLOAD_PDF' => 'Download PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Add To Target List',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Module tree',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Fields',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Conditions',
    'LBL_TOTAL' => 'Вкупно',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Графикони',
    'LBL_ADD_CHART' => 'Add chart',
    'LBL_ADD_PARENTHESIS' => 'Drop parenthesis',
    'LBL_CHART_TITLE' => 'Наслов',
    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_X_FIELD' => 'X Axis',
    'LBL_CHART_Y_FIELD' => 'Y Axis',
    'LBL_AOR_REPORTS_DASHLET' => 'Извештаи',
    'LBL_DASHLET_TITLE' => 'Наслов',
    'LBL_DASHLET_REPORT' => 'Report',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Please choose a report',
    'LBL_DASHLET_SAVE' => 'Зачувај',
    'LBL_DASHLET_CHARTS' => 'Графикони',
    'LBL_DASHLET_ONLY_CHARTS' => 'Only show charts',
    'LBL_UPDATE_PARAMETERS' => 'Ажурирај',
    'LBL_PARAMETERS' => 'Parameters',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Drag and drop elements into field or condition area',
    'LBL_MAIN_GROUPS' => 'Main Group:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Unnamed Chart',
    'LBL_REPORT' => 'Report',
);
