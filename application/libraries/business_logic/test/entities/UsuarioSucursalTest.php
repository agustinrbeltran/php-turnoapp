<?php

namespace business_logic\test\entities;

use business_logic\factory\ObjectFactory;

class UsuarioSucursalTest
{

    private $usuarioDeSucursal;

    function __construct()
    {
        $this->usuarioDeSucursal = ObjectFactory::crearUsuarioSucursal("Juan", "Ramirez", "juanramirez", "abarajame1234", "juanramirez@hotmail.com");
    }

    public function idTest()
    {
        echo "idTest(): " . "<br>";
        $this->usuarioDeSucursal->setId(1);
        echo "-id=" . $this->usuarioDeSucursal->getId() . "<br>";
    }

    public function getNombreTest()
    {
        echo "getNombreTest():" . "<br>";
        echo "-nombre=" . $this->usuarioDeSucursal->getNombre() . "<br>";
    }

    public function getApellidoTest()
    {
        echo "getApellidoTest():" . "<br>";
        echo "-apellido=" . $this->usuarioDeSucursal->getApellido() . "<br>";
    }

    public function getUsernameTest()
    {
        echo "getUsernameTest(): " . "<br>";
        echo "-username=" . $this->usuarioDeSucursal->getUsername() . "<br>";
    }

    public function getPasswordTest()
    {
        echo "getPasswordTest(): " . "<br>";
        echo "-password=" . $this->usuarioDeSucursal->getPassword() . "<br>";
    }

    public function getEmailTest()
    {
        echo "getEmailTest(): " . "<br>";
        echo "-email=" . $this->usuarioDeSucursal->getEmail() . "<br>";
    }

}

?>