<?php
$ss = new SoapServer( null, array( 'uri' => 'http://zendstudio.Net' ) );
$ss->setClass( 't', '参数1', '参数2' );
$ss->handle();
//$request = file_get_contents( 'php://input' );
//file_put_contents( 'request.txt', $request );
class t{

function __construct( $p1, $p2 ){

}

function im8( $g ){
return 'OK----'. $g;
}

}