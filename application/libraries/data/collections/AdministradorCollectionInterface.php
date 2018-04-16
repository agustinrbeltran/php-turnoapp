<?php

namespace data\collections;

use business_logic\entities\AdministradorInterface,
    Countable, ArrayAccess, IteratorAggregate;

interface AdministradorCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(AdministradorInterface $user);

    public function remove(AdministradorInterface $user);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}

?>