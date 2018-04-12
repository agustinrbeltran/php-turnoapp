<?php

namespace data\datamappers;

use business_logic\entities\Administrador;

interface AdministradorMapperInterface
{

	public function findAll(array $conditions = array());

	public function findById($id);

    public function insert(Administrador $administrador);

    public function update (Administrador $administrador);

	public function delete($id);

}
?>