<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use business_logic\servicies\AdministradorService,
    business_logic\servicies\UsuarioSucursalService,
    business_logic\servicies\LoginSignupService;

class MyServicies
{
    public function __construct()
    {
        require_once('Autoloader.php');

    }

    public function getAdministradorService(){
        return new AdministradorService();
    }

    public function getUsuarioSucursalService(){
        return new UsuarioSucursalService();
    }

    public function getLoginSignupService(){
        return new LoginSignupService();
    }

}