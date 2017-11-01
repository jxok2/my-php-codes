<?php
$dir = "D:\\udts_file\\new_xml";
$file = scandir($dir);

foreach($file as $key=>$file_name)
{
	if ($file_name != "." && $file_name != "..") {
		$path = "D:\\udts_file\\new_xml\\".$file_name;
		echo "------------filename :$file_name ($path) ---------------<br>";
//		$data = file_get_contents($path);
//		echo "+++++++++++++++++data: $data +++++++++++++++++++++++<br>";
//		$xml = simplexml_load_file($path);
//		read_xml_data($xml);
	}
}
$test_file = "D:\\udts_file\\new_xml\\WZP2137Z07B_TN_F_20170919113155.txt.xml";
//$xml = simplexml_load_file($test_file);
//echo "sdsd:".$xml->tst->machine;
$fp = fopen($test_file, 'r');
$string_test = "";
if (!$fp) {
    echo 'Could not open file somefile.txt';
}
while (false !== ($char = fgetc($fp))) {
	echo "$char\n";
	$string_test += ((string)$char);
}
echo "<br>string:$string_test <br>";
function read_xml_data($element_obj)
{
	foreach ($element_obj->children() as $key =>$value)
	{
		$count = count($value->children());
		if ($count > 0) {
			$element_obj = $value;
			echo "$key:count->$count<br>";
			read_xml_data($element_obj);
		} else {
			echo "$key:$value<br>";
		}
	}

}