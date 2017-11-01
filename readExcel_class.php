<?php
header("Content-type: text/html; charset=utf-8");
require_once dirname(__FILE__).'\\PHPExcel\\Classes\\PHPExcel\\IOFactory.php';
class ExcelReader{
	function ExcelReader(){}
	function getAllExcelData($excelFilePath){
$fileType = PHPExcel_IOFactory::identify($excelFilePath);
$objReader = PHPExcel_IOFactory::createReader($fileType);
$objPHPExcel = $objReader->load($excelFilePath);
$currentSheet = $objPHPExcel->getSheet(0); //第一个工作簿
$allRow = $currentSheet->getHighestRow(); //行数
$HighestColumn = $currentSheet->getHighestColumn();
echo '行数：'.$allRow.'<br>';
echo '最大列：'.$HighestColumn.'<br>';
$one_row_data = array();
$all_data = array();
for($rowIndex=0;$rowIndex<=$allRow;$rowIndex++){
    for($colIndex="A";$colIndex<=$HighestColumn;$colIndex++){
        $addr = $colIndex.$rowIndex;
	$cell = $currentSheet->getCell($addr)->getCalculatedValue();
        $one_row_data[] = $cell;
        if($colIndex == $HighestColumn){
            $all_data[] = $one_row_data;
            $one_row_data = array();
        }
    }
}
return $all_data;
}
}