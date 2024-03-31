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
    'LBL_MODULE_NAME' => 'Вработени',
    'LBL_MODULE_TITLE' => 'Employees: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Employee Search',
    'LBL_LIST_FORM_TITLE' => 'Вработени',
    'LBL_NEW_FORM_TITLE' => 'New Employee',
    'LBL_LOGIN' => 'Login',
    'LBL_RESET_PREFERENCES' => 'Reset To Default Preferences',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Current Time:',
    'LBL_CURRENCY' => 'Валута:',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_LAST_NAME' => 'Презиме',
    'LBL_LIST_EMPLOYEE_NAME' => 'Employee Name',
    'LBL_LIST_DEPARTMENT' => 'Оддел',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'e-пошта',
    'LBL_LIST_USER_NAME' => 'Име на корисник',
    'LBL_ERROR' => 'Error:',
    'LBL_PASSWORD' => 'Лозинка:',
    'LBL_USER_NAME' => 'Име на Корисник:',
    'LBL_USER_TYPE' => 'Тип на Корисник',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_LAST_NAME' => 'Презиме:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Јазик:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Информации за вработен',
    'LBL_OFFICE_PHONE' => 'Телефон во канцеларија:',
    'LBL_REPORTS_TO' => 'Reports to Id:',
    'LBL_REPORTS_TO_NAME' => 'Одговара на',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_NOTES' => 'Notes:',
    'LBL_DEPARTMENT' => 'Оддел:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_ANY_PHONE' => 'Било кој телефонски број:',
    'LBL_ANY_EMAIL' => 'Било која e-mail адреса:',
    'LBL_ADDRESS' => 'Address:',
    'LBL_CITY' => 'Град:',
    'LBL_STATE' => 'Општина:',
    'LBL_POSTAL_CODE' => 'Zip код/поштенски код:',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_NAME' => 'Име:',
    'LBL_MOBILE_PHONE' => 'Мобилен:',
    'LBL_FAX' => 'Факс:',
    'LBL_EMAIL' => 'E-Мејл адреса:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_WORK_PHONE' => 'Work Phone:',
    'LBL_EMPLOYEE_STATUS' => 'Employee Status:',
    'LBL_PRIMARY_ADDRESS' => 'Примарна адреса:',
    'LBL_SAVED_SEARCH' => 'Опции за Изгледот',
    'LBL_MESSENGER_ID' => 'IM Name:',
    'LBL_MESSENGER_TYPE' => 'IM Type:',
    'ERR_LAST_ADMIN_1' => 'The employee name "',
    'ERR_LAST_ADMIN_2' => '" is the last employee with administrator access. At least one employee must be an administrator.',
    'LNK_NEW_EMPLOYEE' => 'Креирај вработени',
    'LNK_EMPLOYEE_LIST' => 'Види вработени',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Статус на вработен',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notify on Assignment',
    'LBL_IS_ADMIN' => 'Е Администратор',
    'LBL_GROUP' => 'Група на корисници',
    'LBL_PHOTO' => 'Фотографија',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Одбери' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentication Id',
    'LBL_EXT_AUTHENTICATE' => 'External Authentication',
    'LBL_GROUP_USER' => 'Група на корисници',
    'LBL_LIST_ACCEPT_STATUS' => 'Статус на прифаќање',
    'LBL_MODIFIED_BY' => 'Променето од',
    'LBL_MODIFIED_BY_ID' => 'Променето од - ID',
    'LBL_CREATED_BY_NAME' => 'Креирано од', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API User',
    'LBL_PSW_MODIFIED' => 'Лозинката е последен пат променета',
    'LBL_SHOW_ON_EMPLOYEES' => 'Прикажи досие на вработен',
    'LBL_USER_HASH' => 'Лозинка',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Системски Генерирана Лозинка',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_FAX_PHONE' => 'Факс',
    'LBL_STATUS' => 'Статус',
    'LBL_ADDRESS_CITY' => 'Град',
    'LBL_ADDRESS_COUNTRY' => 'Држава',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_ADDRESS_POSTALCODE' => 'Поштенски код',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Улица и број',

    'LBL_DATE_MODIFIED' => 'Дата на промена',
    'LBL_DATE_ENTERED' => 'Датум на внесување',
    'LBL_DELETED' => 'Избришан',

    'LBL_BUTTON_SELECT' => 'Одбери',
    'LBL_BUTTON_CLEAR' => 'Избриши',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'ОАuth токени',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Улоги',
    'LBL_SECURITYGROUPS' => 'Безбедносни групи',
    'LBL_PROSPECT_LIST' => 'Листа на потенцијални клиенти',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
