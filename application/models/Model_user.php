<?php

/**
 *
 */
class Model_user extends CI_Model
{

  function login($data)
  {
    $query = $this->db->get_where('users',$data);
    return $query;
  }
  function tampilkan_data()
  {
    return $this->db->get('users');
  }

  function get_user($id)
  {
    $param = array('id'=>$id);
    return $this->db->get_where('users',$param);
  }
}
