<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Administrador extends CI_Controller
{

    public function index()
    {
        $this->empresas();
    }


    public function empresas()
    {
        $this->members();

        $administradorService = $this->getService();

        $this->session->unset_userdata('id_empresa_seleccionada');

        $empresas = $administradorService->getEmpresas();

        $this->mysmarty->assign('empresas', $empresas);

        $this->displayEmpresas();

    }

    public function sucursales($id_empresa)
    {
        $this->members();

        $administradorService = $this->getService();

        $this->session->unset_userdata('id_sucursal_seleccionada');


        if (!$this->session->userdata('id_empresa_seleccionada')) {
            $this->session->set_userdata('id_empresa_seleccionada', $id_empresa);
        }

        $sucursales = $administradorService->getSucursales($id_empresa);

        $this->mysmarty->assign('sucursales', $sucursales);
        $this->mysmarty->assign('nombre_empresa', '');

        $this->displaySucurales();

    }

    public function usuarios($id_sucursal)
    {
        $this->members();

        if (!$this->session->userdata('id_sucursal_seleccionada')) {
            $this->session->set_userdata('id_sucursal_seleccionada', $id_sucursal);
        }

        $administradorService = $this->getService();

        $usuarios = $administradorService->getUsuariosSucursal($id_sucursal);

        $this->mysmarty->assign('usuarios', $usuarios);
        $this->mysmarty->assign('nombre_sucursal', '');
        $this->mysmarty->assign('id_empresa_seleccionada', $this->session->userdata('id_empresa_seleccionada'));


        $this->displayUsuarios();


    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');

    }


    //---------------------------------------------------acciones-----------------------------------
    public function agregarempresa()
    {
        $this->members();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');

        if ($this->form_validation->run()) {

            $administradorService = $this->getService();

            $administradorService->crearEmpresa($this->input->post('nombre'));

        }

        $this->empresas();
    }

    public function borrarempresa($id_empresa)
    {
        $this->members();

        $administradorService = $this->getService();

        $administradorService->borrarEmpresa($id_empresa);

        redirect('administrador');
    }

    //----------------------------------------------------------------------------------------------

    public function agregarsucursal()
    {
        $this->members();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');

        $this->form_validation->set_rules('direccion', 'Direccion', 'required|trim');

        $this->form_validation->set_rules('ciudad', 'Ciudad', 'required|trim');

        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion'),
            'ciudad' => $this->input->post('nombre'),
            'id_empresa' => $this->session->userdata('id_empresa_seleccionada')
        );


        if ($this->form_validation->run()) {

            $administradorService = $this->getService();

            $administradorService->crearSucursal($datos['nombre'], $datos['direccion'], $datos['ciudad'], $datos['id_empresa']);

        }


        $this->sucursales($datos['id_empresa']);

    }

    public function borrarsucursal($id_sucursal)
    {
        $this->members();

        $id_empresa = $this->session->userdata('id_empresa_seleccionada');

        $administradorService = $this->getService();

        $administradorService->borrarSucursal($id_sucursal);

        redirect('administrador/sucursales/' . $id_empresa);

    }

    //------------------------------------------------------------------------------------------------

    public function agregarusuario()
    {
        $this->members();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');

        $this->form_validation->set_rules('apellido', 'Apellido', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', "Este email ya existe.");

        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'id_sucursal' => $this->session->userdata('id_sucursal_seleccionada')
        );

        if ($this->form_validation->run()) {

            $administradorService = $this->getService();

            $administradorService->registrarUsuarioSucursal($datos['nombre'], $datos['apellido'], 'no-username', $datos['password'], $datos['email'], $datos['id_sucursal']);

        }

        $this->usuarios($datos['id_sucursal']);

    }

    public function borrarusuario($id_usuario)
    {
        $this->members();

        $id_sucursal = $this->session->userdata('id_sucursal_seleccionada');

        $administradorService = $this->getService();

        $administradorService->borrarUsuarioSucursal($id_usuario);

        redirect('administrador/usuarios/' . $id_sucursal);


    }


    //--------------------------------display de las vistas--------------------------------
    private function displayEmpresas()
    {
        $this->assignCommon();
        $this->mysmarty->display('administradorEmpresasPage.tpl');
    }

    private function displaySucurales()
    {
        $this->assignCommon();
        $this->mysmarty->display('administradorSucursalPage.tpl');
    }

    private function displayUsuarios()
    {
        $this->assignCommon();
        $this->mysmarty->display('administradorUsuarioSucursalPage.tpl');
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
        if (validation_errors()) {
            $this->mysmarty->assign('validation_errors', validation_errors());
        } else {
            $this->mysmarty->assign('validation_errors', '');
        }
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
        $administradorService = $this->myservicies->getAdministradorService();

        $administradorService->setAdministrador($this->session->userdata('email'));

        if (!$this->session->userdata('user_fullname')) {
            $this->setFullName($administradorService);
        }

        return $administradorService;
    }


    //seteo el full_username a la sesion
    private function setFullName($administradorService)
    {
        $administrador = $administradorService->getAdministrador();
        $user_fullname = $administrador->getNombre() . " " . $administrador->getApellido();

        $this->session->set_userdata('user_fullname', $user_fullname);

    }

}


?>
