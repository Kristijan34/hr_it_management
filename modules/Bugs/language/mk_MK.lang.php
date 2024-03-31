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
    'LBL_MODULE_NAME' => 'Bug-ови',
    'LBL_MODULE_TITLE' => 'Bug Tracker: Home',
    'LBL_MODULE_ID' => 'Bug-ови',
    'LBL_SEARCH_FORM_TITLE' => 'Bug Search',
    'LBL_LIST_FORM_TITLE' => 'Bug List',
    'LBL_NEW_FORM_TITLE' => 'New Bug',
    'LBL_SUBJECT' => 'Предмет:',
    'LBL_NUMBER' => 'Број:',
    'LBL_STATUS' => 'Состојба:',
    'LBL_PRIORITY' => 'Приоритет:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_CONTACT_NAME' => 'Име на контактот:',
    'LBL_CONTACT_ROLE' => 'Улога:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Наслов',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_PRIORITY' => 'Приоритет',
    'LBL_LIST_RESOLUTION' => 'Решение',
    'LBL_LIST_LAST_MODIFIED' => 'Последно изменет',
    'LBL_INVITEE' => 'Контакти',
    'LBL_TYPE' => 'Тип:',
    'LBL_LIST_TYPE' => 'Тип',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_RELEASE' => 'Release:',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_BUG_LIST' => 'View Bugs',
    'ERR_DELETE_RECORD' => 'You must specify a record number in order to delete the bug.',
    'LBL_LIST_MY_BUGS' => 'My Assigned Bugs',
    'LNK_IMPORT_BUGS' => 'Import Bugs',
    'LBL_FOUND_IN_RELEASE' => 'Found in Release:',
    'LBL_FIXED_IN_RELEASE' => 'Fixed in Release:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Fixed in Release',
    'LBL_WORK_LOG' => 'Работни записи:',
    'LBL_SOURCE' => 'Source:',
    'LBL_PRODUCT_CATEGORY' => 'Категорија:',

    'LBL_CREATED_BY' => 'Креирано од:',
    'LBL_MODIFIED_BY' => 'Последно пременет од:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Е-Мејл Адреса',
    'LBL_LIST_CONTACT_NAME' => 'Име на контактот',
    'LBL_LIST_ACCOUNT_NAME' => 'Име на сметка',
    'LBL_LIST_PHONE' => 'Телефон',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to remove this contact from this bug?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bug Tracker',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Историја',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Кориснички сметки',
    'LBL_CASES_SUBPANEL_TITLE' => 'Случаи',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Доделен корисник',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',

    'LBL_BUG_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
