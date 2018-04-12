<?php
namespace business_logic\entities;

use business_logic\factory\ObjectFactory, BadMethodCallException, InvalidArgumentException;

class Empresa implements EmpresaInterface
{

	private $_id;
	private $_nombre;
	private $_sucursales;


	function __construct($nombre)
	{
		$this->setNombre($nombre);
		$this->_sucursales= ObjectFactory::crearCollection();
	}

	public function setId($id)
	{
		if ($this->_id !== null) {
			throw new BadMethodCallException(
			"El id para esta empresa ya ha sido seteado.");
		}

		if (!is_int($id) || $id < 1) {
			throw new InvalidArgumentException("El id de esta empresa es invalido.");
		}

		$this->_id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function setNombre($nombre)
	{
		if (!is_string($nombre)
		|| strlen($nombre) < 2
		|| strlen($nombre) > 100) {
			throw new InvalidArgumentException("El nombre es invalido.");
		}

		$this->_nombre = htmlspecialchars(trim($nombre), ENT_QUOTES);
		return $this;
	}

	public function getNombre()
	{
		return $this->_nombre;
	}

	public function setSucursal(SucursalInterface $sucursal)
	{
		$this->_sucursales->insert($sucursal);
	}

	public function setSucursales(array $Sucursales)
	{
		$this->_sucursales->setArray($Sucursales);
	}

	public function getSucursales()
	{
		return $this->_sucursales->getArray();
	}

}
?>
