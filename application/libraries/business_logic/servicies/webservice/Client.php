<?php
ini_set("soap.wsdl_cache_enabled", "0");

$client = New SoapClient("http://localhost/webapp/application/libraries/business_logic/servicies/webservice/scramble.wsdl");

$turno = $client->getTurno(1);

$promedio = $client->getPromedio(1);

echo $turno . "<br>";

echo $promedio;
?>
