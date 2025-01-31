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
    'LBL_LIST_FORM_TITLE' => 'Event List',
    'LBL_MODULE_NAME' => 'Настан',
    'LBL_MODULE_TITLE' => 'Настан',
    'LBL_HOMEPAGE_TITLE' => 'My Event',
    'LNK_NEW_RECORD' => 'Create Event',
    'LNK_LIST' => 'View Events',
    'LBL_SEARCH_FORM_TITLE' => 'Search Event',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Види историја',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Активности',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => 'Location',
    'LBL_START_DATE' => 'start date',
    'LBL_END_DATE' => 'End Date/Time',
    'LBL_BUDGET' => 'Буџет',
    'LBL_DATE' => 'Start Date',
    'LBL_DATE_END' => 'End Date',
    'LBL_DURATION' => 'Duration',
    'LBL_INVITE_TEMPLATES' => 'Email Invite Template',
    'LBL_INVITE_PDF' => 'Send Invites',
    'LBL_EDITVIEW_PANEL1' => 'Event Details',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Делегати',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Select Delegates',
    'LBL_SELECT_DELEGATES_TITLE' => 'Select Delegates:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Target List',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Целни групи',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Контакти',
    'LBL_SELECT_DELEGATES_LEADS' => 'Потенцијални купувачи',
    'LBL_MANAGE_DELEGATES' => 'Manage Delegates',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Manage Delegates:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Manage Acceptances',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Manage Acceptances:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Прифатен',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Одбиен',
    'LBL_MANAGE_POPUP_ERROR' => 'No delegates have been selected.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invited',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Not Invited',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Attended',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Not Attended',
    'LBL_SUCCESS_MSG' => 'All invites have been sent successfully.',
    'LBL_ERROR_MSG_1' => 'All Linked contacts have already been Invited.',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Invalid Email Template',
    'LBL_EMAIL_INVITE' => 'Email Invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Контакти',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locations',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Потенцијални купувачи',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Целни групи',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Делегати',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Име',
    'LBL_ACCOUNT_NAME' => 'Company',
    'LBL_SIGNATURE' => 'Потпис',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invited',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Статус',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Прифати',
    'LBL_DECLINE_LINK' => 'Одбиј',
    
);
