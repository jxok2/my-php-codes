<?php
$array1 = array(1,2,3,4,5,6,7,8,9,0);
$arra2 = array("a"=>"abc","efg");
$array_merge = array_merge($arra2,$array1);
var_dump($array_merge);
$array_filter = array("a"=>1,"b"=>2,"c"=>3,"d"=>0);
var_dump(
array_filter($array_filter,
function($value){
if ($value!=0)
	return true;

}));

var_dump(array_filter($array_filter));
var_dump(
array_walk($array_filter,
function($value,$key){
echo "<br> value:$value key:$key<br>";
}));