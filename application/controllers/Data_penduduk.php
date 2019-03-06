<?php

class Data_penduduk extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Model_data_penduduk');
    check_session();
  }
  
  function index()
  {
    $data['title'] = 'Manajemen Data Penduduk';
    $this->load->model('Model_data_daerah');
    $data['daerah'] = $this->Model_data_daerah->tampilkan_data()->result();
    $data['record'] = $this->Model_data_penduduk->tampilkan_data();
    $this->template->load('template','data_penduduk/index',$data);
  }

  function filter(){
    $data['title'] = 'Manajemen Data Penduduk';
    $this->load->model('Model_data_daerah');
    $id = $this->uri->segment(3);
    $data['daerah'] = $this->Model_data_daerah->tampilkan_data()->result();
    $data['record'] = $this->Model_data_penduduk->filter_data($id);
    $this->template->load('template','data_penduduk/index',$data);
  }

  function post()
  {
    
      $this->Model_data_penduduk->post();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('data_penduduk');
  }

function get_id(){
   echo json_encode($this->Model_data_penduduk->get_id($_POST['id'])->row_array());
}

  function edit()
  {
      $this->Model_data_penduduk->edit();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('data_penduduk');
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->Model_data_penduduk->hapus($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect ('data_penduduk');
  }

  function validate() {
    $data = array('success' => false, 'messages' => array());
    $this->form_validation->set_rules('name','Nama Penduduk', 'required');
    $this->form_validation->set_rules('income','Gaji', 'required');
    $this->form_validation->set_rules('region_id','Daerah', 'required');
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
