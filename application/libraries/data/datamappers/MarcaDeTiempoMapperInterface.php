<?php

namespace data\datamappers;


use business_logic\entities\MarcaDeTiempoInterface;

interface MarcaDeTiempoMapperInterface
{

    public function findAll(array $conditions = array());

    public function findById($id);

    public function insert(MarcaDeTiempoInterface $marcaDeTiempo, $id_ticketera);

    public function delete($id);

}
?>