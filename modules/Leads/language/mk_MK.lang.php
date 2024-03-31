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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Account Description',
    'LBL_ACCOUNT_ID' => 'Број на корисник',
    'LBL_ACCOUNT_NAME' => 'Име на сметка:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_ALT_ADDRESS_CITY' => 'Alt Address City',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Address Country',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Address Postalcode',
    'LBL_ALT_ADDRESS_STATE' => 'Alt Address State',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt Address Street 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt Address Street 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt Address Street',
    'LBL_ALTERNATE_ADDRESS' => 'Друга адреса:',
    'LBL_ALT_ADDRESS' => 'Друга адреса:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_ANY_EMAIL' => 'Било која e-mail адреса:',
    'LBL_ANY_PHONE' => 'Било кој телефонски број:',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_ASSIGNED_TO_ID' => 'Доделен корисник:',
    'LBL_CITY' => 'Град:',
    'LBL_CONTACT_ID' => 'Contact ID',
    'LBL_CONTACT_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Име на потенцијален купувач:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Улога:',
    'LBL_CONTACT' => 'Потенцијален купувач:',
    'LBL_CONVERTED_ACCOUNT' => 'Converted Account:',
    'LBL_CONVERTED_CONTACT' => 'Converted Contact:',
    'LBL_CONVERTED_OPP' => 'Converted Opportunity:',
    'LBL_CONVERTED' => 'Конвертирани',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convert Lead',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possible Contact: ',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_CREATED_NEW' => 'Created a new',
    'LBL_CREATED_ACCOUNT' => 'Креирана е нова сметка',
    'LBL_CREATED_CALL' => 'Креиран е нов повик',
    'LBL_CREATED_CONTACT' => 'Креиран е нов контакт',
    'LBL_CREATED_MEETING' => 'Креиран е нов состанок',
    'LBL_CREATED_OPPORTUNITY' => 'Крирана е нова можност',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Потенцијални купувачи',
    'LBL_DEPARTMENT' => 'Оддел:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DO_NOT_CALL' => 'Немој да се јавуваш:',
    'LBL_DUPLICATE' => 'Similar Leads',
    'LBL_EMAIL_ADDRESS' => 'E-Мејл адреса:',
    'LBL_EMAIL_OPT_OUT' => 'Откажана Е-Мејл адреса:',
    'LBL_EXISTING_ACCOUNT' => 'Користеше постоечка сметка',
    'LBL_EXISTING_CONTACT' => 'Користеше постоечки контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Користеше постоечка можност',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Историја',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Импортирај vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new lead by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Невалидна Email адреса:',
    'LBL_INVITEE' => 'Директни извештаи',
    'LBL_LAST_NAME' => 'Презиме:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Lead Source Description:',
    'LBL_LEAD_SOURCE' => 'Извор на потенцијлен клиент:',
    'LBL_LIST_ACCEPT_STATUS' => 'Статус на прифаќање',
    'LBL_LIST_ACCOUNT_NAME' => 'Име на сметка',
    'LBL_LIST_CONTACT_NAME' => 'Lead Name',
    'LBL_LIST_CONTACT_ROLE' => 'Улога',
    'LBL_LIST_DATE_ENTERED' => 'Дата на креирање',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-пошта',
    'LBL_LIST_FIRST_NAME' => 'Име',
    'LBL_LIST_FORM_TITLE' => 'Lead List',
    'LBL_LIST_LAST_NAME' => 'Презиме',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Lead Source Description',
    'LBL_LIST_LEAD_SOURCE' => 'Lead Source',
    'LBL_LIST_MY_LEADS' => 'Мои потенцијални купувачи',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_PHONE' => 'Телефон во канцеларија',
    'LBL_LIST_REFERED_BY' => 'Referred By',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Мобилен:',
    'LBL_MODULE_NAME' => 'Потенцијални купувачи',
    'LBL_MODULE_TITLE' => 'Leads: Home',
    'LBL_NAME' => 'Име:',
    'LBL_NEW_FORM_TITLE' => 'New Lead',
    'LBL_OFFICE_PHONE' => 'Телефон во канцеларија:',
    'LBL_OPP_NAME' => 'Можност - Име:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Opportunity Amount:',
    'LBL_OPPORTUNITY_ID' => 'Opportunity ID',
    'LBL_OPPORTUNITY_NAME' => 'Можност - Име:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Друга Email адреса:',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_APP' => 'Portal Application',
    'LBL_PORTAL_INFORMATION' => 'Портал - Информација',
    'LBL_PORTAL_NAME' => 'Портал - Име:',
    'LBL_POSTAL_CODE' => 'Zip код/поштенски код:',
    'LBL_STREET' => 'Улица',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street',
    'LBL_PRIMARY_ADDRESS' => 'Примарна адреса:',
    'LBL_REFERED_BY' => 'Referred By:',
    'LBL_REPORTS_TO_ID' => 'Reports To ID',
    'LBL_REPORTS_TO' => 'Му одговара на:',
    'LBL_SALUTATION' => 'Отпоздравување',
    'LBL_MODIFIED' => 'Променето од',
    'LBL_CREATED' => 'Креирано од',
    'LBL_SEARCH_FORM_TITLE' => 'Lead Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'Општина:',
    'LBL_STATUS_DESCRIPTION' => 'Status Description:',
    'LBL_STATUS' => 'Состојба:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Create Lead From vCard',
    'LNK_LEAD_LIST' => 'View Leads',
    'LNK_NEW_ACCOUNT' => 'Креирај сметка',
    'LNK_NEW_APPOINTMENT' => 'Креирај закажана средба',
    'LNK_NEW_CONTACT' => 'Креирај контакт',
    'LNK_NEW_LEAD' => 'Внеси можност',
    'LNK_NEW_NOTE' => 'Креирај белешка',
    'LNK_NEW_TASK' => 'Креирај задача',
    'LNK_NEW_CASE' => 'Креирај случај',
    'LNK_NEW_CALL' => 'Евидентирај повик',
    'LNK_NEW_MEETING' => 'Закажи состанок',
    'LNK_NEW_OPPORTUNITY' => 'Креирај можност',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Дали сте сигурни дека сакате да го избришете овој запис?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this lead from this case?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Кампањи',
    'LBL_CAMPAIGN' => 'Кампања:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Доделен корисник',
    'LBL_PROSPECT_LIST' => 'Листа на потенцијални клиенти',
    'LBL_CAMPAIGN_LEAD' => 'Кампањи',
    'LBL_BIRTHDATE' => 'Дата на раѓање:',
    'LBL_ASSISTANT_PHONE' => 'Асистент - Телефон',
    'LBL_ASSISTANT' => 'Асистент',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Кампањи',
    'LBL_CONVERT_MODULE_NAME' => 'Модул',
    'LBL_CONVERT_REQUIRED' => 'Потребно',
    'LBL_CONVERT_SELECT' => 'Allow Selection',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Промени',
    'LBL_CONVERT_DELETE' => 'Избриши',
    'LBL_CONVERT_ADD_MODULE' => 'Add Module',
    'LBL_CREATE' => 'Креирај',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Import Leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Кампања ID',
    'LBL_EDITLAYOUT' => 'Промени Изглед' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Промени' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Настани',
);
