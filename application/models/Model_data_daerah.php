<?php

class Model_data_daerah extends CI_Model
{

  function tampilkan_data()
  {
    $query = "SELECT regions.id, regions.name, COUNT(person.id) as jumlah_penduduk, SUM(person.income) as jumlah_pendapatan, (SUM(person.income) / COUNT(person.id)) as jumlah_rata_rata
      from regions
      LEFT JOIN person ON regions.id = person.region_id
      GROUP BY regions.name ASC";
      return $this->db->query($query);
  }

  function post()
  {
    $data = array('name' => $this->input->post('name'),
                  'created_by' => $this->input->post('submit'),
				          'created_at' => date('Y-m-d H:i:s')
                  );
    $this->db->insert('regions',$data);
  }
}
