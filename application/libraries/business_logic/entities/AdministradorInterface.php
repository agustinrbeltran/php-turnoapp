<?php
namespace business_logic\entities;

interface AdministradorInterface
{
	public function setEmpresa(EmpresaInterface $empresa );
	public function getEmpresas();
}
?>