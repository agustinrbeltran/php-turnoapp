<?php

namespace data\singleton;

use data\datamappers\MarcaDeTiempoMapper;

class MarcaDeTiempoMapperSingleton
{

    private static $_instance = null;

    private $_marcaDeTiempoMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_marcaDeTiempoMapper = new MarcaDeTiempoMapper($adapter);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }


    public function setMarcaDeTiempoMapper($marcaDeTiempoMapper)
    {
        $this->_marcaDeTiempoMapper = $marcaDeTiempoMapper;
    }

    public function getMarcaDeTiempoMapper()
    {
        return $this->_marcaDeTiempoMapper;
    }


}

?>