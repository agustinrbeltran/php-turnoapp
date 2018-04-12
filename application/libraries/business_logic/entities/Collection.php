<?php

namespace business_logic\entities;


class Collection {
    private $_collection = array();

    function __construct()
    {
    }

    public function insert ($objeto)
    {
        array_push($this->_collection,$objeto);
    }

    public function reset(){
        unset($this->_collection);
        $this->_collection = array();
    }

    public function tamaño()
    {
        return count($this->_collection);
    }

    public function setArray(array $array)
    {
        $this->_collection = $array;
    }

    public function getArray()
    {
        return $this->_collection;
    }

    public function getLastInserted()
    {
        return $this->_collection[$this->tamaño()-1];
    }

} 