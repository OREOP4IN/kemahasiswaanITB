<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function data($number, $offset) {
    $this->db->order_by('waktu_mulai DESC');
    return $query = $this->db->get('pengmas_kegiatan', $number, $offset)->result();
  }

  public function get_list() {
    $this->db->order_by('waktu_mulai DESC');
    return $this->db->get('pengmas_kegiatan');
  }

  public function get($where) {
    $this->db->where($where);
    return $this->db->get('pengmas_kegiatan');
  }

  public function get_limit($limit, $order) {
    $this->db->limit($limit);
    $this->db->order_by('id_kegiatan', $order);
    return $this->db->get('pengmas_kegiatan');
  }

  public function create($data) {
    $this->db->insert('pengmas_kegiatan', $data);
  }

  public function update($where, $data) {
    $this->db->where($where);
    $this->db->update('pengmas_kegiatan', $data);
  }

  public function delete($where) {
    $this->db->where($where);
    $this->db->delete('pengmas_kegiatan');
  }

}
