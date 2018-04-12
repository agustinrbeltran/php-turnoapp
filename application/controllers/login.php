<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller
{

  public function index()
  {
    $this->displayLogin();

  }

  public function login_validation()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

    $this->form_validation->set_rules('password', 'Password', 'required|md5');

    if ($this->form_validation->run()) {

      $data = array('email' => $this->input->post('email'), 'is_logged_in' => 1);

      $this->session->set_userdata($data);

      if ($this->is_Administrador($data['email'])){
        redirect('administrador');

      }
      else{
        redirect('usuario');
      }

    } else {

      $this->displayLogin();
    }

  }



  public function validate_credentials()
  {
    $this->load->model('model_administrador');

    if ($this->model_administrador->can_log_in()) {
      return true;
    } else {

      $this->form_validation->set_message('validate_credentials', 'Username o password incorrectos!');
      return false;
    }

  }

  private function displayLogin()
  {

    $this->mysmarty->assign('root',$this->getRootDirectory() );

    if (validation_errors() ){
      $this->mysmarty->assign('validation_errors',validation_errors());
    }
    else
    {
      $this->mysmarty->assign('validation_errors','');

    }

    $this->mysmarty->display('loginPage.tpl');
  }

  public function getRootDirectory()
  {
    return 'http://'.$_SERVER['HTTP_HOST'].'/webapp';
  }

  public function is_Administrador($email){

    $this->load->library('myservicies');
    $loginService = $this->myservicies->getLoginSignupService();

    return $loginService->is_Administrador($email);

  }

}


?>
