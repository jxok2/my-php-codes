<?php
/**
 * @param
 * */
echo '1970-01-01'.strtotime('1970-01-01').'<br>';
echo (strtotime('now')-strtotime('2015-03-10'))/60/60/24;
echo'<br>';
if(date('Y-m-d',strtotime('now'))==date('Y-m-d',strtotime('2015-03-10')+3*24*60*60))
echo 'yes';
echo "next Friday".date('Y-m-d',strtotime('next Friday'));
echo "<br>date:".(date("Y-m-d")<"2017-12-12");
echo "<br>date format:".date("M Y");
echo "<br>last date:".date('Y-m-d',strtotime('last day'));
echo "<br>first monday of this month:".date('Y-m-d',strtotime('first monday of this month'));
echo "<br>first weekday of this month:".date('Y-m-d',strtotime('first weekday of this month'));
echo "<br>-1 month:".date('Y-m-d',strtotime('-1 month'));

$arr[0]=0;
$arr[1]=1;
$arr[2]=2;
$arr1=array(0,1,2);
if($arr1==$arr)echo "true1";
$arr2 = array(0,1,2,3,4,5);
$arr3 = array(5,4,3,2,1,0);
var_dump(array_diff($arr2,$arr3));
echo count(array());