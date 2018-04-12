<?php

namespace business_logic\test\entities;
use business_logic\factory\ObjectFactory;

class EmpresaTest{

    private $empresa;

    function __construct()
    {
        $this->empresa = ObjectFactory::crearEmpresa("Apple");
    }

    public function idTest(){
        echo "idTest(): "."<br>";
        $this->empresa->setId(1);
        echo "-id=".$this->empresa->getId()."<br>";
    }

    public function getNombreTest()
    {
        echo "getNombreTest():"."<br>";
        echo "-nombre=".$this->empresa->getNombre()."<br>";
    }


}
?>