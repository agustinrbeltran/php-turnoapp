<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Usuario extends CI_Controller
{

    public function index()
    {
        $this->ticketeras();
    }


    public function ticketeras()
    {
        $this->members();

        $usuarioService = $this->getService();

        $this->session->unset_userdata('id_ticketera_seleccionada');

        $ticketeras = $usuarioService->getTicketeras();

        $this->mysmarty->assign('ticketeras', $ticketeras);

        $this->displayTicketeras();

    }

    public function verticketera($id_ticketera)
    {
        $this->members();

        $usuarioService = $this->getService();

        $ticketera = $usuarioService->getTicketera($id_ticketera);

        $turno = $ticketera->getTurno();

        $promedio = $ticketera->getPromedio();


        $this->mysmarty->assign('id_ticketera', $id_ticketera);
        $this->mysmarty->assign('turno', $turno);
        $this->mysmarty->assign('promedio', $promedio);

        $this->displayTicketera();

    }


    //---------------------------------------------------acciones-----------------------------------
    public function agregarticketera()
    {
        $this->members();

        $usuarioService = $this->getService();

        $usuarioService->crearTicketera();

        $this->ticketeras();
    }

    public function borrarticketera($id_ticketera)
    {
        $this->members();

        $usuarioService = $this->getService();

        $usuarioService->borrarTicketera($id_ticketera);

        $this->ticketeras();
    }

    public function aumentar($id_ticketera)
    {
        $this->members();

        $usuarioService = $this->getService();

        $turno = $usuarioService->aumentarTurno($id_ticketera);

        $promedio = $usuarioService->getTicketera($id_ticketera)->getPromedio();


        $this->mysmarty->assign('id_ticketera', $id_ticketera);
        $this->mysmarty->assign('turno', $turno);
        $this->mysmarty->assign('promedio', $promedio);


        $this->displayTicketera();

    }

    public function reiniciar($id_ticketera)
    {
        $this->members();

        $usuarioService = $this->getService();

        $usuarioService->reiniciar($id_ticketera);

        $ticketera = $usuarioService->getTicketera($id_ticketera);

        $turno = $ticketera->getTurno();

        $promedio = $ticketera->getPromedio();


        $this->mysmarty->assign('id_ticketera', $id_ticketera);
        $this->mysmarty->assign('turno', $turno);
        $this->mysmarty->assign('promedio', $promedio);


        $this->displayTicketera();

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');

    }


    //--------------------------------display de las vistas--------------------------------
    private function displayTicketeras()
    {
        $this->assignCommon();
        $this->mysmarty->display('ticketerasPage.tpl');
    }

    private function displayTicketera()
    {
        $this->assignCommon();
        $this->mysmarty->display('verticketeraPage.tpl');
    }


    //------------------------------------helpers---------------------------------------------------

    //verifico si esta logueado
    private function members()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login');
        }
    }

    //asigno variable comunes para todas las vistas
    private function assignCommon()
    {
        $this->mysmarty->assign('root', $this->getRootDirectory());
        $this->mysmarty->assign('user_fullname', $this->session->userdata('user_fullname'));
    }

    //devuelvo el directorio raiz
    private function getRootDirectory()
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/webapp';
    }

    //obtengo el servicio para los administradores y seteo el user_fullname a la sesion si esta vacio
    private function getService()
    {
        $this->load->library('myservicies');
        $usuarioService = $this->myservicies->getUsuarioSucursalService();

        $usuarioService->setUsuario($this->session->userdata('email'));

        if (!$this->session->userdata('user_fullname')) {
            $this->setFullName($usuarioService);
        }

        return $usuarioService;
    }


    //seteo el full_username a la sesion
    private function setFullName($usuarioService)
    {
        $usuario = $usuarioService->getUsuario();
        $user_fullname = $usuario->getNombre() . " " . $usuario->getApellido();

        $this->session->set_userdata('user_fullname', $user_fullname);

    }

}


?>
