<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_data($table) {
    $this->db->from($table);
    $q = $this->db->get();
    return $q->result_array();
  }

	public function get_data_where($table, $column, $value)
  {
    $this->db->where($column, $value);

    $q = $this->db->get($table);
    return $q->result_array();
  }

	public function get_single_data($table, $column, $value) {
    $this->db->where($column, $value);
    $q = $this->db->get($table);
    if($q->num_rows() > 0) {
      return $q->row();
    } else {
      return null;
    }
  }
}
