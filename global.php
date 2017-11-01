<?php
$a = "123";
$b = "456";

test();
$cc = new cc();
function test(){
	$c = "789";
	echo "<br>a:$a";
	echo "<br> globals['a']:".$GLOBALS['a'];
	global $d;$d="dsfjlkdsf";
	$GLOBALS['a'] = "changed";

}
echo "<br> a:$a  d:$d";
class cc {
	function cc ($cid){}

}