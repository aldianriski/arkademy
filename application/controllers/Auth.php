<?php

class Auth extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('model_user');
  }
  function login()
  {
    if (isset($_POST['submit'])) {
            $data = array( 'email' => $this->input->post('email'),
					                 'password' => md5($this->input->post('password'))
					 );
	    $this->load->model('model_user');			 
      $hasil = $this->model_user->login($data);
      if ($hasil->num_rows() == 1) {
		        foreach ($hasil->result() as $sess) {
                  $user = $sess->email; 
                  $parts = explode("@",$user); 
                  $username = $parts[0]; 
                  $sess_data['username'] = $username;
		              $sess_data['status_login'] = 'oke';
		              $sess_data['email'] = $sess->email;
                  $sess_data['created_by'] = $sess->id;
		              $this->session->set_userdata($sess_data);
                  redirect('dashboard');
		}
  } 
	  else {
            $this->session->set_flashdata('message', 'Email atau Password Salah !!!');
            $this->session->set_flashdata('form', 'is-invalid');
            redirect('auth/login');
      }
    } 
	else {
            check_session_login();
            $this->load->view('form_login');
    }
  }
  function logout()
  {
            $this->session->sess_destroy();
            redirect('auth/login');
  }
}

