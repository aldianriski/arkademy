<?php

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_session();
  }

  function index()
  {
	  
    $data['title'] = 'Sistem Sensus Penduduk';
    $this->template->load('template','welcome_dashboard',$data );
  }
}
