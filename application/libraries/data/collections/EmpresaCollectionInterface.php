<?php

namespace data\collections;

use business_logic\entities\EmpresaInterface,
    Countable, ArrayAccess, IteratorAggregate;

interface EmpresaCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(EmpresaInterface $empresa);

    public function remove(EmpresaInterface $empresa);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}

?>