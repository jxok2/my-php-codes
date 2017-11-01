<?php
header("Content-Type:text/html;charset=utf-8");
$arr1 = array("one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5,"six"=>6);
$arr2 = array("one"=>1,"two"=>2,"three"=>3,"eight"=>8,"nine"=>9,"ten"=>10,"seven"=>7,"eleven"=>11);
$arr3 = array("eight"=>8,"nine"=>9,"ten"=>10,"thirteen"=>13,"fourteen"=>14);
$a1 = array(0,1,2,3,4,9);
$a2 = array(1,3,4,5,6,7);
$array_mulmit = array($arr1,$arr2,$arr3,$a1,$a2);
var_dump($arr1,$arr2,$arr3);
echo "<br>diff(arr1,arr2):";var_dump(array_diff($arr1,$arr2));
echo "<br>diff(arr2,arr1):";var_dump(array_diff($arr2,$arr1));
echo "<br>diff(arr1,arr2,arr3):";var_dump(array_diff($arr1,$arr2,$arr3));
echo "<br>diff(arr1,arr3,arr2):";var_dump(array_diff($arr1,$arr3,$arr2));
echo "<br>diff(arr2,arr1,arr3):";var_dump(array_diff($arr2,$arr1,$arr3));
echo "<br>diff(arr2,arr3,arr1):";var_dump(array_diff($arr2,$arr3,$arr1));
echo "<br>diff(arr3,arr1,arr2):";var_dump(array_diff($arr3,$arr1,$arr2));
echo "<br>diff(arr3,arr2,arr1):";var_dump(array_diff($arr3,$arr2,$arr1));
echo "<br> number array:";var_dump(array_diff($a1,$a2));
echo "<br>array_splice(input,offset,length):";var_dump(array_splice($array_mulmit,1,3,"替代值"),"分割线来啦---------------",$array_mulmit);
echo "星期".date("w");
$uu = "user's name";
//echo "<br> pg_escape_string(user'name):".pg_escape_string($uu);
//echo "<br> pg_escape_literal(user'name):".pg_escape_literal($uu);
var_dump(array_filter($a2,function ($value){
	if($value>3)
	return true;
	else
	return false;
}));
function filter($value){
	if($value>3)
	return true;
	else
	return false;
}