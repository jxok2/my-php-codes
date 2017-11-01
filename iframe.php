<?php
//print_r($_FILES);
print_r(array_keys($_FILES['file']));
$str = implode(',',array_keys($_FILES['file']));
//$str = 'abcd';
echo '<br>'.$str;
echo '<script type="text/javascript">';

echo'function A(){alert(window.parent.document.getElementById("div").innerHTML)}';
echo'function B(){window.parent.document.getElementById("div").innerHTML="'.$str.'";}';
echo'function C(){alert("'.$str.'")}';
echo '</script>';
echo'<input value="iframe_input">';
echo'<input value="iframe_button" type="button" onclick="B();"/>';