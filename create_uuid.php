<?php
echo uniqid("PHP_");//基于以微秒计的当前时间,字符串是前缀
echo "<br>".uniqid("jkl_",true);
echo "<br>".mt_rand(1,3);//{1,2,3}比rand（）更快
echo "<br>".date("YmdHis")."-".rand();
echo "<br>".time().":".rand();
echo "<br>".com_create_guid();
echo "<br>".md5("081625");
echo "<br>".abs("nihaoa");
echo "<br>".("isuuer"==0);