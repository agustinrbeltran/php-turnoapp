<?php
namespace business_logic\entities;

use BadMethodCallException,InvalidArgumentException, business_logic\factory\ObjectFactory;

class Sucursal implements SucursalInterface
{

	private $_id;
	private $_nombre;
	private $_usuarios;
	private $_ticketeras;
    private $_direccion;
    private $_ciudad;

	function __construct($nombre,$direccion,$ciudad)
	{
        $this->setNombre($nombre);
        $this->_usuarios = ObjectFactory::crearCollection();
        $this->_ticketeras = ObjectFactory::crearCollection();
        $this->setCiudad($ciudad);
        $this->setDireccion($direccion);
    }

    public function setId($id)
    {
        if ($this->_id !== null) {
            throw new BadMethodCallException(
                "El id para esta sucursal ya ha sido seteado.");
        }

        if (!is_int($id) || $id < 1) {
            throw new InvalidArgumentException("El id de esta sucursal es invalido.");
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

	public function setUsuario (UsuarioSucursalInterface $usuarioSucursal)
	{
        $this->_usuarios->insert($usuarioSucursal);
	}

    public function setUsuarios(array $usuariosArray)
    {
        $this->_usuarios->setArray($usuariosArray);
    }

	public function getUsuarios()
	{
        return $this->_usuarios;
	}

	public function setTicketera(TicketeraInterface $ticketera)
	{
        $this->_ticketeras->insert($ticketera);
	}

    public function setTicketeras(array $ticketerasArray)
    {
        $this->_ticketeras->setArray($ticketerasArray);
    }

	public function getTicketeras()
	{
        return $this->_ticketeras->getArray();
	}

    public function setCiudad($ciudad)
    {
        if (!is_string($ciudad)
            || strlen($ciudad) < 2
            || strlen($ciudad) > 100) {
            throw new InvalidArgumentException("La ciudad es invalida.");
        }

        $this->_ciudad = htmlspecialchars(trim($ciudad), ENT_QUOTES);
        return $this;
    }

    public function getCiudad()
    {
        return $this->_ciudad;
    }

    public function setDireccion($direccion)
    {
        if (!is_string($direccion)
            || strlen($direccion) < 2
            || strlen($direccion) > 100) {
            throw new InvalidArgumentException("La direccion es invalida.");
        }

        $this->_direccion = htmlspecialchars(trim($direccion), ENT_QUOTES);
        return $this;
    }

    public function getDireccion()
    {
        return $this->_direccion;
    }

}
?>