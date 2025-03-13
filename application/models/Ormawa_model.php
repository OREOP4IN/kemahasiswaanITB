<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Ormawa_model extends CI_Model {

    public function __construct() {
      parent::__construct();
    }

    public function get_list() {
      return $this->db->get('organisasi_kemahasiswaan');
    }

    public function get_name($id) {
      $this->db->where('id_org_kemahasiswaan', $id);
      $result = $this->db->get('organisasi_kemahasiswaan')->result();
      return $result[0]->nama_organisasi;
    }

  }

 ?>
