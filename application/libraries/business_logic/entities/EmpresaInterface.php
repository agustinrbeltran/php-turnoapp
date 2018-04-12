<?php
namespace business_logic\entities;

interface EmpresaInterface
{
	public function getId();
	public function setId($id);
	public function setNombre($nombre);
	public function getNombre();
	public function setSucursal(SucursalInterface $sucursal);
	public function getSucursales();
}
?>