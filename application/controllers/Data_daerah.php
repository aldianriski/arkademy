<?php

class Data_daerah extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Model_data_daerah');
    check_session();
  }
  
  function index()
  {
    $data['title'] = 'Manajemen Data Daerah';
    $data['record'] = $this->Model_data_daerah->tampilkan_data();
    $this->template->load('template','data_daerah/index',$data);
  }

  function post()
  {
    
      $this->Model_data_daerah->post();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('data_daerah');
  }

function get_id(){
   echo json_encode($this->Model_data_daerah->get_id($_POST['id'])->row_array());
}

  function edit()
  {
      $this->Model_data_daerah->edit();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('data_daerah');
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->Model_data_daerah->hapus($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect ('data_daerah');
  }

  function validate() {
    $data = array('success' => false, 'messages' => array());
    $this->form_validation->set_rules('name','Nama Daerah', 'required');
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
if ($this->form_validation->run()) {
    
    foreach ($_POST as $key => $value) {
      $data['messages'][$key] = form_error($key);
    }

     $data['success'] = true;
   }
   else {
    foreach ($_POST as $key => $value) {
      $data['messages'][$key] = form_error($key);
    }
   }
   echo json_encode($data);
}


}
