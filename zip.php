<?php
$path = "C:\Users\Z14083061\Desktop\Ajax_Introduction.fsp.zip";
$zip = new ZipArchive();
$zip->open($path);
var_dump($zip);echo $zip->getFromName("index.html")."ppppppp";
for($i = 0; $i < $zip->numFiles; $i++)
      {
           echo 'Filename: ' . $zip->getNameIndex($i) . '<br />';
      }
