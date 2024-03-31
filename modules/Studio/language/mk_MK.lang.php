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
    'LBL_EDIT_LAYOUT' => 'Промени Изглед',
    'LBL_EDIT_FIELDS' => 'Промени Полиња по желба',
    'LBL_SELECT_FILE' => 'Одберете документ',
    'LBL_MODULE_TITLE' => 'Студио',
    'LBL_TOOLBOX' => 'Алатки',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM полиња (со кликање на елементите, ги поставувате во делот за поставување)',
    'LBL_VIEW_SUITE_FIELDS' => 'Погледни SuiteCRM Полиња',
    'LBL_FAILED_TO_SAVE' => 'Грешка во зачувување',
    'LBL_CONFIRM_UNSAVE' => 'Промените нема да бидат зачувани. Дали сте сигурни дека сакате да продолжите?',
    'LBL_PUBLISHING' => 'Објава...',
    'LBL_PUBLISHED' => 'Објавено',
    'LBL_FAILED_PUBLISHED' => 'Грешка во објава',
    'LBL_DROP_HERE' => '[ Пушти овде]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Име',
    'LBL_LABEL' => 'Етикета',
    'LBL_MASS_UPDATE' => 'Масовно Ажурирање',
    'LBL_DEFAULT_VALUE' => 'Основна вредност',
    'LBL_REQUIRED' => 'Потребно',
    'LBL_DATA_TYPE' => 'Тип',


    'LBL_HISTORY' => 'Историја',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Welcome to Studio!</h2><br> What would you like to do today?<br><b> Please select from the options below.</b>',
    'LBL_SW_EDIT_MODULE' => 'Уреди модул',
    'LBL_SW_EDIT_DROPDOWNS' => 'Уреди опаѓачки листи',
    'LBL_SW_EDIT_TABS' => 'Конфигурирај табови',
    'LBL_SW_RENAME_TABS' => 'Преименувај Табови',
    'LBL_SW_EDIT_GROUPTABS' => 'Конфигурирај групни табови',
    'LBL_SW_EDIT_PORTAL' => 'Уреди го Порталот',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Поправи произволни полиња',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Мигрирај произволни полиња',

//Manager Backups History
    'LBL_MB_DELETE' => 'Избриши',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Направи опаѓачко мени',
    'LBL_DROPDOWN_NAME' => 'Име на опаѓачко мени:',
    'LBL_DROPDOWN_LANGUAGE' => 'Јазик на опаѓачко мени:',
    'LBL_TABGROUP_LANGUAGE' => 'Јазик:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Прикажи вредност',
    'LBL_DD_DATABASEVALUE' => 'Вредност на база',
    'LBL_DD_ALL' => 'Сите',

//BUTTONS
    'LBL_BTN_SAVE' => 'Зачувај',
    'LBL_BTN_CANCEL' => 'Откажи',
    'LBL_BTN_SAVEPUBLISH' => 'Сочувај и Примени',
    'LBL_BTN_HISTORY' => 'Историја',
    'LBL_BTN_ADDROWS' => 'Додади редови',
    'LBL_BTN_UNDO' => 'Чекор назад',
    'LBL_BTN_REDO' => 'Чекор напред',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Додај полиња по желба',
    'LBL_BTN_TABINDEX' => 'Подреди редослед на табови',

//TABS
    'LBL_MODULES' => 'Модули',
    'LBL_MODULE_NAME' => 'Администрација',
    'LBL_CONFIGURE_GROUP_TABS' => 'Конфигурирај филтри од менито на Модули',
    'LBL_GROUP_TAB_WELCOME' => 'The filters below will be displayed in the More list in the module menu for users to use to view groups of modules within the menu. Drag and drop modules to and from the filters. Note: Empty filters will not be displayed in the menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Click on any tab\'s Display Value in the table below to rename the tab.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Select an available language, edit the Group labels and click Save & Deploy to apply the labels in the selected language.',
    'LBL_ADD_GROUP' => 'Додај филтер',
    'LBL_NEW_GROUP' => 'Нова Група',
    'LBL_RENAME_TABS' => 'Преименувај Модул',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Грешка: Погрешна вредност на клучот: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Зачувај' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Чекор назад' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Чекор напред' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Во линија' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Избриши' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publish' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Додади редови' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Промени' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
