<?php
header("Content-type: text/html; charset=utf-8");
require_once(dirname(dirname(__FILE__)).'/PHPExcel/Classes/PHPExcel/IOFactory.php');
	$excelFilePath = "E:\\a\\a.xlsx";
	$fileType = PHPExcel_IOFactory::identify($excelFilePath);
	$objReader = PHPExcel_IOFactory::createReader($fileType);
	$objPHPExcel = $objReader->load($excelFilePath);
	$currentSheet = $objPHPExcel->getSheet(0); //第一个工作簿
	$allRow = $currentSheet->getHighestRow(); //行数
	$allColumn = $currentSheet->getHighestColumn();
	$one_of_bug_data = array();
	$all_bug_data = array();
	$i = 1;

	for($rowIndex=2;$rowIndex<=$allRow;$rowIndex++){
		for($colIndex='A';$colIndex<=$allColumn;$colIndex++){
			$addr = $colIndex.$rowIndex;
			$cell = $currentSheet->getCell($addr)->getCalculatedValue();
			$one_of_bug_data[] = $cell;
			if(!empty($cell))
				$flag =true;

			if($i%(ord($allColumn)-ord('A')+1)==0){
				if($flag)
				$all_bug_data[] = $one_of_bug_data;
				$flag = false;
				$one_of_bug_data = array();
			}
			$i++;
		}
	}
	print_r($all_bug_data);
	echo "A2:".$all_bug_data[0][0]."<br>";
	echo "A3 的值类型:".gettype($all_bug_data[1][0])."<br>";
	echo "A3 使用empty判断:".empty($all_bug_data[1][0])."<br>";
	echo "导入的数据有".count($all_bug_data)."个bug";
	return $all_bug_data;

?>
