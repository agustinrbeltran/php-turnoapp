<?php

namespace business_logic\servicies;

use data\factory\EntityMapperFactory,
    business_logic\factory\ObjectFactory;

class AdministradorService
{
    private $_administradorMapper;
    private $_empresaMapper;
    private $_sucursalMapper;
    private $_usuarioSucursalMapper;
    private $_administrador;

    function __construct()
    {
        //mappers
        $this->_administradorMapper = EntityMapperFactory::getAdministradorMapper();
        $this->_empresaMapper = EntityMapperFactory::getEmpresaMapper();
        $this->_sucursalMapper = EntityMapperFactory::getSucursalMapper();
        $this->_usuarioSucursalMapper = EntityMapperFactory::getUsuarioDeSucursalMapper();

    }

    public function setAdministrador($email)
    {
        //traigo a memoria el administrador logueado
        $collection = $this->_administradorMapper->findAll(array('email' => $email));
        $array = $collection->toArray();
        $this->_administrador = $array[0];
    }

    public function getAdministrador()
    {
        return $this->_administrador;
    }

    public function crearEmpresa($nombre)
    {
        //creo una entidad empresa con ObjectFactory
        $empresa = ObjectFactory::crearEmpresa($nombre);

        //inserto la entidad empresa en la base de datos con empresaMapper
        $id_empresa = $this->_empresaMapper->insert($empresa, $this->_administrador->getId());

        return $id_empresa;
    }

    public function crearSucursal($nombre, $direccion, $ciudad, $id_empresa)
    {
        $sucursal = ObjectFactory::crearSucursal($nombre, $direccion, $ciudad);

        $id_sucursal = $this->_sucursalMapper->insert($sucursal, $id_empresa);

        return $id_sucursal;
    }

    public function getEmpresas()
    {
        $collection = $this->_empresaMapper->findAll(array('id_usuario' => $this->_administrador->getId()));
        $empresas = $collection->toArray();
        return $empresas;
    }

    public function getSucursales($id_empresa)
    {
        $collection = $this->_sucursalMapper->findAll(array('id_empresa' => $id_empresa));
        $sucursales = $collection->toArray();
        return $sucursales;
    }

    public function getUsuariosSucursal($id_sucursal)
    {
        $collection = $this->_usuarioSucursalMapper->findAll(array('id_sucursal' => $id_sucursal));
        $usuariosSucursal = $collection->toArray();
        return $usuariosSucursal;
    }

    public function borrarEmpresa($id)
    {
        $this->_empresaMapper->delete($id);
    }

    public function borrarSucursal($id)
    {
        $this->_sucursalMapper->delete($id);
    }

    public function borrarUsuarioSucursal($id)
    {
        $this->_usuarioSucursalMapper->delete($id);
    }

    public function registrarUsuarioSucursal($nombre, $apellido, $username, $password, $email, $id_sucursal)
    {
        $usuario = ObjectFactory::crearUsuarioSucursal($nombre, $apellido, $username, $password, $email);
        $usuario->setIdSucursal($id_sucursal);
        $this->_usuarioSucursalMapper->insert($usuario);

        return true;
    }

}

?>
