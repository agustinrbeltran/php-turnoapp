<?php

namespace data\collections;

use business_logic\entities\EmpresaInterface,
    InvalidArgumentException,ArrayIterator;

class EmpresaCollection implements EmpresaCollectionInterface
{
    protected $empresas = array();

    public function add(EmpresaInterface $empresa) {
        $this->offsetSet(null,$empresa);
    }

    public function remove(EmpresaInterface $empresa) {
        $this->offsetUnset($empresa);
    }

    public function get($key) {
        return $this->offsetGet($key);
    }

    public function exists($key) {
        return $this->offsetExists($key);
    }

    public function clear() {
        $this->empresas = array();
    }

    public function toArray() {
        return $this->empresas;
    }

    public function count() {
        return count($this->empresas);
    }

    public function offsetSet($key, $value) {
        if (!$value instanceof EmpresaInterface) {
            throw new InvalidArgumentException(
                "Could not add the user to the collection.");
        }
        if (!isset($key)) {
            $this->empresas[] = $value;
        }
        else {
            $this->empresas[$key] = $value;
        }
    }

    public function offsetUnset($key) {
        if ($key instanceof EmpresaInterface) {
            $this->empresas = array_filter($this->empresas,
                function ($v) use ($key) {
                    return $v !== $key;
                });
        }
        else if (isset($this->empresas[$key])) {
            unset($this->empresas[$key]);
        }
    }

    public function offsetGet($key) {
        if (isset($this->empresas[$key])) {
            return $this->empresas[$key];
        }
    }

    public function offsetExists($key) {
        return ($key instanceof EmpresaInterface)
            ? array_search($key, $this->empresas)
            : isset($this->empresas[$key]);
    }

    public  function getIterator() {
        return new ArrayIterator($this->empresas);
    }
}

?>