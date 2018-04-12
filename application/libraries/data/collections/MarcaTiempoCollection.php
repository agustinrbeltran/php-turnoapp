<?php

namespace data\collections;

use business_logic\entities\MarcaDeTiempoInterface,
    InvalidArgumentException,ArrayIterator;

class MarcaTiempoCollection implements MarcaTiempoCollectionInterface
{
    protected $marcasTiempo = array();

    public function add(MarcaDeTiempoInterface $marcaTiempo) {
        $this->offsetSet(null,$marcaTiempo);
    }

    public function remove(MarcaDeTiempoInterface $marcaTiempo) {
        $this->offsetUnset($marcaTiempo);
    }

    public function get($key) {
        return $this->offsetGet($key);
    }

    public function exists($key) {
        return $this->offsetExists($key);
    }

    public function clear() {
        $this->marcasTiempo = array();
    }

    public function toArray() {
        return $this->marcasTiempo;
    }

    public function count() {
        return count($this->marcasTiempo);
    }

    public function offsetSet($key, $value) {
        if (!$value instanceof MarcaDeTiempoInterface) {
            throw new InvalidArgumentException(
                "Could not add the user to the collection.");
        }
        if (!isset($key)) {
            $this->marcasTiempo[] = $value;
        }
        else {
            $this->marcasTiempo[$key] = $value;
        }
    }

    public function offsetUnset($key) {
        if ($key instanceof MarcaDeTiempoInterface) {
            $this->marcasTiempo = array_filter($this->marcasTiempo,
                function ($v) use ($key) {
                    return $v !== $key;
                });
        }
        else if (isset($this->marcasTiempo[$key])) {
            unset($this->marcasTiempo[$key]);
        }
    }

    public function offsetGet($key) {
        if (isset($this->marcasTiempo[$key])) {
            return $this->marcasTiempo[$key];
        }
    }

    public function offsetExists($key) {
        return ($key instanceof MarcaDeTiempoInterface)
            ? array_search($key, $this->marcasTiempo)
            : isset($this->marcasTiempo[$key]);
    }

    public function getIterator() {
        return new ArrayIterator($this->marcasTiempo);
    }
}

?>