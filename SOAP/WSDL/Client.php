<?php
// Service ----------------------------------------------------------------------------
//$client = new SoapClient('http://10.1.7.153/soap/service.wsdl');   
$client = new SoapClient("http://www.website.com/WebApi/SOAP/WSDL/Service/services.php?WSDL");  
try {  
	$result = array();
	$result = $client->getdnstatus('8101');
	var_dump(unserialize($result));
} catch(SoapFault $e) {  
	print "Sorry an error was caught executing your request: {$e->getMessage()}";  
}



// Service1 ----------------------------------------------------------------------------
echo "<hr />";

$client = new SoapClient("http://www.website.com/WebApi/SOAP/WSDL/Service1/Service.php?WSDL");  
try {  
	echo $client->test();
	echo '<br />';
	echo $client->add(1, 1);
	echo '<br />';
	echo $client->setName("luo");
	echo '<br />';
	echo $client->getName();
} catch(SoapFault $e) {  
print "Sorry an error was caught executing your request: {$e->getMessage()}";  
} 

?>