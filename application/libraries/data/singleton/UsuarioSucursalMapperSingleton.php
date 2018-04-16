<?php

namespace data\singleton;

use data\datamappers\UsuarioSucursalMapper;

class UsuarioSucursalMapperSingleton
{
    private static $_instance = null;

    private $_usuarioSucursalMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_usuarioSucursalMapper = new UsuarioSucursalMapper($adapter);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }

    public function setUsuarioSucursalMapper($usuarioSucursalMapper)
    {
        $this->_usuarioSucursalMapper = $usuarioSucursalMapper;
    }

    public function getUsuarioSucursalMapper()
    {
        return $this->_usuarioSucursalMapper;
    }


}

?>