<?php

namespace data\singleton;

use data\datamappers\TicketeraMapper;

class TicketeraMapperSingleton
{

    private static $_instance = null;

    private $_ticketeraMapper;

    private function __construct()
    {
        $pdoAdapterSingleton = PdoAdapterSingleton::getInstance();
        $adapter = $pdoAdapterSingleton->getAdapter();
        $this->_ticketeraMapper = new TicketeraMapper($adapter);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }

    public function setTicketeraMapper($ticketeraMapper)
    {
        $this->_ticketeraMapper = $ticketeraMapper;
    }

    public function getTicketeraMapper()
    {
        return $this->_ticketeraMapper;
    }


}

?>