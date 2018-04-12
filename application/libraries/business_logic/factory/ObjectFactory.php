<?php
namespace business_logic\factory;

use business_logic\entities\Sucursal,business_logic\entities\Empresa,business_logic\entities\Administrador,business_logic\entities\UsuarioSucursal,business_logic\entities\Ticketera
,business_logic\entities\Collection,business_logic\entities\MarcaDeTiempo;

class ObjectFactory
{

  function __construct()
  {
  }

  public static function crearSucursal($nombre,$direccion,$ciudad)
  {
    return new Sucursal($nombre,$direccion,$ciudad);
  }

  public static function crearEmpresa($nombre)
  {
    return new Empresa($nombre);
  }

  public static function crearAdministrador($nombre, $apellido, $username, $password, $email)
  {
    return new Administrador($nombre,$apellido,$email,$username,$password);
  }

  public static function crearUsuarioSucursal($nombre, $apellido, $username, $password, $email)
  {
    return new UsuarioSucursal($nombre,$apellido,$email,$username,$password);
  }

  public static function crearTicketera()
  {
    return new Ticketera();
  }

  public static function crearCollection()
  {
    return new Collection();
  }

  public static function crearMarcaDeTiempo()
  {
    return new MarcaDeTiempo();
  }

}
?>
