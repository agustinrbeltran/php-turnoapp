<?php

require_once("../../../Autoloader.php");


use data\factory\EntityMapperFactory;



function getTurno($nroTicketera){

    $ticketeraMapper = EntityMapperFactory::getTicketeraMapper();

    $ticketera= $ticketeraMapper->findById($nroTicketera);

    return $ticketera->getTurno();
}

function getPromedio($nroTicketera){

    $ticketeraMapper = EntityMapperFactory::getTicketeraMapper();

    $ticketera= $ticketeraMapper->findById($nroTicketera);

    return $ticketera->getPromedio();

}

ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("scramble.wsdl");

$server->addFunction("getTurno");

$server->addFunction("getPromedio");

$server->handle();

?>