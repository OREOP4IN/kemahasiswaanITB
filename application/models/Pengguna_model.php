<?php defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Pengguna_model extends CI_Model
{
	var $tabel = "pengguna";
	
	public function simpan($data = array(), $id = 0)
	{
		if(empty($id)){
			$query = $this->db->insert('users', $data);
		}else{
			$this->db->where('id', $id);
			$query = $this->db->update('users', $data);
		}
		$this->insert_id = (empty($id)) ? $this->db->insert_id() : $id;
		return $query;
	}
	public function simpan_profil($data = array(), $id = 0)
	{
		if(empty($id)){
			$query = $this->db->insert('default_profiles', $data);
		}else{
			$this->db->where('id', $id);
			$query = $this->db->update('default_profiles', $data);
		}
		$this->insert_id = (empty($id)) ? $this->db->insert_id() : $id;
		return $query;
	}
	public function update_profil($data = array(), $user_id = 0)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->update('default_profiles', $data);
		$this->insert_id = (empty($user_id)) ? $this->db->insert_id() : $user_id;
		return $query;
	}	

	public function update_users($data = array(), $user_id = 0)
	{
		$this->db->where('id', $user_id);
		$query = $this->db->update('users', $data);
		$this->insert_id = (empty($user_id)) ? $this->db->insert_id() : $user_id;
		return $query;
	}	

	public function update_groupid_users($data = array(), $user_id = 0)
	{
		$this->db->where('id', $user_id);
		$query = $this->db->update('users', $data);
		$this->insert_id = (empty($user_id)) ? $this->db->insert_id() : $user_id;
		return $query;
	}	
	public function getDataUser($where= array(),$result = 'row')
	{
		$this->db->join('role', 'role.role_id = users.group_id');
		$this->db->join('default_profiles', 'default_profiles.user_id = users.id');
		$this->db->where($where);
		$query = $this->db->get('users');

		//$query=$this->db->query('select a.* from users a join role b on a.group_id=b.role_id where '.$where.' or a.no_reg='.$no_reg.'' );

		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}
	public function ambilData($id = 0)
	{
		$this->db->where('id_pengguna', $id);
		$query = $this->db->get($this->tabel);

		return ($query->num_rows() > 0) ? $query->row() : FALSE;
	}

	public function ambilDataBerdasarkan($where= array(),$result = 'row')
	{
		$this->db->join('role', 'role.role_id = users.group_id');
		$this->db->where($where);
		$query = $this->db->get('users');

		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}

	public function ambilDataBerdasarkan2($where= array(),$result = 'row')
	{
		// $this->db->join('role', 'role.role_id = users.group_id');
		$this->db->where($where);
		$query = $this->db->get('users');

		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}

	public function ambilDataBerdasarkanNoReg($where= array(),$result = 'row')
	{
		// $this->db->join('role', 'role.role_id = users.group_id');
		$this->db->where($where);
		$query = $this->db->get('users');

		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}

	public function ambilDataBerdasarkanDefault($where= array(),$result = 'row')
	{
		$this->db->join('role', 'role.role_id = users.group_id');
		$this->db->where($where);
		$query = $this->db->get('users');

		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}

	public function ambilDataIdProfile($where= array(),$result = 'row')
	{
		//$this->db->select('default_profiles.id');
		$this->db->join('users', 'users.id = default_profiles.user_id');
		$this->db->where($where);
		$query = $this->db->get('default_profiles');
		
		// echo $this->db->last_query();
		
		return ($query->num_rows() > 0) ? $query->{$result}() : FALSE;
	}


	public function ambilSemuaData($id=0,$order_by='id_pengguna',$sorted='ASC')
	{
        $this->db->join('prodi as p','p.id_prodi=pengguna.id_prodi');
        if (!empty($id))
        {
            $this->db->where('pengguna.id_prodi',$id);
        }
		$query = $this->db->get($this->tabel);
		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}

	public function hapusData($id_pengguna = 0)
	{
		$this->db->where('id_pengguna', $id_pengguna);
		return $this->db->delete($this->tabel);
	}
    
    public function login_user($username,$password,$id_prodi=0)
	{
		$this->db->where(array('username'=>$username,'password'=>md5($password)));
		$this->db->where_in('role_id',array(9,66));
        $query=$this->db->get("admin_login");
        $data = (($query->num_rows() > 0)? $query->row_array() : FALSE);

        if ($data != FALSE) {
        	$is_organisasi = $this->is_organisasi($username,$password);
        	
        	if ($is_organisasi != FALSE) {
        		
        		$status_blokir = $is_organisasi['blokir'];

        		if ($status_blokir) {
        	
        			return FALSE;
        	
        		}else{
        	
        			return $query->row_array();
        	
        		}

        	}else{
       
        		return $query->row_array();
       
        	}

        }else{
       
        	return FALSE;
       
        }
        
    }

    public function is_organisasi($username,$password)
    {
    	$this->db->where(array('username'=>$username,'password'=>md5($password)));
    	$this->db->join('organisasi_kemahasiswaan','organisasi_kemahasiswaan.id_admin=admin_login.id_admin'); 
    	$query = $this->db->get("admin_login");
    	return ($query->num_rows() > 0)? $query->row_array() : FALSE;
    }
        
    public function periksa($username,$password,$kode_fakultas=0, $id_prodi=0)
	{
		$this->db->where(array('username'=>$username,'password'=>md5($password)));
       	
		if ($kode_fakultas!=0)
        {
           $this->db->join('fakultas as f','f.kode_fakultas=admin_login.kode_fakultas','left');  
        }

        if ($id_prodi!=0)
        {
           $this->db->join('prodi as p','p.id_prodi=admin_login.id_prodi','left') ;
        }
        
        $query=$this->db->get("admin_login");
        
        return ($query->num_rows() > 0)? $query->row_array() : FALSE;
		
	}
    
    public function login_pengguna($id_itb,$role)
	{
		$this->db->where(array('id_itb'=>$id_itb,'role_id'=>$role));
		$s=$this->db->get("pengguna");
		if ($s->num_rows()>0)
		{ 
			$r=$s->row_array();
			return $r;
		}
		else {
			return FALSE;
		}
	}

	public function get_pegawai_aktif_by_ina($ina='')
	{
		$this->db->where('ai3',$ina);
		$this->db->join('t_jabatan','t_pegawai.id_jabatan = t_jabatan.id_jabatan');
		$this->db->join('t_bidang','t_pegawai.id_bidang = t_bidang.id_bidang');
		$s = $this->db->get("t_pegawai");

		if ($s->num_rows()>0)
		{ 
			return $s->row();
		}
		else {
			return FALSE;
		}

	}
}
