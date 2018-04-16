<?php

namespace data\collections;


use business_logic\entities\UsuarioSucursalInterface,
    Countable, ArrayAccess, IteratorAggregate;

interface UsuarioSucursalCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(UsuarioSucursalInterface $user);

    public function remove(UsuarioSucursalInterface $user);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}