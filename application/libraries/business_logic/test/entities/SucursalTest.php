<?php

namespace business_logic\test\entities;
use business_logic\factory\ObjectFactory;

class SucursalTest{

    private $sucursal;

    function __construct()
    {
        $this->sucursal = ObjectFactory::crearSucursal("Sucursal de Prueba","Urquiza 323","Trelew");
    }

    public function idTest(){
        echo "idTest(): "."<br>";
        $this->sucursal->setId(1);
        echo "-id=".$this->sucursal->getId()."<br>";
    }

    public function getNombreTest()
    {
        echo "getNombreTest(): "."<br>";
        echo "-nombre=".$this->sucursal->getNombre()."<br>";
    }

}
?>