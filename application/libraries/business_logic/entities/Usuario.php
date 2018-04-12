<?php
namespace business_logic\entities;

use BadMethodCallException,InvalidArgumentException;

abstract class Usuario
{

	private $_id;
	private $_nombre;
	private $_apellido;
	private $_password;
	private $_username;
	private $_email;

	public function setId($id)
	{
		if ($this->_id !== null) {
			throw new BadMethodCallException(
			"El id para este usuario ya ha sido seteado.");
		}

		if (!is_int($id) || $id < 1) {
			throw new InvalidArgumentException("El id de este usuario es invalido.");
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

	public function setApellido($apellido)
	{
		if (!is_string($apellido)
		|| strlen($apellido) < 2
		|| strlen($apellido) > 100) {
			throw new InvalidArgumentException("El apellido es invalido.");
		}

		$this->_apellido = htmlspecialchars(trim($apellido), ENT_QUOTES);
		return $this;
	}

	public function getApellido()
	{
		return $this->_apellido;
	}

	public function setUsername($username)
	{
		if (!is_string($username)
		|| strlen($username) < 2
		|| strlen($username) > 100) {
			throw new InvalidArgumentException("El username es invalido.");
		}

		$this->_username = htmlspecialchars(trim($username), ENT_QUOTES);
		return $this;
	}

	public function getUsername()
	{
		return $this->_username;
	}

	public function setPassword($password)
	{
		if (!is_string($password)
		|| strlen($password) < 2
		|| strlen($password) > 100) {
			throw new InvalidArgumentException("El password es invalido.");
		}

		$this->_password = htmlspecialchars(trim($password), ENT_QUOTES);
		return $this;
	}

	public function getPassword()
	{
		return $this->_password;
	}

	public function setEmail($email)
	{
		if (!is_string($email)
		|| strlen($email) < 2
		|| strlen($email) > 100) {
			throw new InvalidArgumentException("El email es invalido.");
		}

		$this->_email = htmlspecialchars(trim($email), ENT_QUOTES);
		return $this;
	}

	public function getEmail()
	{
		return $this->_email;
	}

}
?>
