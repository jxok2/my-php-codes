<?php
require_once dirname(__FILE__).'/readExcel_class.php';
$reader = new ExcelReader();

$all = $reader->getAllExcelData("E:\\a\\aaaa.xls");
print_R($all[1]);
foreach($all as $one){
	foreach($one as $data){
		if(!empty($data))
			echo sprintf('%-20s',$data).'  ';
		else
			echo "#####  ";
	}
	echo "<br>";
}
echo $all[1][4];
?>
