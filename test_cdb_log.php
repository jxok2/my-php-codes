<?php
header("Content Type:text/html;charset=utf-8");
echo "now:".date("Y-m-d H:m:s")."<br>";
$log = "<div class='log_item'>" .
			"<div class='log_title'>" .
				"<span class='log_who'>Agers Liang</span><span class='log_when'>2016-04-25 10:49:28</span>" .
			"</div>" .
			"<div class='log_content'>##NG_MODIFY_BELOW_ITEMS##:<br>##NG_GEOGRAPHICS_LOCATION##(  => add location ), ##NG_TELEPHONE##(  => add telephone ), ##NG_HOBBIES##(  => add favar )</div>" .
		"</div>" .
		"<div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-13 10:05:13</span></div><div class='log_content'>##NG_UNDELETE_THIS_DATA##</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:56:05</span></div><div class='log_content'>##NG_DELETE_THIS_DATA##</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:55:02</span></div><div class='log_content'>##NG_MODIFY_BELOW_ITEMS##:<br>##NG_JOB_STATE## ( ##NG_ON_JOB##  => ##NG_QUIT## )</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:54:42</span></div><div class='log_content'>##NG_CREATE_THIS_ACCOUNT##</div></div>";
echo $log;
$reg = "/(<div class='log_item'>)|(<div class='log_title'>)|(<div class='log_content'>)|(<\/div>)/";
echo "<br> reg:".preg_match($reg,$log);
$log_arr_with_empty = preg_split($reg,$log);
var_dump($log_arr_with_empty);
echo "<br><br><br> without empty but keys are not in order:";
$log_arr_without_empty = array_filter($log_arr_with_empty,"callback");
var_dump($log_arr_without_empty);
$new_log_arr = array_values($log_arr_without_empty);
echo "<br><br><br> without empty and keys are in order:";
var_dump($new_log_arr);
$reg = "/(<span class='log_who'>)|(<span class='log_when'>)|(<\/span>)/";
$demo =preg_split($reg,$new_log_arr[0]);
var_dump($demo);
$new_log = array();
echo "<br><br><br>new log:";
$i = 0;
//foreach($new_log_arr as $key->$item)
//{
//	if($key%2==0)
//	{
//
//	}
//}
var_dump($new_log);
echo "<br><br>function:";
var_dump(getLog("12345"));
$empty = "abc";
$empty1 = "  ";
if("2016-04-25 13:24:56">"2016-05-01 23:54:59")
	echo "<br>empty string is true";
else
echo "<br>empty string is false";
function callback($value){
	if($value)
		return true;
	return false;
}
function getLog($member_id="",$start_date="",$end_date=""){

		if($start_date)
			$start_date =trim($start_date)." 00:00:00";
		else
			$start_date = "1970-01-01 00:00:00";
		if($end_date)
			$end_date = trim($end_date)." 23:59:59";
		else
			$end_date = date("Y-m-d H:m:s");
        $return = array();
        $return['opperator_count']['add'] = 0;
        $return['opperator_count']['delete'] = 0;
        $return['opperator_count']['modify'] = 0;
        $return['opperator_count']['undelete'] = 0;

        if($member_id&&($end_date>$start_date)){
//            $data = $this->get_data($member_id);
//            $original_log = $data['log'];
            $original_log = "<div class='log_item'>" .
			"<div class='log_title'>" .
				"<span class='log_who'>Agers Liang</span><span class='log_when'>2016-04-25 10:49:28</span>" .
			"</div>" .
			"<div class='log_content'>##NG_MODIFY_BELOW_ITEMS##:<br>##NG_GEOGRAPHICS_LOCATION##(  => add location ), ##NG_TELEPHONE##(  => add telephone ), ##NG_HOBBIES##(  => add favar )</div>" .
		"</div>" .
		"<div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-13 10:05:13</span></div><div class='log_content'>##NG_UNDELETE_THIS_DATA##</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:56:05</span></div><div class='log_content'>##NG_DELETE_THIS_DATA##</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:55:02</span></div><div class='log_content'>##NG_MODIFY_BELOW_ITEMS##:<br>##NG_JOB_STATE## ( ##NG_ON_JOB##  => ##NG_QUIT## )</div></div><div class='log_item'><div class='log_title'><span class='log_who'>Wistron1</span> <span class='log_when'>2016-04-06 13:54:42</span></div><div class='log_content'>##NG_CREATE_THIS_ACCOUNT##</div></div>";

            $reg = "/(<div class='log_item'>)|(<div class='log_title'>)|(<div class='log_content'>)|(<\/div>)/";
            $log_arr_with_empty = preg_split($reg,$original_log);
            $log_arr_without_empty = array_filter($log_arr_with_empty,"filter_empty");
            $new_log_arr = array_values($log_arr_without_empty);
            $reg_log_title = "/(<span class='log_who'>)|(<span class='log_when'>)|(<\/span>)/";
            $reg_log_content = "/:/";
            $i = 0;
            foreach ($new_log_arr as $key => $value) {
                if($key%2==0)
                {
                    $log_title = array_values(array_filter(preg_split($reg_log_title, $value),"filter_empty"));
                    var_dump($log_title[1],$start_date,$end_date);
                    if($log_title[1]>=$start_date&&$log_title[1]<=$end_date)
                    	$flag = true;
                    else
                    	$flag = false;
                    if($flag)
                    {
                    	$return[$i]['who'] = $log_title[0];
                    	$return[$i]['when'] = $log_title[1];
                    }

                }  else {
                	if($flag){
                		if(strpos($value,"NG_IMPORT_THIS_ACCOUNT")||strpos($value,"NG_CREATE_THIS_ACCOUNT"))
						{
							$return[$i]['opperator'] = "add";
							$return['opperator_count']['add'] += 1;
						}

						if(strpos($value,"NG_MODIFY_BELOW_ITEMS"))
						{
							$return[$i]['opperator'] = "modify";
							$return['opperator_count']['modify'] += 1;
						}
						if(strpos($value,"NG_DELETE_THIS_DATA"))
						{
							$return[$i]['opperator'] = "delete";
							$return['opperator_count']['delete'] += 1;
						}
						if(strpos($value,"NG_UNDELETE_THIS_DATA"))
						{
							$return[$i]['opperator'] = "undelete";
							$return['opperator_count']['undelete'] += 1;
						}
						$return[$i]['log']	= $value;

						$i++;
					}
                }
            }
        }
        return $return;
    }
    function filter_empty($value)
    {
        if(!empty($value)&&!preg_match("/^\s$/",$value))
            return TRUE;
        return FALSE;
    }