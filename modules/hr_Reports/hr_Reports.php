<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
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


class hr_Reports extends Basic
{
    public $new_schema = true;
    public $module_dir = 'hr_Reports';
    public $object_name = 'hr_Reports';
    public $table_name = 'hr_reports';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    function getEmployeeTargetPerformance($request){
        global $db,$mod_strings;

        $page = isset($request['page']) ? intval($request['page']) : 1;
        $perPage = isset($request['perPage']) ? intval($request['perPage']) : 30;

        $start = ($page - 1) * $perPage;

        $emp_count = $this->getSelectedEmployees($request);
        $row_count_empl = !empty($emp_count) ? $emp_count : 0;
        $totalCount = $row_count_empl;


        // Generate the HTML table structure
        $table = '<div style="overflow-x:auto; max-width: 100%;" id="employee_table">';
        $table .= '<div class="export-link"><input title="Export" accesskey="ex" class="button primary" onclick="exportToExcel()" type="button" name="Export" value="Export" id="export_button"></div>'; // Export link
        $table .= '<table cellpadding="0" cellspacing="0" border="0" class="list view table-responsive">';

        $table .= '<thead>';
        $table .= '<tr height="20">';
        $table .= '<th class="">Target date</th>';
        $table .= '<th class="hidden-xs" scope="col" data-breakpoints="xs sm" class=""><div>Full Name</div></th>';
        $table .= '<th class="hidden-xs hidden-sm" scope="col" data-breakpoints="xs sm" class=""><div>Region</div></th>';
        $table .= '<th class="hidden-xs hidden-sm" scope="col" data-breakpoints="xs sm" class=""><div>Store</div></th>';
        $table .= '<th class="hidden-xs hidden-sm" scope="col" data-breakpoints="xs sm" class=""><div>Role</div></th>';
        $table .= '<th class="hidden-xs hidden-sm" scope="col" data-breakpoints="xs sm" class=""><div>Goal</div></th>';
        $table .= '<th class="hidden-xs hidden-sm" scope="col" data-breakpoints="xs sm" class=""><div>Status</div></th>';
        $table .= '<th></th>';
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

        $emp_array = $this->employees($request,$start,$perPage);

        $countTransactions = count($emp_array);

        $rowCount = 0;
        foreach ($emp_array as $row) {
            $rowCount++;
            $table .= '<tr id='.$row['performance_record_id'].' style="white-space: nowrap; background-color: '.($rowCount % 2 == 1 ? '#f2f2f2' : '#ffffff').';" >';
            $table .= '<td>' . date('d-m-Y', strtotime($row['target_date'])) . '</td>';
            $table .= '<td><a href="index.php?module=hr_Performance_management&action=DetailView&record='.$row['performance_record_id'].'" target="_blank">' . $row['fullname'] . '</a></td>';
            $table .= '<td>' . $row['region_name'] . '</td>';
            $table .= '<td>' . $row['store_name'] . '</td>';
            $table .= '<td>' . $row['role_name'] . '</td>';
            $table .= '<td>' . $row['goal'] . '</td>';
            $table .= '<td>' . $row['status'] . '</td>';
            $table .= '<td></td>';
            $table .= '</tr>';
        }

        $table .= '</tbody>';
        $table .= '<tfoot>';
        $table .= '<tr id="pagination" class="pagination-unique pagination-bottom" role="presentation">';
        $table .= '<td colspan="22">';
        $table .= '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="paginationTable">';
        $table .= '<tbody>';
        $table .= '<tr>';
        $table .= '</td>';
        $table .= '</tr>';
        $table .= '</tbody>';
        $table .= '</table>';
        $table .= '</td>';
        $table .= '</tr>';
        $table .= '</tfoot>';
        $table .= '</table>';
        $table .= '</div>';

        $pagination = $this->generatePagination($page, $perPage, $totalCount,$request, $countTransactions);

        return array(
            'table' => $table,
            'rows' => $emp_array,
            'pagination' => $pagination,
        );
    }

    function getSelectedEmployees($request){
        global $db;

        $sql = "SELECT
    count(*) as cnt
FROM hr_position_management pm
         JOIN users u ON pm.user_id = u.id
         JOIN hr_regions r ON pm.region_id = r.id
         JOIN hr_stores s ON pm.store_id = s.id
         JOIN acl_roles ar ON pm.role_id = ar.id
         JOIN hr_performance_management hpm ON pm.user_id = hpm.user_id
WHERE
    hpm.target_date >= STR_TO_DATE('{$request['fromDate']}', '%d-%m-%Y')
  AND hpm.target_date <= STR_TO_DATE('{$request['toDate']}', '%d-%m-%Y')
  AND hpm.deleted = 0";

        if (!empty($request['region'])) {
            $sql .= " AND pm.region_id = '{$request['region']}'";
        }
        // Check if store field is filled
        if (!empty($request['store'])) {
            $sql .= " AND pm.store_id = '{$request['store']}'";
        }
        // Check if user field is also filled
        if (!empty($request['user_id'])) {
            $sql .= " AND pm.user_id = '{$request['user_id']}'";
        }

        $result = $db->query($sql);



        $row = $db->fetchByAssoc($result) ;


        return $row['cnt'];

    }

    function employees($request,$start, $perPage, $export = FALSE){
        global $db;
        $array = array();
        $sql = " SELECT
    hpm.id as performance_record_id,
    CONCAT(u.first_name, ' ', u.last_name) AS fullname,
    r.name as region_name,
    s.name as store_name,
    ar.name as role_name,
    hpm.status,
    hpm.goal,
    hpm.target_date
FROM hr_position_management pm
JOIN users u ON pm.user_id = u.id
JOIN hr_regions r ON pm.region_id = r.id
JOIN hr_stores s ON pm.store_id = s.id
JOIN acl_roles ar ON pm.role_id = ar.id
JOIN hr_performance_management hpm ON pm.user_id = hpm.user_id
WHERE
     hpm.target_date >= STR_TO_DATE('{$request['fromDate']}', '%d-%m-%Y')
  AND hpm.target_date <= STR_TO_DATE('{$request['toDate']}', '%d-%m-%Y')
  AND hpm.deleted = 0";
        if (!empty($request['region'])) {
            $sql .= " AND pm.region_id = '{$request['region']}'";
        }
        // Check if store field is filled
        if (!empty($request['store'])) {
            $sql .= " AND pm.store_id = '{$request['store']}'";
        }
        // Check if user field is also filled
        if (!empty($request['user_id'])) {
            $sql .= " AND pm.user_id = '{$request['user_id']}'";
        }

        $sql .= " ORDER BY hpm.target_date DESC ";


        if(!$export){
            $sql .= " LIMIT {$perPage} OFFSET {$start}";
        }


        $GLOBALS['log']->fatal('SQL ' . $sql);
        //$sql .= " LIMIT {$start}, {$perPage}";
        $result = $db->query($sql);



        while ($row = $db->fetchByAssoc($result)) {
            $tmp_arr['performance_record_id'] = $row['performance_record_id'];
            $tmp_arr['target_date'] = date('d-m-Y', strtotime($row['target_date']));
            $tmp_arr['fullname'] = $row['fullname'];
            $tmp_arr['region_name'] = $row['region_name'];
            $tmp_arr['store_name'] = $row['store_name'];
            $tmp_arr['role_name'] = $row['role_name'];
            $tmp_arr['goal'] = $row['goal'];
            $tmp_arr['status'] = $row['status'];

            $array[] = $tmp_arr;
        }


        return $array;

    }

    function generatePagination($currentPage, $perPage, $totalCount, $request, $countTransactions) {

        $totalPages = ceil($totalCount / $perPage);
        $fromDate = $request['fromDate'];
        $toDate = $request['toDate'];

        $pagination = '<link rel="stylesheet" type="text/css" href="modules/hr_Reports/css/style.css" />';
        $pagination .= '<div class="pagination-footer">';
        $pagination .= '<div class="pagination-buttons">';


        // First page link
        if ($currentPage > 1) {
            $pagination .= '<a href="javascript:void(0)" onclick="getReports(\''.$fromDate.'\',\''.$toDate.'\', 1, '.$perPage.')" class="pagination-link">First</a>';
        }
        // Previous page link
        if ($currentPage > 1) {
            $pagination .= '<a href="javascript:void(0)" onclick="getReports(\''.$fromDate.'\',\''.$toDate.'\', '.($currentPage - 1).', '.$perPage.')" class="pagination-link">&laquo;</a>';
        }

        $pagination .= '(Page '.$currentPage.' - '.$totalPages.' of '.$totalCount.')';

        // Next page link
        if ($currentPage < $totalPages) {
            $pagination .= '<a href="javascript:void(0)" onclick="getReports(\''.$fromDate.'\',\''.$toDate.'\', '.($currentPage + 1).', '.$perPage.')" class="pagination-link">&raquo;</a>';
        }
        // Go to Last Page link
        if ($currentPage < $totalPages) {
            $pagination .= '<a href="javascript:void(0)" onclick="getReports(\''.$fromDate.'\',\''.$toDate.'\', '.$totalPages.', '.$perPage.')" class="pagination-link">Last</a>';
        }

        $pagination .= '</div>';
        $pagination .= '</div>';

        return $pagination;
    }
	
}