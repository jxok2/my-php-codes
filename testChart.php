<?php
header("Content-type: text/html; charset=utf-8");
$a = "A";
echo 'A+1:'.($a+1);
echo " A++:".(++$a);
$b = 'A'+2;
echo ' A+2:'.$b;
echo ' A+=2'.($a+=2);
echo "中文要乱码了！！！！";
$d = "中文的长度呢";
echo "<br>中文的长度呢?:".strlen($d);
$num = 12.43;$n = $num >> 1;
echo '<br>位移一位：'.$n
?>


