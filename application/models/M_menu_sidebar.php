<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class M_menu_sidebar extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}

		public function getMenu(){
			$this->db->select('nama,controller,parent,menu.id,icon');
			$this->db->join('menu_role','menu.id = menu_role.menu_id');
			$this->db->where('role_id',$this->session->userdata('group_id'));
			$this->db->where('parent is null');
            $query = $this->db->get('menu');
            
            $ret = array();
           
            $x=0;
            foreach ($query->result() as $r) {
            $this->db->where('parent is not null');
				$this->db->where('parent',$r->id);
            	$child = $this->db->get('menu');
            	$ret[$x]['menu'] = $r;
            	$ret[$x]['child'] = $child->result();
            	$x++;
            }
            return $ret;
		}

			public function getUsers($username)
		{
			$this->db->where('username',$username);
            $query = $this->db->get('t_bansos_user');

            return $query->row();
		}

				
	}
