<?php

namespace data\singleton;

use data\primitives\PdoAdapter;

class PdoAdapterSingleton
{
    const USER = "root";
    const PASSWORD = "test";
    const DATA_BASE = "mysql:host=db;port=3306;dbname=turnoapp_db";

    private static $_instance = null;

    private $adapter;

    private function __construct()
    {
        $this->adapter = new PdoAdapter(self::DATA_BASE, self::USER, self::PASSWORD);
    }

    public static function getInstance()
    {
        if (empty(static::$_instance)) {
            $class = get_called_class();
            static::$_instance = new $class;
        }
        return self::$_instance;
    }


    public function setAdapter($adapter)
    {
        $this->adapter = $adapter;
    }

    public function getAdapter()
    {
        return $this->adapter;
    }

}

?>