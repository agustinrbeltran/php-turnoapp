<?php
namespace business_logic\entities;

class UsuarioSucursal extends Usuario implements UsuarioSucursalInterface
{
    private $_idSucursal;

    public function __construct($nombre, $apellido, $email, $username, $password)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setEmail($email);
        $this->setUsername($username);
        $this->setPassword($password);
    }


    public function setIdSucursal($idSucursal)
    {
        $this->_idSucursal = $idSucursal;
    }

    public function getIdSucursal()
    {
        return $this->_idSucursal;
    }

}

?>
