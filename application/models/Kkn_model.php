<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kkn_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function data($number, $offset) {
    $this->db->order_by('waktu_mulai DESC');
    return $query = $this->db->get('pengmas_kkn', $number, $offset)->result();
  }

  public function get_list() {
    $this->db->order_by('waktu_mulai DESC');
    return $this->db->get('pengmas_kkn');
  }

  public function get($where) {
    $this->db->where($where);
    return $this->db->get('pengmas_kkn');
  }

  public function get_limit($limit, $order) {
    $this->db->limit($limit);
    $this->db->order_by('id_pengmas_kkn', $order);
    return $this->db->get('pengmas_kkn');
  }

  public function create($data) {
    $this->db->insert('pengmas_kkn', $data);
  }

  public function update($where, $data) {
    $this->db->where($where);
    $this->db->update('pengmas_kkn', $data);
  }

  public function delete($where) {
    $this->db->where($where);
    $this->db->delete('pengmas_kkn');
  }

}
