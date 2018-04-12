<?php
namespace data\collections;

use business_logic\entities\MarcaDeTiempoInterface,
    Countable,ArrayAccess,IteratorAggregate;

interface MarcaTiempoCollectionInterface extends Countable, ArrayAccess, IteratorAggregate
{
    public function add(MarcaDeTiempoInterface $marcaTiempo);
    public function remove(MarcaDeTiempoInterface $marcaTiempo);
    public function get($key);
    public function exists($key);
    public function clear();
    public function toArray();
}
?>