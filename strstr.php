<?php
header("content-type: text/html;charset=UTF-8");
echo 'nin mei <br>';
if (!stristr("我爱大米饭", "爱大"))
	echo 'false' . '<br>';
else
	echo stristr("我爱大米饭", "爱大") . '<br>';
echo strpos('ilo', 'il') . '<br>';
$arr = array (
	'one' => 'wo',
	'two' => 'shi',
	'three' => 'jilao'
);
foreach ($arr as $key => $val) {
	echo $key . '=>' . $val . '<br>';
}
array_splice($arr, 1, 1);
print_r($arr);

echo '<br>';
$array = array ();
for ($i = 0; $i < 18; $i++) {
	$array[] = $i;
}

$new = array ();
foreach ($array as $val) {
	if ($val % 2 == 0)
		unset ($val);
}
foreach ($array as $val) {
	if (!empty ($val))
		$new[] = $val;
}
print_r($new);
$implode_array = array (
	"a",
	"b",
	"c",
	"d"
);
echo "<br>implode:" . implode("-", $implode_array);
echo "<br>mb_substr():";
$str = "我等的人,她在多远的未来! it is a long story";
var_dump($str,mb_strlen($str,"utf-8"),strlen($str));
$num_str = "12345678";$num = 12345678;
var_dump($num_str,$num);
if($num_str==$num)
 echo "<br>字符串与数字相等";
 elseif($num>$num_str)
 	echo"<br>数字大";
 	else
 	echo"<br>字符串大";
// strpos 方法，顺便检验斜杠是否需要转义
$str = 'agers_liang/14083061';
if(strpos($str,'/'))
 var_dump(str_split($str,3));
else
 echo "<br> false";
 $str = "1,2,3,4,5";
 $arr = explode(',',$str);
 var_dump($arr);
 if(in_array('11',$arr))
 	echo "in";
 else
 	echo "not in";