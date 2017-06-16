<?php
class Service {
    public $name = "jax";

    public function test() {
        return 'you are testing';
    }

    public function add($a, $b){
    	return $a + $b;
    }

    public function setName($name){
    	$this->name = $name;
    }

    public function getName(){
    	return $this->name;
    }
   
}

$server = new SoapServer('Service.wsdl', array('soap_version' => SOAP_1_2));  
$server->setClass("Service");  
$server->handle();  

?>