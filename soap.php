<?php
try {
$client = new SoapClient("http://10.41.16.127:136/Tester.webservice/WebService.asmx?wsdl"
);
var_dump($client->__getFunctions(),"<br>GetKeyInfoFromView:");

$reflector = new ReflectionClass('SoapClient');
var_dump($reflector->getProperties());
} catch (Exception $e) {
	print_r($e);
}
