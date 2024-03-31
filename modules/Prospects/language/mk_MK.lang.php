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
    'LBL_MODULE_NAME' => 'Целни групи',
    'LBL_MODULE_ID' => 'Целни групи',
    'LBL_INVITEE' => 'Директни извештаи',
    'LBL_MODULE_TITLE' => 'Targets: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Target Search',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => 'New Target',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_LAST_NAME' => 'Презиме',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-пошта',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_FIRST_NAME' => 'Име',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_ASSIGNED_TO_ID' => 'Доделено на:',
    'LBL_CAMPAIGN_ID' => 'Кампања ID',
    'LBL_EXISTING_ACCOUNT' => 'Користеше постоечка сметка',
    'LBL_CREATED_ACCOUNT' => 'Креирана е нова сметка',
    'LBL_CREATED_CALL' => 'Креиран е нов повик',
    'LBL_CREATED_MEETING' => 'Креиран е нов состанок',
    'LBL_NAME' => 'Име:',
    'LBL_PROSPECT_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_OFFICE_PHONE' => 'Телефон во канцеларија:',
    'LBL_ANY_PHONE' => 'Било кој телефонски број:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_LAST_NAME' => 'Презиме:',
    'LBL_MOBILE_PHONE' => 'Мобилен:',
    'LBL_HOME_PHONE' => 'Почетна:',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Примарна адреса - Улица:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Примарна адреса - Град:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Примарна адреса - Држава:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Примарна адреса - Земја:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Примарна адреса - Поштенски код:',
    'LBL_ALT_ADDRESS_STREET' => 'Алтернативна адреса - Улица:',
    'LBL_ALT_ADDRESS_CITY' => 'Алтернативна адреса - Град:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Алтернативна адреса - Држава:',
    'LBL_ALT_ADDRESS_STATE' => 'Алтернативна адреса - Земја:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Алтернативна адреса - Поштенски код:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Оддел:',
    'LBL_BIRTHDATE' => 'Дата на раѓање:',
    'LBL_EMAIL_ADDRESS' => 'E-Мејл адреса:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Друга Email адреса:',
    'LBL_ANY_EMAIL' => 'Било која e-mail адреса:',
    'LBL_ASSISTANT' => 'Асистент:',
    'LBL_ASSISTANT_PHONE' => 'Асистент - Телефон:',
    'LBL_DO_NOT_CALL' => 'Немој да се јавуваш:',
    'LBL_EMAIL_OPT_OUT' => 'Откажана Е-Мејл адреса:',
    'LBL_PRIMARY_ADDRESS' => 'Примарна адреса:',
    'LBL_ALTERNATE_ADDRESS' => 'Друга адреса:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_CITY' => 'Град:',
    'LBL_STATE' => 'Општина:',
    'LBL_POSTAL_CODE' => 'Zip код/поштенски код:',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_OPP_NAME' => 'Можност - Име:',
    'LBL_IMPORT_VCARD' => 'Импортирај vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматски креирај нов контакт со импортирање на vCard од твојот фајл систем.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'Креирај од vCard',
    'LNK_NEW_ACCOUNT' => 'Креирај сметка',
    'LNK_NEW_OPPORTUNITY' => 'Креирај можност',
    'LNK_NEW_CASE' => 'Креирај случај',
    'LNK_NEW_NOTE' => 'Креирај Забелешка или Додај Прилог',
    'LNK_NEW_CALL' => 'Евидентирај повик',
    'LNK_NEW_EMAIL' => 'Архивирај Еmail порака',
    'LNK_NEW_MEETING' => 'Закажи состанок',
    'LNK_NEW_TASK' => 'Креирај задача',
    'LNK_NEW_APPOINTMENT' => 'Креирај закажана средба',
    'LNK_IMPORT_PROSPECTS' => 'Import Targets',
    'NTC_DELETE_CONFIRMATION' => 'Дали сте сигурни дека сакате да го избришете овој запис?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Дали сте сигурни дека сакате да го избришете овој контакт од случајот?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Отпоздравување',
    'LBL_CREATED_OPPORTUNITY' => 'Крирана е нова можност',
    'LNK_SELECT_ACCOUNT' => "Избери сметка",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'View Targets',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Кампањи',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Листи на целни групи',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Targets',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Невалидна Email адреса:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Целни групи',
    'LBL_PROSPECT_LIST' => 'Листа на потенцијални клиенти',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convert Target',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'Нов контакт',
    'LBL_CREATED_CONTACT' => "Креиран е нов контакт",
    'LBL_CAMPAIGNS' => 'Кампањи',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Логови од кампањи',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Lead Id',
    'LBL_CONVERTED_LEAD' => 'Converted Lead',
    'LBL_ACCOUNT_NAME' => 'Име на сметка',
    'LBL_EDIT_ACCOUNT_NAME' => 'Име на сметка:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Историја',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Настани',
);
