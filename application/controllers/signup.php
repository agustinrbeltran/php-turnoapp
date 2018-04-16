<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Signup extends CI_Controller
{

    public function index()
    {
        $this->displaySignup();
    }


    public function signup_validation()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');

        $this->form_validation->set_rules('apellido', 'Apellido', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', "Este email ya existe.");

        if ($this->form_validation->run()) {

            $key = md5(uniqid());

            $this->load->library('email', array('mailtype' => 'html'));

            $this->load->model('model_administrador');

            $this->email->from('agustin.rbeltran@gmail.com', 'Agustin');

            $this->email->to($this->input->post('email'));

            $this->email->subject("Confirma tu cuenta");

            $message = "<p> Gracias por registrarte </p>";
            $message .= "<p> <a href='" . base_url() . "signup/register_user/$key' >Cliquea aqui</a> para confirmar tu registro </p>";

            $this->email->message($message);

            if ($this->model_administrador->add_temp_user($key)) {

                if ($this->email->send()) {
                    $this->displaySuccess();
                } else
                    echo "No se pudo enviar el email.";
            } else
                echo "No se pudo agregar el usuario al la base de datos";


        } else {
            $this->displaySignup();
        }

    }


    public function register_user($key)
    {

        $this->load->model('model_administrador');

        if ($this->model_administrador->is_key_valid($key)) {

            if ($newemail = $this->model_administrador->add_user($key)) {

                $data = array(
                    'email' => $newemail,
                    'is_logged_in' => 1
                );

                $this->session->set_userdata($data);

                redirect('administrador');
            } else {
                echo "Failed to add user, please try again";
            }

            echo "valid key";
        } else {
            echo "invelid key";
        }

    }


    public function displaySignup()
    {
        $this->mysmarty->assign('root', $this->getRootDirectory());

        if (validation_errors()) {
            $this->mysmarty->assign('validation_errors', validation_errors());
        } else {
            $this->mysmarty->assign('validation_errors', '');

        }

        $this->mysmarty->display('registerPage.tpl');
    }

    public function displaySuccess()
    {
        $this->mysmarty->assign('root', $this->getRootDirectory());


        $this->mysmarty->display('registerSucceedPage.tpl');
    }

    public function getRootDirectory()
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/webapp';
    }

}


?>
