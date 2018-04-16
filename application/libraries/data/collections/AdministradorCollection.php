<?php

namespace data\collections;

use business_logic\entities\AdministradorInterface,
    InvalidArgumentException, ArrayIterator;

class AdministradorCollection implements AdministradorCollectionInterface
{
    protected $users = array();

    public function add(AdministradorInterface $user)
    {
        $this->offsetSet(null, $user);
    }

    public function remove(AdministradorInterface $user)
    {
        $this->offsetUnset($user);
    }

    public function get($key)
    {
        return $this->offsetGet($key);
    }

    public function exists($key)
    {
        return $this->offsetExists($key);
    }

    public function clear()
    {
        $this->users = array();
    }

    public function toArray()
    {
        return $this->users;
    }

    public function count()
    {
        return count($this->users);
    }

    public function offsetSet($key, $value)
    {
        if (!$value instanceof AdministradorInterface) {
            throw new InvalidArgumentException(
                "Could not add the user to the collection.");
        }
        if (!isset($key)) {
            $this->users[] = $value;
        } else {
            $this->users[$key] = $value;
        }
    }

    public function offsetUnset($key)
    {
        if ($key instanceof AdministradorInterface) {
            $this->users = array_filter($this->users,
                function ($v) use ($key) {
                    return $v !== $key;
                });
        } else if (isset($this->users[$key])) {
            unset($this->users[$key]);
        }
    }

    public function offsetGet($key)
    {
        if (isset($this->users[$key])) {
            return $this->users[$key];
        }
    }

    public function offsetExists($key)
    {
        return ($key instanceof AdministradorInterface)
            ? array_search($key, $this->users)
            : isset($this->users[$key]);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->users);
    }
}

?>
