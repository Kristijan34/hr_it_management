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
    'LBL_LIST_FORM_TITLE' => 'Outbound Email Accounts List',
    'LBL_MODULE_NAME' => 'Outbound Email Accounts',
    'LBL_MODULE_TITLE' => 'Outbound Email Accounts',
    'LBL_HOMEPAGE_TITLE' => 'My Outbound Email Accounts',
    'LNK_NEW_RECORD' => 'Create Outbound Email Accounts',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Outbound Email Accounts',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Outbound Email Accounts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_NEW_FORM_TITLE' => 'New Outbound Email Accounts',
    'LBL_USERNAME' => 'Корисничко име',
    'LBL_PASSWORD' => 'Лозинка',
    'LBL_SMTP_SERVERNAME' => 'SMTP Server Name',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTP порт',
    'LBL_SMTP_PROTOCOL' => 'SMTP Protocol',
    'LBL_EDITVIEW_PANEL1' => 'Account settings',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Промена на лозинка',
    'LBL_SEND_TEST_EMAIL' => 'Прати тест Е-Мејл',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'The administrator has not yet configured the default outbound account. Unable to send test email.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Користите SMTP автентификација?',
    'LBL_MAIL_SMTPPASS' => 'Лозинка',
    'LBL_MAIL_SMTPPORT' => 'Порта',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Корисничко име',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Одбери Е-Мејл провајдер:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Е-Мејл Лозинка:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',

    'LBL_TYPE' => 'Тип',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Безбедносни групи',

    'LBL_OWNER' => 'Сопственик',
    'LBL_OWNER_NAME' => 'Сопственик',

    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections'
);
