<?php
class services {  
      /**
        * Getdnstatus one string from each other
        * 
        * @param string $dn The first string of the subtraction
        * @return array The status of the tel
       */
    public function getdnstatus($dn){
        if($dn == "8101"){
        	$status_arr = array("1","通话","1");
        }else{
        	$status_arr = array("0","空闲","0");
        }
        return serialize($status_arr);
    }
}

$server = new SoapServer('service.wsdl', array('soap_version' => SOAP_1_2));  
$server->setClass("services");  
$server->handle();  
?>