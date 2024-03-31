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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Календар',
    'LBL_MODULE_TITLE' => 'Календар',
    'LNK_NEW_CALL' => 'Schedule Call',
    'LNK_NEW_MEETING' => 'Закажи состанок',
    'LNK_NEW_TASK' => 'Креирај задача',
    'LNK_CALL_LIST' => 'Повици',
    'LNK_MEETING_LIST' => 'Состаноци',
    'LNK_TASK_LIST' => 'Задачи',
    'LNK_TASK' => 'Задача',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Настан',
    'LNK_EVENT_VIEW' => 'View Event',
    'LNK_VIEW_CALENDAR' => 'Денес',
    'LNK_IMPORT_CALLS' => 'Импортирај Повици',
    'LNK_IMPORT_MEETINGS' => 'Импортирај Состаноци',
    'LNK_IMPORT_TASKS' => 'Импортирај Задачи',
    'LBL_MONTH' => 'Месец',
    'LBL_AGENDADAY' => 'Ден',
    'LBL_YEAR' => 'Year',

    'LBL_AGENDAWEEK' => 'Седмица',
    'LBL_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_PREVIOUS_DAY' => 'Previous Day',
    'LBL_PREVIOUS_YEAR' => 'Previous Year',
    'LBL_PREVIOUS_WEEK' => 'Previous Week',
    'LBL_NEXT_MONTH' => 'Следен месец',
    'LBL_NEXT_DAY' => 'Next Day',
    'LBL_NEXT_YEAR' => 'Следната година',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Scheduled',
    'LBL_BUSY' => 'Busy',
    'LBL_CONFLICT' => 'Conflict',
    'LBL_USER_CALENDARS' => 'User Calendars',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Претходно',
    'LBL_NEXT_SHARED' => 'Понатаму',
    'LBL_SHARED_CAL_TITLE' => 'Shared Calendar',
    'LBL_USERS' => 'Корисници',
    'LBL_REFRESH' => 'Refresh',
    'LBL_EDIT_USERLIST' => 'Листа на корисници',
    'LBL_SELECT_USERS' => 'Select users for calendar display',
    'LBL_FILTER_BY_TEAM' => 'Filter user list by team:',
    'LBL_ASSIGNED_TO_NAME' => 'Доделено на',
    'LBL_DATE' => 'Start Date & Time',
    'LBL_CREATE_MEETING' => 'Закажи состанок',
    'LBL_CREATE_CALL' => 'Евидентирај повик',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'Не',
    'LBL_SETTINGS' => 'Прилагодувања',
    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_LOADING' => 'Φόρτωση...',
    'LBL_SAVING' => 'Зачувување...',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites...',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Error while loading',
    'LBL_GOTO_DATE' => 'Go to Date',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_STYLE_BASIC' => 'Основни', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Напредно', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Наслов',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Статус',
    'LBL_PRIORITY' => 'Приоритет',

    'LBL_SETTINGS_TITLE' => 'Прилагодувања',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Зачувај',
    'LBL_DELETE_BUTTON' => 'Избриши',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Откажи',
    'LBL_CLOSE_BUTTON' => 'Затвори',

    'LBL_GENERAL_TAB' => 'Детали',
    'LBL_PARTICIPANTS_TAB' => 'Поканети',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Крај',
    'LBL_REPEAT_END_AFTER' => 'После',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Модул',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Border',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Нед",
            '1' => "Пон",
            '2' => "Вто",
            '3' => "Сре",
            '4' => "Чет",
            '5' => "Пет",
            '6' => "Саб",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Недела",
            '1' => "Понеделник",
            '2' => "Вторник",
            '3' => "Среда",
            '4' => "Четврток",
            '5' => "Петок",
            '6' => "Сабота",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Јан",
            '2' => "Фев",
            '3' => "Мар",
            '4' => "Апр",
            '5' => "Мај",
            '6' => "Јун",
            '7' => "Јул",
            '8' => "Авг",
            '9' => "Сеп",
            '10' => "Окт",
            '11' => "Ное",
            '12' => "Дек",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Јануари",
            '2' => "Февруари",
            '3' => "Март",
            '4' => "Април",
            '5' => "Мај",
            '6' => "Јуни",
            '7' => "Јули",
            '8' => "Август",
            '9' => "Септември",
            '10' => "Октомври",
            '11' => "Ноември",
            '12' => "Декември",
        ),
);
