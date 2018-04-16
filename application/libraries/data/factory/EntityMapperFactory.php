<?php

namespace data\factory;

use data\singleton\AdministradorMapperSingleton,
    data\singleton\EmpresaMapperSingleton,
    data\singleton\UsuarioSucursalMapperSingleton,
    data\singleton\TicketeraMapperSingleton,
    data\singleton\MarcaDeTiempoMapperSingleton,
    data\singleton\SucursalMapperSingleton;


class EntityMapperFactory
{

    function __construct()
    {
    }

    public static function getAdministradorMapper()
    {
        return AdministradorMapperSingleton::getInstance()->getAdministradorMapper();
    }

    public static function getEmpresaMapper()
    {
        return EmpresaMapperSingleton::getInstance()->getEmpresaMapper();
    }

    public static function getSucursalMapper()
    {
        return SucursalMapperSingleton::getInstance()->getSucursalMapper();
    }

    public static function getTicketeraMapper()
    {
        return TicketeraMapperSingleton::getInstance()->getTicketeraMapper();

    }

    public static function getUsuarioDeSucursalMapper()
    {
        return UsuarioSucursalMapperSingleton::getInstance()->getUsuarioSucursalMapper();
    }

    public static function getMarcaDeTiempoMapper()
    {
        return MarcaDeTiempoMapperSingleton::getInstance()->getMarcaDeTiempoMapper();
    }


}

?>