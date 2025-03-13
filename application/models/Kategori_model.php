<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_list() {
    return $this->db->get('pengmas_kategori');
  }

  public function get_name($id) {
    $this->db->where('id_kategori', $id);
    $result = $this->db->get('pengmas_kategori')->result();
    return $result[0]->nama_kategori;
  }

  public function create($data) {
    $this->db->insert('pengmas_kategori', $data);
  }

  public function delete($where) {
    $this->db->where($where);
    $this->db->delete('pengmas_kategori');
  }

}
