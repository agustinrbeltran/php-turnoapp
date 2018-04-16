<?php

namespace data\collections;

use business_logic\entities\SucursalInterface,
    Countable, ArrayAccess, IteratorAggregate;

interface SucursalCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(SucursalInterface $sucursal);

    public function remove(SucursalInterface $sucursal);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}

?>