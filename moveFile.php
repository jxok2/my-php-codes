<?php
header("Content-type: text/html; charset=utf-8");
if(unlink("E:\\a\\a.xlsx"))
	echo "文件成功移除";
else
	echo "移除失败";
$a = array();
if(empty($a))
	echo "a1 is empty";
$b = array();
if(empty($b))
	echo "b is empty";
$a[0] = $b;
if(empty($a))
	echo "a2 is empty";
?>
