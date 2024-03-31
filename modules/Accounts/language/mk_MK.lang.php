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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    // Dashlet Categories
    'LBL_CHARTS' => 'Графикони',
    'LBL_DEFAULT' => 'Прегледи',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'You must specify a record number in order to delete the account.',
    'LBL_ACCOUNT_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Име на Корисник:',
    'LBL_ACCOUNT' => 'Корисник:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_ANNUAL_REVENUE' => 'Годишен обрт на сретства:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_ANY_EMAIL' => 'Било која Е-Мејл адреса:',
    'LBL_ANY_PHONE' => 'Било кој телефон:',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на:',
    'LBL_ASSIGNED_TO_ID' => 'Доделен корисник:',
    'LBL_BILLING_ADDRESS_CITY' => 'Наплата Град:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Наплата Држава:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Наплата Поштенски број:',
    'LBL_BILLING_ADDRESS_STATE' => 'Наплата Населено Место:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Наплата Улица 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Наплата Улица 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Наплата Улица 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Наплата Улица:',
    'LBL_BILLING_ADDRESS' => 'Адреса на Фактура:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Грешки',
    'LBL_CAMPAIGN_ID' => 'Кампања Број',
    'LBL_CASES_SUBPANEL_TITLE' => 'Случаи',
    'LBL_CITY' => 'Град:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_DATE_ENTERED' => 'Дата на креирање:',
    'LBL_DATE_MODIFIED' => 'Дата на промена:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Корисници',
    'LBL_DESCRIPTION_INFORMATION' => 'Инфо',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DUPLICATE' => 'Можен дупликат на Корисник',
    'LBL_EMAIL' => 'E-Мејл адреса:',
    'LBL_EMAIL_OPT_OUT' => 'Откажана Е-Мејл адреса:',
    'LBL_EMAIL_ADDRESSES' => 'Е-Мејл адреси',
    'LBL_EMPLOYEES' => 'Вработени:',
    'LBL_FAX' => 'Факс:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Историја',
    'LBL_HOMEPAGE_TITLE' => 'Мои Корисници',
    'LBL_INDUSTRY' => 'Индустрија:',
    'LBL_INVALID_EMAIL' => 'Невалидна Е-Мејл адреса:',
    'LBL_INVITEE' => 'Контакти',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенцијални купувачи',
    'LBL_LIST_ACCOUNT_NAME' => 'Име',
    'LBL_LIST_CITY' => 'Град',
    'LBL_LIST_CONTACT_NAME' => 'Име на контактот',
    'LBL_LIST_EMAIL_ADDRESS' => 'Е-Мејл Адреса',
    'LBL_LIST_FORM_TITLE' => 'Листа на Корисници',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_STATE' => 'Состојба',
    'LBL_MEMBER_OF' => 'Член на:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Организации членки',
    'LBL_MODULE_NAME' => 'Корисници',
    'LBL_MODULE_TITLE' => 'Корисници: Домашна страна',
    'LBL_MODULE_ID' => 'Корисници',
    'LBL_NAME' => 'Име:',
    'LBL_NEW_FORM_TITLE' => 'Нов Корисник',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Можности',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Друга Е-Мејл адреса:',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_OWNERSHIP' => 'Сопственост:',
    'LBL_PARENT_ACCOUNT_ID' => 'Број на надреден Корисник',
    'LBL_PHONE_ALT' => 'Друг телефон:',
    'LBL_PHONE_FAX' => 'Телефон/Факс:',
    'LBL_PHONE_OFFICE' => 'Телефон во канцеларија:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_POSTAL_CODE' => 'Поштенски број:',
    'LBL_PRODUCTS_TITLE' => 'Производи',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Копирај во Контакти',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Копирај...',
    'LBL_RATING' => 'Рангирање:',
    'LBL_SAVE_ACCOUNT' => 'Зачувај Корисник',
    'LBL_SEARCH_FORM_TITLE' => 'Пребарај Корисник',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Град на испорака:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Земја на испорака:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Поштенски код на испорака:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Испорака Место:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Улица на испорака 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Улица на испорака 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Улица на испорака 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Улица на испорака:',
    'LBL_SHIPPING_ADDRESS' => 'Адреса на испорака:',
    'LBL_SIC_CODE' => 'SIC Код:',
    'LBL_STATE' => 'Општина:',
    'LBL_TICKER_SYMBOL' => 'Симбол на берза:',
    'LBL_TYPE' => 'Тип:',
    'LBL_WEBSITE' => 'Веб страница:',
    'LBL_CAMPAIGNS' => 'Кампањи',
    'LNK_ACCOUNT_LIST' => 'Погледни Корисници',
    'LNK_NEW_ACCOUNT' => 'Креирај Корисник',
    'LNK_IMPORT_ACCOUNTS' => 'Импортирај Корисници',
    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',
    'LBL_ASSIGNED_USER_NAME' => 'Доделено на:',
    'LBL_PROSPECT_LIST' => 'Листа на потенцијални клиенти',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Корисници',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    //For export labels
    'LBL_PARENT_ID' => 'Надреден број',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Купени Производи и Услуги',

    'LBL_AOS_CONTRACTS' => 'Договори',
    'LBL_AOS_INVOICES' => 'Фактури',
    'LBL_AOS_QUOTES' => 'Понуди',
    'LBL_LIST_WEBSITE' => 'website',
);
