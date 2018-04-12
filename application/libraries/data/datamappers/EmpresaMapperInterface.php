<?php

namespace data\datamappers;

use business_logic\entities\EmpresaInterface;

interface EmpresaMapperInterface
{
    public function findAll(array $conditions = array());

    public function findById($id);

    public function insert(EmpresaInterface $empresa, $id_administrador);

    public function update (EmpresaInterface $empresa);

    public function delete($id);

}
?>