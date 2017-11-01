<?php
header("content-type:text/html;charset=utf-8");
echo 'date() Type:'.@gettype(date()).'<br>';
echo 'kmtime() Type:'.@gettype(mktime()).'<br>';
echo 'mktime(1988-7-24)'.mktime(0,0,0,7,24,1988).'<br>';
echo 'mktime(now):'.@mktime().'<br>';
echo '1988-07-24 到现在已经过了'.(int)((time()-mktime(0,0,0,7,24,1988))/60/60/24/365).'年'.
((time()-mktime(0,0,0,7,24,1988))/60/60/24%365).'天'.
((time()-mktime(0,0,0,7,24,1988))/60/60/24/365%24).'小时'.
((time()-mktime(0,0,0,7,24,1988))%60).'秒<br>';

echo 'strtotime:<br>';
echo date("Y-m-d H:i:s",strtotime("-2 day"));
?>
