<?php

namespace data\datamappers;

use business_logic\entities\TicketeraInterface;

interface TicketeraMapperInterface
{
    public function findAll(array $conditions = array());

    public function findById($id);

    public function insert(TicketeraInterface $ticketera, $id_sucursal);

    public function update(TicketeraInterface $ticketeraInterfaz);

    public function delete($id);

}

?>