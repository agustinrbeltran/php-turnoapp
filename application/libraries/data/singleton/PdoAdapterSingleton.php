<?php

namespace data\singleton;

use data\primitives\PdoAdapter;

class PdoAdapterSingleton {
    const USER = "user";
    const PASSWORD = "qwerty123456";
    const DATA_BASE = "mysql:dbname=turnoapp_db";

    private static $_instance = null;

    private $adapter;

    private function __construct()
    {
        $this->adapter= new PdoAdapter(self::DATA_BASE,self::USER,self::PASSWORD );
    }

    public static function getInstance() {
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