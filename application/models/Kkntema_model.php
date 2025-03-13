<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kkntema_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_list() {
    return $this->db->get('pengmas_kkn_tema');
  }

  public function get($where) {
    $this->db->where($where);
    return $this->db->get('pengmas_kkn_tema');
  }

  public function get_limit($limit, $order) {
    $this->db->limit($limit);
    $this->db->order_by('id_pengmas_kkn_tema', $order);
    return $this->db->get('pengmas_kkn_tema');
  }

  public function create($data) {
    $this->db->insert('pengmas_kkn_tema', $data);
  }

  public function update($where, $data) {
    $this->db->where($where);
    $this->db->update('pengmas_kkn_tema', $data);
  }

  public function delete($where) {
    $this->db->where($where);
    $this->db->delete('pengmas_kkn_tema');
  }

}
