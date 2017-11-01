<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="post" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

file:<input name="upload_file" type="file" /><br>
<input type="submit" value="上传"/>
</form>
<?php
if ($_FILES) {

	echo "http UPLOSD：<br>";
	echo '<br>$_FILES:<br>';
	var_dump($_FILES);
	echo '<br>readfile($file):' . readfile($_FILES['upload_file']['tmp_name']);
	echo '<br>file($file):<br>';
	var_dump(file($_FILES['upload_file']['tmp_name']));
}
$file_url = "https://pts.wistron.com/~pts/theme/icons/16/flag_gray.png";
echo "../abc.png";
echo "<br>telnet files's basename:':" . basename($file_url);
echo "<br>dirname:";
var_dump(dirname(__FILE__) . '/jjj.php');
echo "<br> pathinfo(file):";
var_dump(pathinfo(__File__));
echo '<br>copy($file1,$file2):';
if (copy($file_url, "HTML/" . basename($file_url)))
	echo "<br>success";
else
	echo "<br>fail";

//读取目录下的所有文件
$dir = "E:\\pChart";
var_dump(pathinfo($dir));
if (!is_dir($dir)){
	echo "<br>is not dir<br>";
	return;
	}
$handle = opendir($dir);
if ($handle) {
	echo basename($dir) . "<br>";
	while (false !== ($file = readdir($handle))) {

		if ($file != '.' && $file != '..') {
			if (is_dir("$dir/$file"))
				echo "<br>$file---dir<br>";
			else
				echo "<br>$file---file<br>";
		}
	}
}
echo "<br> function list:<br>";
rrmdir($dir);
function read_dir($dir_path) {
	if (!is_dir($dir_path)) {
		echo "<br>$dir_path is not dir<br>";
		return;
	}
	$handle = opendir($dir_path);
	if ($handle) {
		$dir_is_empty = true;
		while (false !== ($file = readdir($handle))) {
			if ($file != '.' && $file != '..') {
				$dir_is_empty = false;
				if (is_dir($dir_path . "/" . $file)) {
					$new_path = "$dir_path/$file";
					read_dir($new_path);
				} else {
					echo "<br>$file<br>";
					unlink($dir_path . "/" . $file);
				}
			}

		}
		if($dir_is_empty)
			if(!rmdir($dir_path))
			echo "<br>delete fail<br>"
			;
	}


}
function rrmdir($src) {
     $dir = opendir($src);
     while(false !== ( $file = readdir($dir)) ) {
         if (( $file != '.' ) && ( $file != '..' )) {
             $full = $src . '/' . $file;
             if ( is_dir($full) ) {
                 rrmdir($full);
             }
             else {
                 unlink($full);
             }
         }
     }
     closedir($dir);
     rmdir($src);
 }

 function monthly_delete_tcs_temp_powercam_file($src){
    	if(date('Y-m-d')!=date('Y-m-d',strtotime('first monday of this month')))
    	{
    		return;
    	}
    	if (!is_dir($src))
    	{
			echo "<br>src is not dir<br>";
			return;
		}
    	$dir = opendir($src);
     	while(false !== ( $file = readdir($dir)) )
     	{
         if (( $file != '.' ) && ( $file != '..' ))
         {
             $full = $src . '/' . $file;
             if ( is_dir($full) )
             {
                 rrmdir($full);
             }
             else {
                 unlink($full);
             }
         }
     }
     closedir($dir);
     rmdir($src);
    }