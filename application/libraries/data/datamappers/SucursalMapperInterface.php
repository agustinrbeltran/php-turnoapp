<?php

namespace data\datamappers;


use business_logic\entities\SucursalInterface;

interface SucursalMapperInterface
{
    public function findAll(array $conditions = array());

    public function findById($id);

    public function insert(SucursalInterface $sucursal, $id_empresa);

    public function update(SucursalInterface $sucursal);

    public function delete($id);

}

?>