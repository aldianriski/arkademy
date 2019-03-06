<?php

class Model_data_penduduk extends CI_Model
{

  function tampilkan_data()
  {
     $query = "SELECT person.id, person.name as penduduk, regions.name as daerah, person.income
      from person
      INNER JOIN regions ON person.region_id = regions.id
      GROUP BY person.name ASC ";
      return $this->db->query($query);
  }

   function filter_data($id)
  {
     $query = "SELECT person.id, person.name as penduduk, regions.name as daerah, person.income
      from person
      INNER JOIN regions ON person.region_id = regions.id
      WHERE regions.id = $id
      GROUP BY person.name ASC ";
      return $this->db->query($query);
  }

  function post()
  {
    $data = array('name' => $this->input->post('name'),
                  'region_id' => $this->input->post('region_id'),
                  'address' => $this->input->post('address'),
                  'income' => $this->input->post('income'),
                  'created_by' => $this->input->post('submit'),
                  'created_at' => date('Y-m-d H:i:s'));
    $this->db->insert('person',$data);
  }

  function get_id($id)
  {
    $query = "SELECT person.id, person.name, person.region_id, regions.name as daerah,  person.address, person.income, person.created_at,person.created_by FROM person INNER JOIN regions ON person.region_id = regions.id WHERE person.id = $id";
    return $this->db->query($query);
  }

  function edit()
  {
	$data = array('name' => $this->input->post('name'),
                'region_id' => $this->input->post('region_id'),
                'address' => $this->input->post('address'),
                'income' => $this->input->post('income'),       
                'created_by' => $this->input->post('submit'),
                'created_at' => date('Y-m-d H:i:s'));		  
				  
				  
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('person',$data);
  }

  function hapus($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('person');
  }
}
