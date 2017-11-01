<?php
$str = "hello   world hello ";
$new_str = preg_replace("/\s/","_",$str);
var_dump($new_str);