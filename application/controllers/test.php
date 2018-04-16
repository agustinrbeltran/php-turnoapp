<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Test extends CI_Controller
{

    public function index()
    {

        $this->load->library('myservicies');
        $usuarioService = $this->myservicies->getUsuarioSucursalService();

        $usuarioService->setUsuario($this->session->userdata('email'));

        $id_sucursal = $usuarioService->getIdSucursal();

        $usuario = $usuarioService->getUsuario();


        echo $id_sucursal . "a " . $usuario->getIdSucursal() . "b " . $usuario->getId();


    }

}

?>
