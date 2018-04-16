<?php

namespace data\collections;

use business_logic\entities\TicketeraInterface,
    Countable, ArrayAccess, IteratorAggregate;

interface TicketeraCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(TicketeraInterface $ticketera);

    public function remove(TicketeraInterface $ticketera);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}

?>