<?php

namespace data\datamappers;

use business_logic\entities\UsuarioSucursal;

interface UsuarioSucursalMapperInterface
{
    public function findAll(array $conditions = array());

    public function findById($id);

    public function insert(UsuarioSucursal $usuarioSucursal);

    public function delete($id);

}

?>