<?php

namespace data\collections;

use business_logic\entities\TicketeraInterface,
    InvalidArgumentException,ArrayIterator;

class TicketeraCollection implements TicketeraCollectionInterface
{
    protected $ticketeras = array();

    public function add(TicketeraInterface $ticketera) {
        $this->offsetSet(null,$ticketera);
    }

    public function remove(TicketeraInterface $ticketera) {
        $this->offsetUnset($ticketera);
    }

    public function get($key) {
        return $this->offsetGet($key);
    }

    public function exists($key) {
        return $this->offsetExists($key);
    }

    public function clear() {
        $this->ticketeras = array();
    }

    public function toArray() {
        return $this->ticketeras;
    }

    public function count() {
        return count($this->ticketeras);
    }

    public function offsetSet($key, $value) {
        if (!$value instanceof TicketeraInterface) {
            throw new InvalidArgumentException(
                "Could not add the user to the collection.");
        }
        if (!isset($key)) {
            $this->ticketeras[] = $value;
        }
        else {
            $this->ticketeras[$key] = $value;
        }
    }

    public function offsetUnset($key) {
        if ($key instanceof TicketeraInterface) {
            $this->ticketeras = array_filter($this->ticketeras,
                function ($v) use ($key) {
                    return $v !== $key;
                });
        }
        else if (isset($this->ticketeras[$key])) {
            unset($this->ticketeras[$key]);
        }
    }

    public function offsetGet($key) {
        if (isset($this->ticketeras[$key])) {
            return $this->ticketeras[$key];
        }
    }

    public function offsetExists($key) {
        return ($key instanceof TicketeraInterface)
            ? array_search($key, $this->ticketeras)
            : isset($this->ticketeras[$key]);
    }

    public function getIterator() {
        return new ArrayIterator($this->ticketeras);
    }
}

?>