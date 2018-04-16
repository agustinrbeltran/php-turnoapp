<?php

namespace data\singleton;

use data\datamappers\EmpresaMapper;

class EmpresaMapperSingleton
{

    private static $_instance = null;

    private $_empresaMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_empresaMapper = new EmpresaMapper($adapter);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }


    public function setEmpresaMapper($empresaMapper)
    {
        $this->_empresaMapper = $empresaMapper;
    }

    public function getEmpresaMapper()
    {
        return $this->_empresaMapper;
    }


}

?>