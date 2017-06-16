<?php
//使用SoapDiscovery.class.php工具类生成wsdl文件,一般server.class.php发生变化的时候调用即可
include("Service.php");
include("SoapDiscovery.class.php");

$disco = new SoapDiscovery('Service','soap');	//第一个参数是类名,第二个参数时服务名,第三个参数时手动指定的服务端url,如果是在服务端文件生成的wsdl则无需指定
$handle = fopen('Service.wsdl', 'w+');	//将文件保存到服务器上
fwrite($handle, $disco->getWSDL());
fclose($handle);

?>