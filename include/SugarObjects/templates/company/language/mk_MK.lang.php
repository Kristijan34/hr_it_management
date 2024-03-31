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
    'ERR_DELETE_RECORD' => 'При бришење на корисникот, морате да наведете број на налогот.',
    'LBL_ACCOUNT_NAME' => 'Име на компанија:',
    'LBL_ACCOUNT' => 'Компанија:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_ANNUAL_REVENUE' => 'Годишен обрт на сретства:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_ANY_EMAIL' => 'Било која e-mail адреса:',
    'LBL_EMAIL_NON_PRIMARY' => '
Непримарни E-mail адреси',
    'LBL_ANY_PHONE' => 'Било кој телефонски број:',
    'LBL_ASSIGNED_TO_NAME' => 'Корисник:',
    'LBL_RATING' => 'Рангирање',
    'LBL_ASSIGNED_TO' => 'Доделено на:',
    'LBL_ASSIGNED_USER' => 'Доделено на:',
    'LBL_ASSIGNED_TO_ID' => 'Доделено на:',
    'LBL_BILLING_ADDRESS_CITY' => 'Град за наплата:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Држава за наплата:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Поштенски број за наплата:',
    'LBL_BILLING_ADDRESS_STATE' => 'Населено Место за наплата:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Наплата Улица 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Наплата Улица 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Наплата Улица 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Наплата Улица:',
    'LBL_BILLING_ADDRESS' => 'Адреса на Фактура:',
    'LBL_ACCOUNT_INFORMATION' => 'Информации за компанијата',
    'LBL_CITY' => 'Град:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_DATE_ENTERED' => 'Дата на креирање:',
    'LBL_DATE_MODIFIED' => 'Дата на промена:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Кориснички сметки',
    'LBL_DESCRIPTION_INFORMATION' => 'Описна информација',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DUPLICATE' => 'Можен дупликат на Корисник',
    'LBL_EMAIL' => 'E-Мејл адреса:',
    'LBL_EMPLOYEES' => 'Вработени:',
    'LBL_FAX' => 'Факс:',
    'LBL_INDUSTRY' => 'Индустрија:',
    'LBL_LIST_ACCOUNT_NAME' => 'Име на сметка',
    'LBL_LIST_CITY' => 'Град',
    'LBL_LIST_EMAIL_ADDRESS' => 'Е-Мејл Адреса',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_STATE' => 'Состојба',
    'LBL_MEMBER_OF' => 'Член на:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Организации членки',
    'LBL_NAME' => 'Име:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Друга Email адреса:',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_OWNERSHIP' => 'Сопственост:',
    'LBL_PARENT_ACCOUNT_ID' => 'Број на надреден Корисник',
    'LBL_PHONE_ALT' => 'Друг телефон:',
    'LBL_PHONE_FAX' => 'Телефон/Факс:',
    'LBL_PHONE_OFFICE' => 'Телефон во канцеларија:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_EMAIL_ADDRESS' => 'Е-Мејл Адреса',
    'LBL_EMAIL_ADDRESSES' => 'Е-Мејл Адреса(и)',
    'LBL_POSTAL_CODE' => 'Zip код/поштенски код:',
    'LBL_SAVE_ACCOUNT' => 'Зачувај Корисник',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Град на испорака:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Земја на испорака:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Поштенски број на испорака:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Место на Испорака:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Улица на испорака 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Улица на испорака 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Улица на испорака 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Улица на испорака:',
    'LBL_SHIPPING_ADDRESS' => 'Адреса на испорака:',

    'LBL_STATE' => 'Општина:',
    'LBL_TICKER_SYMBOL' => 'Симбол на берза:',
    'LBL_TYPE' => 'Тип:',
    'LBL_WEBSITE' => 'Веб страница:',

    'LNK_ACCOUNT_LIST' => 'Кориснички сметки',
    'LNK_NEW_ACCOUNT' => 'Креирај сметка',

    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',

    'NTC_DELETE_CONFIRMATION' => 'Дали сте сигурни дека сакате да го избришете овој запис?',

    'LBL_EDIT_BUTTON' => 'Промени  ',
    'LBL_REMOVE' => 'Избриши',

);
