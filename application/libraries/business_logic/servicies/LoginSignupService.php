<?php

namespace business_logic\servicies;

use data\factory\EntityMapperFactory,
business_logic\factory\ObjectFactory;


class LoginSignupService {

  private $_administradorMapper;

  private $_usuarioSucursalMapper;

  public function __construct()
  {
    $this->_administradorMapper = EntityMapperFactory::getAdministradorMapper();
    $this->_usuarioSucursalMapper = EntityMapperFactory::getUsuarioDeSucursalMapper();
  }

  public function can_log_in($email,$password)
  {
    $result1 = $this->_administradorMapper->findAll(array('email'=> $email,'password'=> $password));

    $result2 = $this->_usuarioSucursalMapper->findAll(array('email'=> $email,'password'=> $password));


    if ( ($result1->count()==1) || ($result2->count()==1)  ){
      return true;
    }
    else        {
      return false;
    }

  }

  public function registrarAdministrador($nombre , $apellido , $email, $password )
  {
    $administrador = ObjectFactory::crearAdministrador($nombre,$apellido,'no-usename',$password,$email);
    $this->_administradorMapper->insert($administrador);

    return true;
  }


  public function is_Administrador($email)
  {
    $result = $this->_administradorMapper->findAll(array('email'=> $email));

    if ($result->count() == 1){
      return true;
    }
    else return false;

  }



}
