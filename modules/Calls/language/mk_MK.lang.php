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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Повици',
    'LBL_MODULE_TITLE' => 'Calls: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Call Search',
    'LBL_LIST_FORM_TITLE' => 'Call List',
    'LBL_NEW_FORM_TITLE' => 'Креирај закажана средба',
    'LBL_LIST_CLOSE' => 'Затвори',
    'LBL_LIST_SUBJECT' => 'Наслов',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_RELATED_TO' => 'Во врска со',
    'LBL_LIST_RELATED_TO_ID' => 'Related to ID',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Правец',
    'LBL_SUBJECT' => 'Предмет:',
    'LBL_REMINDER' => 'Reminder:',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_STATUS' => 'Состојба:',
    'LBL_DIRECTION' => 'Правец:',
    'LBL_DATE' => 'Почетен датум:',
    'LBL_DURATION' => 'Времетраење:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_HOURS_MINUTES' => '(часови/минути)',
    'LBL_DATE_TIME' => 'Дата на почеток и време:',
    'LBL_TIME' => 'Време на почеток:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Евидентирај повик',
    'LNK_NEW_MEETING' => 'Закажи состанок',
    'LNK_CALL_LIST' => 'Погледни Повици',
    'LNK_IMPORT_CALLS' => 'Импортирај Повици',
    'ERR_DELETE_RECORD' => 'При бришење на корисникот, морате да наведете број на налогот.',
    'LBL_INVITEE' => 'Поканети',
    'LBL_RELATED_TO' => 'Related To:',
    'LNK_NEW_APPOINTMENT' => 'Креирај закажана средба',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_NAME' => 'Име',
    'LBL_FIRST_NAME' => 'Име',
    'LBL_LAST_NAME' => 'Презиме',
    'LBL_EMAIL' => 'e-пошта',
    'LBL_PHONE' => 'Телефон',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Прати Е-Мејл на сите поканети',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_SEARCH_BUTTON' => 'Пребарувај',
    'LBL_ADD_BUTTON' => 'Додади',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Повици',
    'LNK_SELECT_ACCOUNT' => 'Избери сметка',
    'LNK_NEW_ACCOUNT' => 'Нов Корисник',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенцијални купувачи',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_USERS_SUBPANEL_TITLE' => 'Корисници',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Забелешки',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_LIST_MY_CALLS' => 'Мои повици',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_ASSIGNED_TO_ID' => 'Доделен корисник',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Избриши',
    'LBL_ACCEPT_STATUS' => 'Статус на прифаќање',
    'LBL_ACCEPT_LINK' => 'Accept Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Откажи',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Потсетници',
    'LBL_REMINDERS_ACTIONS' => 'Акции:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'Кога:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Одстрани потсетник',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Додај ги сите поканети',
    'LBL_REMINDERS_ADD_REMINDER' => 'Додај потсетник',

    'LBL_RESCHEDULE' => 'Презакажи',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Дата',
    'LBL_RESCHEDULE_REASON' => 'Причина',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Презакажи',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Откажи',
    'LBL_SAVE' => 'Зачувај',

    'LBL_CALLS_RESCHEDULE' => 'Прераспоред на повици',
    'LBL_LIST_STATUS'=>'Статус',
    'LBL_LIST_DATE_MODIFIED'=>'Дата на промена',
    'LBL_LIST_DUE_DATE'=>'Доспева на',
    'LBL_RESCHEDULED_BY'=>'од',
);
