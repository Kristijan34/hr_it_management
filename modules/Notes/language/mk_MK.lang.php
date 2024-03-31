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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_ACCOUNT_ID' => 'Сметка ID:',
    'LBL_CASE_ID' => 'Case ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'Contact ID:',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Забелешки',
    'LBL_DESCRIPTION' => 'Забелешка',
    'LBL_EMAIL_ADDRESS' => 'E-Мејл адреса:',
    'LBL_EMAIL_ATTACHMENT' => 'Е-Мејл прилог',
    'LBL_FILE_MIME_TYPE' => 'MIME тип',
    'LBL_FILE_URL' => 'URL на фајлот',
    'LBL_FILENAME' => 'Attachment:',
    'LBL_LEAD_ID' => 'Lead ID:',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_DATE_MODIFIED' => 'Последно изменет',
    'LBL_LIST_FILENAME' => 'Прилог',
    'LBL_LIST_FORM_TITLE' => 'Note List',
    'LBL_LIST_RELATED_TO' => 'Related To',
    'LBL_LIST_SUBJECT' => 'Наслов',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_MODULE_NAME' => 'Забелешки',
    'LBL_MODULE_TITLE' => 'Notes: Home',
    'LBL_NEW_FORM_TITLE' => 'Креирај Забелешка или Додај Прилог',
    'LBL_NOTE_STATUS' => 'Забелешка',
    'LBL_NOTE_SUBJECT' => 'Предмет:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Прилози',
    'LBL_NOTE' => 'Note:',
    'LBL_OPPORTUNITY_ID' => 'Opportunity ID:',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_FLAG' => 'Display in Portal?',
    'LBL_EMBED_FLAG' => 'Embed in email?',
    'LBL_PRODUCT_ID' => 'Product ID:',
    'LBL_QUOTE_ID' => 'Quote ID:',
    'LBL_RELATED_TO' => 'Related To:',
    'LBL_SEARCH_FORM_TITLE' => 'Note Search',
    'LBL_STATUS' => 'Статус',
    'LBL_SUBJECT' => 'Предмет:',
    'LNK_IMPORT_NOTES' => 'Импортирај Забелешки',
    'LNK_NEW_NOTE' => 'Креирај Забелешка или Додај Прилог',
    'LNK_NOTE_LIST' => 'Погледни Забелешки',
    'LBL_MEMBER_OF' => 'Член на:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Доделен корисник',
    'LBL_REMOVING_ATTACHMENT' => 'Removing attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Failed to remove attachment...',
    'LBL_CREATED_BY' => 'Креирано од',
    'LBL_MODIFIED_BY' => 'Променето од',
    'LBL_SEND_ANYWAYS' => 'Овој Е-Мејл нема Наслов. Прати/Зачувај?',
    'LBL_NOTE_INFORMATION' => 'Преглед', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
    'LBL_EDITLAYOUT' => 'Промени Изглед' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Име',
    'LBL_LAST_NAME' => 'Презиме',
    'LBL_DATE_ENTERED' => 'Дата на креирање',
    'LBL_DATE_MODIFIED' => 'Дата на промена',
    'LBL_DELETED' => 'Избришан',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Растечки',
    'LBL_DESCENDING' => 'Опаѓачки',
);
