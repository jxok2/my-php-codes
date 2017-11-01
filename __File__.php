<?php
echo "<br>".__FILE__;
echo "<br>".basename(__FILE__);
echo "<br>".basename(__FILE__,"exe");
echo "<br>".basename(__FILE__,"php");
echo "<br>".basename(__FILE__,".php");
//echo "<br>".ini_get("include_path");
require_once "url_encode.php";