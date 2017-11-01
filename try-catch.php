<?php
$a = "i am out of try";
try{
	echo "try test";
	$b="i am inside of try";
	inverse(0);
}catch(Exception $e){
	echo "<br>catch:<br>";
   echo "<br>a:$a";
   echo "<br>b:$b";
}finally{
	echo "<br>finally--a:$a=>b:$b";
}
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}