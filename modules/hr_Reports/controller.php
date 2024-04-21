<?php
require_once('lib/spout-3.3.0/src/Spout/Autoloader/autoload.php');
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Writer\Common\Creator\Style\BorderBuilder;
use Box\Spout\Common\Entity\Style\Border;
class hr_ReportsController extends SugarController {

    function action_editview() {
        global $current_user;
        $this->view = 'edit';
    }

    function action_detailview() {
        $this->view = 'edit';
    }

    function action_listview() {
        $this->view = 'edit';
    }

    function action_getEmployeeTargetPerformance(){

        echo json_encode(array('status' => 'success', 'result' => $this->bean->getEmployeeTargetPerformance($_REQUEST)));
        exit;
    }

    function action_exportToExcel() {
        global $mod_strings,$app_list_strings;
        $fromDate = (isset($_REQUEST['fromDate']) ? $_REQUEST['fromDate'] : '');
        $toDate = (isset($_REQUEST['toDate']) ? $_REQUEST['toDate'] : '');
        $region = (isset($_REQUEST['region']) ? $_REQUEST['region'] : '');
        $store = (isset($_REQUEST['store']) ? $_REQUEST['store'] : '');
        $user_id = (isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '');

        $region_name = (isset($_REQUEST['region_name']) ? $_REQUEST['region_name'] : '');
        $store_name = (isset($_REQUEST['store_name']) ? $_REQUEST['store_name'] : '');
        $user_name = (isset($_REQUEST['user_name']) ? $_REQUEST['user_name'] : '');




        $employee_transactions = $this->bean->employees($_REQUEST,0, 0, TRUE);

        $filename = "employees_report_".date('d-m-Y').'.xlsx';
        $writer = WriterEntityFactory::createXLSXWriter();
        $writer->openToFile('exports/' . $filename);
        $border = (new BorderBuilder())
            ->setBorderBottom(Color::BLACK, Border::WIDTH_MEDIUM, Border::STYLE_SOLID)
            ->setBorderLeft(Color::BLACK, Border::WIDTH_MEDIUM, Border::STYLE_SOLID)
            ->setBorderRight(Color::BLACK, Border::WIDTH_MEDIUM, Border::STYLE_SOLID)
            ->setBorderTop(Color::BLACK, Border::WIDTH_MEDIUM, Border::STYLE_SOLID)
            ->build();

        $zebraWhiteStyle = (new StyleBuilder())
            ->setBackgroundColor(Color::GRAY)
            ->setFontColor(Color::WHITE)
            ->setBorder($border)
            ->setFontBold()
            ->build();

        // Create cell style for header and data rows
        $rowStyle = (new StyleBuilder())
            ->setBorder($border)
            ->build();


        $emptyRow = WriterEntityFactory::createRow([
            WriterEntityFactory::createCell(''),
        ]);
        $writer->addRow($emptyRow);
        $writer->addRow($emptyRow);
//        // Add the smaller table header and rows
        $smallerTableHeaderRow = WriterEntityFactory::createRow([
            WriterEntityFactory::createCell('Детален преглед на Перформанси на вработени', $zebraWhiteStyle),
            WriterEntityFactory::createCell('', $zebraWhiteStyle),
        ]);
        $writer->addRow($smallerTableHeaderRow);
        $cell1 = WriterEntityFactory::createCell('Од');
        $cell2 = WriterEntityFactory::createCell($fromDate);

        $row = WriterEntityFactory::createRow([$cell1, $cell2]);
        $row->setStyle($rowStyle);
        $writer->addRow($row);

        $cell3 = WriterEntityFactory::createCell('До');
        $cell4 = WriterEntityFactory::createCell($toDate);

        $row = WriterEntityFactory::createRow([$cell3, $cell4]);
        $row->setStyle($rowStyle);
        $writer->addRow($row);

        if($region){
            $cell5 = WriterEntityFactory::createCell('Регион');
            $cell6 = WriterEntityFactory::createCell($region_name);

            $row = WriterEntityFactory::createRow([$cell5, $cell6]);
            $row->setStyle($rowStyle);
            $writer->addRow($row);
        }

        if($store){
            $cell7 = WriterEntityFactory::createCell('Продавница');
            $cell8 = WriterEntityFactory::createCell($store_name);

            $row = WriterEntityFactory::createRow([$cell7, $cell8]);
            $row->setStyle($rowStyle);
            $writer->addRow($row);
        }

        if($user_id){
            $cell7 = WriterEntityFactory::createCell('Вработен');
            $cell8 = WriterEntityFactory::createCell($user_name);

            $row = WriterEntityFactory::createRow([$cell7, $cell8]);
            $row->setStyle($rowStyle);
            $writer->addRow($row);
        }

        $emptyRow = WriterEntityFactory::createRow([
            WriterEntityFactory::createCell(''),
        ]);
        $writer->addRow($emptyRow);
        $writer->addRow($emptyRow);
        $writer->addRow($emptyRow);
        $writer->addRow($emptyRow);

        // Write the header row with the specified style
        $headerCells = [
            WriterEntityFactory::createCell('Target Date', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Full Name', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Region', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Store', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Role', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Goal', $zebraWhiteStyle),
            WriterEntityFactory::createCell('Status', $zebraWhiteStyle),
        ];

        $headerRow = WriterEntityFactory::createRow($headerCells);
        $writer->addRow($headerRow);
        foreach($employee_transactions as $et){
            $row = WriterEntityFactory::createRowFromArray([
                date('d-m-Y', strtotime($et['target_date'])),
                $et['fullname'],
                $et['region_name'],
                $et['store_name'],
                $et['role_name'],
                $et['goal'],
                $app_list_strings['performance_status_dom'][$et['status']],
                ]);
            $row->setStyle($rowStyle);
            $writer->addRow($row);
        }
        $writer->close();
        echo $filename;
        exit();
    }

    function action_getAllStoresByRegion()
    {
        $stores_by_region = $this->bean->getAllStoresByRegion();

        echo json_encode($stores_by_region);
        exit();
    }

    function action_getEmployeesByRegion() {
        $empl_by_reg = $this->bean->getEmployeesByRegion();

        echo json_encode($empl_by_reg);
        exit();
    }

    function action_getEmployeesByStore() {
        $empl_by_store = $this->bean->getEmployeesByStore();

        echo json_encode($empl_by_store);
        exit();
    }


}

?>
