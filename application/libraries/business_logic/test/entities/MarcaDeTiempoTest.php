<?php

namespace business_logic\test\entities;

use business_logic\factory\ObjectFactory;

class MarcaDeTiempoTest
{

    private $marcaDeTiempo;

    function __construct()
    {
        $this->marcaDeTiempo = ObjectFactory::crearMarcaDeTiempo();
    }

    public function getTimeStampTest()
    {
        echo "getTimeStampTest(): " . "<br>";
        echo "-timestamp=" . $this->marcaDeTiempo->getTimestamp() . "<br>";
    }

    public function idTest()
    {
        echo "idTest(): " . "<br>";
        $this->marcaDeTiempo->setId(1);
        echo "-id=" . $this->marcaDeTiempo->getId() . "<br>";
    }

}

?>