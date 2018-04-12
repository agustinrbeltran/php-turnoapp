<?php

class Model_administrador extends CI_Model
{
  //----------------------------------------------------metodos de login---------------------------------------------------------
  public function can_log_in()
  {
    $this->load->library('myservicies');
    $loginSignupService = $this->myservicies->getLoginSignupService();

    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    return $loginSignupService->can_log_in($email,$password);
  }
  
  //------------------------------------------------------metodos de signup para administradores--------------------------------------------------------
  public function add_temp_user($key){

    $data = array(
      'nombre'=> $this->input->post('nombre'),
      'apellido'=> $this->input->post('apellido'),
      'email'=> $this->input->post('email'),
      'password'=> md5($this->input->post('password')),
      'key'=> $key
    );

    $query = $this->db->insert('temp_users',$data);

    if ($query){
      return true;
    }
    else{
      return false;
    }

  }

  public function is_key_valid($key){

    $this->db->where('key',$key);
    $query = $this->db->get('temp_users');

    if ($query->num_rows() == 1){

      return true;

    }
    else return false;

  }

  public function add_user($key)
  {
    $this->db->where ('key',$key);
    $temp_user = $this->db->get('temp_users');

    if ($temp_user){
      $row = $temp_user->row();

      $this->load->library('myservicies');
      $loginSignupService = $this->myservicies->getLoginSignupService();

      //cambiar
      $did_add_user = $loginSignupService->registrarAdministrador($row->nombre,$row->apellido,$row->email,$row->password );

    }

    if ($did_add_user){

      $this->db->where ('key',$key);
      $this->db->delete ('temp_users');

      return $temp_user->row()->email;
    }
    else return false;

  }

}
