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
    'LBL_NAME' => 'Наслов',
    'LBL_CREATED_USER' => 'Крирано од корисник',
    'LBL_MODIFIED_USER' => 'Променето од корисник',
    'ERR_DELETE_RECORD' => 'При бришење на корисникот, морате да наведете број на налогот.',
    'LBL_ACCOUNT_NAME' => 'Наслов',
    'LBL_ACCOUNT' => 'Компанија:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_ADDRESS_INFORMATION' => 'Адреса',
    'LBL_ANNUAL_REVENUE' => 'Годишен обрт на сретства:',
    'LBL_ANY_ADDRESS' => 'Било која адреса:',
    'LBL_ANY_EMAIL' => 'Било која e-mail адреса:',
    'LBL_ANY_PHONE' => 'Било кој телефонски број:',
    'LBL_RATING' => 'Рангирање',
    'LBL_ASSIGNED_USER' => 'Корисник',
    'LBL_BILLING_ADDRESS_CITY' => 'Град за наплата:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Држава за наплата:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Поштенски број за наплата:',
    'LBL_BILLING_ADDRESS_STATE' => 'Населено Место за наплата:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Наплата Улица 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Наплата Улица 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Наплата Улица 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Наплата Улица:',
    'LBL_BILLING_ADDRESS' => 'Адреса на Фактура:',
    'LBL_ACCOUNT_INFORMATION' => 'Преглед',
    'LBL_CITY' => 'Град:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Држава:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Кориснички сметки',
    'LBL_DUPLICATE' => 'Можен дупликат на Корисник',
    'LBL_EMAIL' => 'Е-Мејл:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'Друга Email адреса:',
    'LBL_OTHER_PHONE' => 'Друг телефон:',
    'LBL_OWNERSHIP' => 'Сопственост:',
    'LBL_PARENT_ACCOUNT_ID' => 'Број на надреден Корисник',
    'LBL_PHONE_ALT' => 'Друг телефон:',
    'LBL_PHONE_FAX' => 'Телефон/Факс:',
    'LBL_PHONE_OFFICE' => 'Фиксен Телефон:',
    'LBL_PHONE' => 'Телефон:',
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
    'MSG_DUPLICATE' => 'Внесувањето на овој корисник може да направи дупликат. Можете да изберете од листата на постоечки корисници или одберете Зачувај за да направите нов.',
    'MSG_SHOW_DUPLICATES' => 'Внесувањето на овој корисник може да направи дупликат. Можете да одберете Зачувај за да продолжите да креирате нов корисник со претходно внесеите информации или одберете Откажи.',
    'NTC_DELETE_CONFIRMATION' => 'Дали сте сигурни дека сакате да го избришете овој запис?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'LBL_LIST_FORM_TITLE' => 'Quotes List',
    'LBL_MODULE_NAME' => 'Понуди',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Quotes',
    'LNK_NEW_RECORD' => 'Create Quote',
    'LNK_LIST' => 'View Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'Search Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_NEW_FORM_TITLE' => 'New Quote',
    'LBL_TERMS_C' => 'Услови',
    'LBL_APPROVAL_ISSUE' => 'Одобрени Проблеми',
    'LBL_APPROVAL_STATUS' => 'Статус на одобрување',
    'LBL_BILLING_ACCOUNT' => 'Сметка',
    'LBL_BILLING_CONTACT' => 'Контакт',
    'LBL_EXPIRATION' => 'Важи до',
    'LBL_QUOTE_NUMBER' => 'Број на Понуда',
    'LBL_OPPORTUNITY' => 'Moжност',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'Фаза на Понуда',
    'LBL_TERM' => 'Услови на плаќање',
    'LBL_SUBTOTAL_AMOUNT' => 'Меѓузбир',
    'LBL_DISCOUNT_AMOUNT' => 'Попуст',
    'LBL_TAX_AMOUNT' => 'Данок',
    'LBL_SHIPPING_AMOUNT' => 'Испорака',
    'LBL_TOTAL_AMT' => 'Вкупно',
    'VALUE' => 'Наслов',
    'LBL_EMAIL_ADDRESSES' => 'Е-Мејл адреси',
    'LBL_LINE_ITEMS' => 'Ставки',
    'LBL_GRAND_TOTAL' => 'ВКУПНО',
    'LBL_INVOICE_STATUS' => 'Статус на Фактура',
    'LBL_PRODUCT_QUANITY' => 'Количина',
    'LBL_PRODUCT_NAME' => 'Производ',
    'LBL_PART_NUMBER' => 'Број на Дел',
    'LBL_PRODUCT_NOTE' => 'Забелешка',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_LIST_PRICE' => 'Листа',
    'LBL_DISCOUNT_AMT' => 'Попуст',
    'LBL_UNIT_PRICE' => 'Продажна Цена',
    'LBL_TOTAL_PRICE' => 'Вкупно',
    'LBL_VAT' => 'Данок', // VAT
    'LBL_VAT_AMT' => 'Износ на Данокот', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Додади ставка за Производ ',
    'LBL_SERVICE_NAME' => 'Услуга',
    'LBL_SERVICE_LIST_PRICE' => 'Листа',
    'LBL_SERVICE_PRICE' => 'Продажна Цена',
    'LBL_SERVICE_DISCOUNT' => 'Попуст',
    'LBL_ADD_SERVICE_LINE' => 'Додади ставка за Услуга ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Избриши',
    'LBL_CONVERT_TO_INVOICE' => 'Convert to Invoice',
    'LBL_PRINT_AS_PDF' => 'Принтај како PDF',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Број',
    'LBL_PDF_NAME' => 'Понуда',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Quotation Date',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Меѓузбир + Данок',//pre shipping
    'LBL_EMAIL_PDF' => 'Прати PDF на Е-Мејл',
    'LBL_ADD_GROUP' => 'Додај Група',
    'LBL_DELETE_GROUP' => 'Избриши Група',
    'LBL_GROUP_NAME' => 'Име на Група',
    'LBL_GROUP_TOTAL' => 'Вкупно за Група',
    'LBL_SHIPPING_TAX' => 'Транспортен Данок',
    'LBL_SHIPPING_TAX_AMT' => 'Транспортен Данок',
    'LBL_IMPORT_LINE_ITEMS' => 'Импортирај ставки',
    'LBL_CREATE_OPPORTUNITY' => 'Креирај можност',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Вкупно за ставка (стандардна валута)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Попуст (стандардна валута)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Данок (стандардна валута)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Транспорт (стандардна валута)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Вкупно (стандардна валута)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Транспортна такса (стандардна валута)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ВКУПНО (стандардна валута)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Меѓузбир + Данок (зададена валута)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Понуди: Фактури',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ставки',
    'LBL_AOS_PRODUCT_QUOTES' => 'Понуди за Производот',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
