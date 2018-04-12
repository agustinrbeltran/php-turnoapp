<?php
namespace business_logic\entities;

interface SucursalInterface
{
	public function setId($id);
	public function getId();
	public function setNombre($nombre);
	public function getNombre();
	public function setUsuario(UsuarioSucursalInterface $usuarioSucursal);
	public function getUsuarios();
	public function setTicketera(TicketeraInterface $ticketera);
	public function getTicketeras();
    public function setDireccion($direccion);
    public function getDireccion();
    public function setCiudad($ciudad);
    public function getCiudad();
}
?>