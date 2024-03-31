<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2022 SalesAgility Ltd.
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

$mod_strings = [

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
    'LBL_LIST_FORM_TITLE' => 'External OAuth Provider List',
    'LBL_MODULE_NAME' => 'External OAuth Providers',
    'LBL_MODULE_TITLE' => 'External OAuth Providers',
    'LBL_HOMEPAGE_TITLE' => 'My External OAuth Providers',
    'LNK_NEW_RECORD' => 'Create External OAuth Provider',

    'LNK_LIST' => 'External OAuth Providers',
    'LBL_SEARCH_FORM_TITLE' => 'Search External OAuth Providers',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_NEW_FORM_TITLE' => 'New External OAuth Provider',

    'LBL_LIST_DELETE' => 'Избриши',
    'LBL_TYPE' => 'Тип',
    'LBL_CONNECTOR' => 'Connector',
    'LBL_REDIRECT_URI' => 'Redirect URI',

    'LBL_CLIENT_ID' => 'Client Id',
    'LBL_CLIENT_SECRET' => 'Client Secret',
    'LBL_SCOPE' => 'Scope',
    'LBL_URL_AUTHORIZE' => 'Authorize Url',
    'LBL_AUTHORIZE_URL_OPTIONS' => 'Authorize Url Options',
    'LBL_URL_ACCESS_TOKEN' => 'Access Token Url',
    'LBL_EXTRA_PROVIDER_PARAMS' => 'Extra Provider Params',
    'LBL_GET_TOKEN_REQUEST_GRANT' => 'Get Token Request grant type',
    'LBL_GET_TOKEN_REQUEST_OPTIONS' => 'Get Token Request options',
    'LBL_REFRESH_TOKEN_REQUEST_GRANT' => 'Refresh Token Request Grant Type',
    'LBL_REFRESH_TOKEN_REQUEST_OPTIONS' => 'Refresh Token Request Options',

    'LBL_ACCESS_TOKEN_MAPPING' => 'Access Token Mapping',
    'LBL_EXPIRES_IN_MAPPING' => 'Expires In Mapping',
    'LBL_REFRESH_TOKEN_MAPPING' => 'Refresh Token Mapping',
    'LBL_TOKEN_TYPE_MAPPING' => 'Token Type Mapping',

    'LBL_EXTRA' => 'Extra configurations',
    'LBL_MAPPING' => 'Mapping configurations',
    'LBL_OTHER' => 'Останато',


    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Provider',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Provider',
    'LNK_LIST_INBOUND_EMAILS' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connections',

    'LBL_OWNER' => 'Сопственик',
];
