<?php
header("Content-Type:text/html;charset=utf-8");
$dir = "C:\Users\Z14083061\Desktop\Ajax Introduction.fsp";
if(is_dir($dir)){
	$handle = opendir($dir);
	$file = readdir($handle);
	var_dump($file);
	while(($name = readdir($handle))!==false){
		echo "$name type:".filetype($dir."\\".$name)."--".pathinfo($dir."\\".$name, PATHINFO_EXTENSION)."<br>";
	}
	var_dump(glob("C:\Users\Z14083061\Desktop\Ajax Introduction.fsp\*.html"));
}else
echo "$dir is not a derectery";
