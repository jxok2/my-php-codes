<?php
header("Content-Type:text/html;charset=utf-8");
$str=" 我去你大爷";
echo "使用urlencode：".urlencode($str);
echo " uldecode:".urldecode(urlencode($str))."<br>";
echo urldecode("hello world");echo "<br>";
echo urlencode("2009-10-10");echo "<br>";
echo urldecode("Technical_Leader");echo "<br>";
$str = Array("on e"=>"你大爷","two"=>"我是你大爷","three"=>"你没大爷");
var_dump($str);
echo __FILE__;
