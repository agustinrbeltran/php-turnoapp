<?php

namespace data\singleton;

use data\datamappers\SucursalMapper;

class SucursalMapperSingleton {

    private static $_instance = null;

    private $_sucursalMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_sucursalMapper= new SucursalMapper($adapter);
    }

    public static function getInstance() {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }

    public function setSucursalMapper($sucursalMapper)
    {
        $this->_sucursalMapper = $sucursalMapper;
    }

    public function getSucursalMapper()
    {
        return $this->_sucursalMapper;
    }

}
?>