<?php
//创建服务类
require_once 'PersonInfo.php';
//wsdl方式提供web service,如果生成了wsdl文件则可直接传递到//SoapServer的构造函数中
//$s = new SoapServer('PersonInfo.wsdl');
   
//doesn't work 只有location不能提供web service
//output:looks like we got no XML document
//$s = new SoapServer(null,array("location"=>"http://localhost/Test/MyService/Server.php"));
   
//下面两种方式均可以工作，只要指定了相应的uri
//$s = new SoapServer(null,array("uri"=>"Server.php"));
$s = new SoapServer(null,array("location"=>"http://www.website.com/WebApi/SOAP/NO-WSDL/Services/Service.php","uri"=>"Service.php"));
$s -> setClass("PersonInfo");
$s -> handle();
?>