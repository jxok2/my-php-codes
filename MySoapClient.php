<?php
require MySoapServer.php
///**
// * 从开放的天气预报服务中获得数据
// *
//**/
//
//$c = new SoapClient( 'http://www.webxml.com.cn/WebServices/WeatherWS.asmx?wsdl',
//                 array( 'trace' => true, 'exceptions' => true ) );
//
////查看接口中的方法
////var_dump( $c->__getFunctions() );
////查看接口方法的使用
////var_dump( $c->__getTypes() );
////不需要参数的情况
//$pr =$c->getRegionProvince();
////var_dump( $pr->getRegionProvinceResult->string );
//
////带有参数的情况
//$scs = $c->getSupportCityString( array( 'theRegionCode' => '福建' ) );
//var_dump( $scs->getSupportCityStringResult->string );
//
////也可以这样做
//$we = $c->__call('getWeather', array( array( 'theCityCode' => 2210 ) ) );
//var_dump( $we );
try {
$ss = new SoapClient( null, array( 'uri' => 'http://zendstudio.Net','location' => 'http://localhost/soap.php') );
$header = new SoapHeader( 'zendHeader', 'mmcYY', '12345678' );
$ss->__setSoapHeaders( $header );
echo $ss->im8( 'gently' );
} catch (Exception $e) {
	print_r($e);
}
