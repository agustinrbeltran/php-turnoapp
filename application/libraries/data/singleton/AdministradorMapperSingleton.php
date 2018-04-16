<?php

namespace data\singleton;

use data\datamappers\AdministradorMapper;


class AdministradorMapperSingleton
{

    private static $_instance = null;

    private $_administradorMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_administradorMapper = new AdministradorMapper($adapter);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }

    public function setAdministradorMapper($administradorMapper)
    {
        $this->_administradorMapper = $administradorMapper;
    }

    public function getAdministradorMapper()
    {
        return $this->_administradorMapper;
    }


}

?>