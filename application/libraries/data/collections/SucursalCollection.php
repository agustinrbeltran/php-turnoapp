<?php

namespace data\collections;

use business_logic\entities\SucursalInterface,
    InvalidArgumentException,ArrayIterator;

class SucursalCollection implements SucursalCollectionInterface
{
    protected $sucursales = array();

    public function add(SucursalInterface $sucursal) {
        $this->offsetSet(null,$sucursal);
    }

    public function remove(SucursalInterface $sucursal) {
        $this->offsetUnset($sucursal);
    }

    public function get($key) {
        return $this->offsetGet($key);
    }

    public function exists($key) {
        return $this->offsetExists($key);
    }

    public function clear() {
        $this->sucursales = array();
    }

    public function toArray() {
        return $this->sucursales;
    }

    public function count() {
        return count($this->sucursales);
    }

    public function offsetSet($key, $value) {
        if (!$value instanceof SucursalInterface) {
            throw new InvalidArgumentException(
                "Could not add the user to the collection.");
        }
        if (!isset($key)) {
            $this->sucursales[] = $value;
        }
        else {
            $this->sucursales[$key] = $value;
        }
    }

    public function offsetUnset($key) {
        if ($key instanceof SucursalInterface) {
            $this->sucursales = array_filter($this->sucursales,
                function ($v) use ($key) {
                    return $v !== $key;
                });
        }
        else if (isset($this->sucursales[$key])) {
            unset($this->sucursales[$key]);
        }
    }

    public function offsetGet($key) {
        if (isset($this->sucursales[$key])) {
            return $this->sucursales[$key];
        }
    }

    public function offsetExists($key) {
        return ($key instanceof SucursalInterface)
            ? array_search($key, $this->sucursales)
            : isset($this->sucursales[$key]);
    }

    public function getIterator() {
        return new ArrayIterator($this->sucursales);
    }
}

?>