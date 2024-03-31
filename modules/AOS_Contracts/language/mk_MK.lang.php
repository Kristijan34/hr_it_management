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
    'LBL_ASSIGNED_TO_NAME' => 'Contract Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Сметка',
    'LBL_OPPORTUNITY' => 'Moжност',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата на креирање',
    'LBL_DATE_MODIFIED' => 'Дата на промена',
    'LBL_MODIFIED' => 'Променето од',
    'LBL_MODIFIED_NAME' => 'Променето од - Име',
    'LBL_CREATED' => 'Креирано од',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Избришан',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Крирано од корисник',
    'LBL_MODIFIED_USER' => 'Променето од корисник',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Договори',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Create Contract',
    'LNK_LIST' => 'View Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Start Date',
    'LBL_END_DATE' => 'End Date',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Статус',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Контакт',
    'LBL_ADD_GROUP' => 'Додај Група',
    'LBL_DELETE_GROUP' => 'Избриши Група',
    'LBL_GROUP_NAME' => 'Име на Група',
    'LBL_GROUP_TOTAL' => 'Вкупно за Група',
    'LBL_PRODUCT_QUANITY' => 'Количина',
    'LBL_PRODUCT_NAME' => 'Производ',
    'LBL_PART_NUMBER' => 'Број на Дел',
    'LBL_PRODUCT_NOTE' => 'Забелешка',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_LIST_PRICE' => 'Листа',
    'LBL_DISCOUNT_AMT' => 'Попуст',
    'LBL_UNIT_PRICE' => 'Продажна Цена',
    'LBL_TOTAL_PRICE' => 'Вкупно',
    'LBL_VAT' => 'Данок',
    'LBL_VAT_AMT' => 'Износ на Данокот',
    'LBL_SERVICE_NAME' => 'Услуга',
    'LBL_SERVICE_LIST_PRICE' => 'Листа',
    'LBL_SERVICE_PRICE' => 'Продажна Цена',
    'LBL_SERVICE_DISCOUNT' => 'Попуст',
    'LBL_LINE_ITEMS' => 'Ставки',
    'LBL_SUBTOTAL_AMOUNT' => 'Меѓузбир',
    'LBL_DISCOUNT_AMOUNT' => 'Попуст',
    'LBL_TAX_AMOUNT' => 'Данок',
    'LBL_SHIPPING_AMOUNT' => 'Испорака',
    'LBL_TOTAL_AMT' => 'Вкупно',
    'LBL_GRAND_TOTAL' => 'ВКУПНО',
    'LBL_SHIPPING_TAX' => 'Транспортен Данок',
    'LBL_SHIPPING_TAX_AMT' => 'Транспортен Данок',
    'LBL_ADD_PRODUCT_LINE' => 'Додади ставка за Производ ',
    'LBL_ADD_SERVICE_LINE' => 'Додади ставка за Услуга ',
    'LBL_PRINT_AS_PDF' => 'Принтај како PDF',
    'LBL_EMAIL_PDF' => 'Прати PDF на Е-Мејл',
    'LBL_PDF_NAME' => 'Договор',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Вкупно за ставка (стандардна валута)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Попуст (стандардна валута)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Данок (стандардна валута)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Транспорт (стандардна валута)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Вкупно (стандардна валута)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Транспортна такса (стандардна валута)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ВКУПНО (стандардна валута)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ставки',
    'LBL_AOS_PRODUCT_QUOTES' => 'Понуди за Производот',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
