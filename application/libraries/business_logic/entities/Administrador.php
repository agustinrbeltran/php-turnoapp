<?php

namespace business_logic\entities;

use  business_logic\factory\ObjectFactory;

class Administrador extends Usuario implements AdministradorInterface
{

	private $_empresas;

	function __construct($nombre, $apellido, $email, $username, $password )
	{
        // map post fields to the corresponding mutators
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setEmail($email);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->_empresas = ObjectFactory::crearCollection();

    }

    public function setEmpresa(EmpresaInterface $empresa)
	{
       $this->_empresas->insert($empresa);
	}

	public function getEmpresas()
	{
        return $this->_empresas->getArray();
	}

    public function setEmpresas(array $Empresas)
    {
        $this->_empresas->setArray($Empresas);
    }

}
?>