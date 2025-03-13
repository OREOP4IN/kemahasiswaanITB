<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
	var $tabel = "organisasi";

	public function simpan($data = array(), $id = 0)
	{
		if(empty($id)){
			$query = $this->db->insert($this->tabel, $data);
		}else{
			$this->db->where('id_organisasi', $id);
			$query = $this->db->update($this->tabel, $data);
		}
		$this->insert_id = (empty($id)) ? $this->db->insert_id() : $id;
		return $query;
	}
    

    public function ambilDataOrganisasiDngnUser($pagi=0,$user_id = 0, $limit = 10, $offset = 0, $status = 0, $orderby = 'o.id_organisasi', $sortd ='asc')

	{
		$this->db->select('o.*,lp.original_name,lp.ekstensi,lp.original_name,ek.*,ling.*,usr.*,sp.status_name')
		->from($this->tabel.' as o');
		$this->db->join('lampiran_penghargaan as lp','o.id_organisasi = lp.id_organisasi','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=o.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=o.no_lingkup','left');
		$this->db->join('pengguna as usr','o.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = o.id_status','left');
		$this->db->order_by($orderby, $sortd);

		// Filter berdasarkan data permohonan milik pengguna spesifik
		if(!empty($user_id)){
			$this->db->where('o.id_pengguna',$user_id);
		}

		// Filter berdasarkan status permohonan
		if(!empty($status)){
			$this->db->where('o.id_status',$status);
		}
        $this->db->limit($limit, $offset,$pagi);
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}
	
	public function getUserOrg($limit = 10, $offset = 0)
    {
        $this->db->join('role', 'role.role_id=admin_login.role_id');
        $this->db->where('admin_login.role_id', 6);
        $this->db->limit($limit,$offset);

        $query=$this->db->get('admin_login');
        return $query->result();
    }

    function tipeOrg(){
			return $this->db->get('tipe_organisasi');
	}

	public function getAllOrganisasi($pagi=0, $limit = 10, $offset = 0, $status = 0, $orderby = 'o.id_organisasi', $sortd ='asc')

	{
		$this->db->select('o.*,lp.original_name,lp.ekstensi,lp.original_name,ek.*,ling.*,usr.*,sp.status_name')
		->from($this->tabel.' as o');
		$this->db->join('lampiran_penghargaan as lp','o.id_organisasi = lp.id_organisasi','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=o.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=o.no_lingkup','left');
		$this->db->join('pengguna as usr','o.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = o.id_status','left');
		$this->db->order_by($orderby, $sortd);

		// Filter berdasarkan status permohonan
		if(!empty($status)){
			$this->db->where('o.id_status',$status);
		}
        $this->db->limit($limit, $offset,$pagi);
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}
    
    public function ambilDataOrganisasiDngnID($id_organisasi = 0, $status = 0, $orderby = 'o.id_organisasi', $sortd ='asc')

	{
		$this->db->select('o.*,lp.original_name,lp.ekstensi,lp.original_name,ek.*,ling.*,usr.*,sp.status_name')
		->from($this->tabel.' as o');
		$this->db->join('lampiran_penghargaan as lp','o.id_organisasi = lp.id_organisasi','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=o.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=o.no_lingkup','left');
		$this->db->join('pengguna as usr','o.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = o.id_status','left');
		$this->db->order_by($orderby, $sortd);

		if(!empty($id_organisasi)){
			$this->db->where('o.id_organisasi',$id_organisasi);
		}

		if(!empty($status)){
			$this->db->where('o.id_status',$status);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
	}
    
    
    public function ambilDataOrganisasiDenganID($id_organisasi = 0, $status = 0, $orderby = 'o.id_organisasi', $sortd ='asc')

	{
		$this->db->select('o.*,lp.original_name,lp.ekstensi,lp.original_name,ek.*,ling.*,usr.*,sp.status_name')
		->from($this->tabel.' as o');
		$this->db->join('lampiran_penghargaan as lp','o.id_organisasi = lp.id_organisasi','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=o.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=o.no_lingkup','left');
		$this->db->join('pengguna as usr','o.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = o.id_status','left');
		$this->db->order_by($orderby, $sortd);

		if(!empty($id_organisasi)){
			$this->db->where('o.id_organisasi',$id_organisasi);
		}

		if(!empty($status)){
			$this->db->where('o.id_status',$status);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}
    
    public function ambilSemuaDataKomentar($id_organisasi = 0)
	{
		$this->db->join('pengguna as usr','usr.id_pengguna = komentar_penghargaan.id_pengguna','left');
		$this->db->where('id_organisasi', $id_organisasi);
		$query = $this->db->get("komentar_penghargaan");

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
    
    public function ambilSemuaDataLampiran($id_organisasi = 0)
	{
		$this->db->where('id_organisasi', $id_organisasi);
		$query = $this->db->get("lampiran_permohonan");

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}

	public function updateStatusPenghargaan($id_organisasi = 0, $data='')
	{
		$this->db->where('id_organisasi', $id_organisasi);
		return $this->db->update($this->tabel, $data);
	}
    
    public function ambilData($nama, $id_pengguna)
	{
		$this->db->where(array('nama_organisasi'=>$nama, 'id_pengguna'=>$id_pengguna));
		$query = $this->db->get($this->tabel);

		return ($query->num_rows() > 0) ? $query->row() : FALSE;
	}
    
    public function updateStatusOrganisasi($id_organisasi = 0, $data='')
	{
		$this->db->where('id_organisasi', $id_organisasi);
		return $this->db->update($this->tabel, $data);
	}
	public function hapus_org($id_org)
	{
		$this->db->where('id_organisasi',$id_org);
		$this->db->delete('organisasi');
	}
    
    public function jumlah_org_where_user($id_user='')
    {
        $this->db->where('id_pengguna',$id_user);
        return $this->db->count_all_results('organisasi');
    }
    
     public function jumlah_organisasi($tipeorg=''){
		$query=$this->db->query("select * from organisasi_kemahasiswaan where $tipeorg order by nama_organisasi");
		 return $query->result();
		 
		}
		
		//FUNCTION GENERAL

    //fungsi delete general

   public function hapus($column_hapus,$id_hapus,$table){
	  $this->db->where($column_hapus,$id_hapus);
      $this->db->delete($table);
	  return $this->db->affected_rows(); 
	 }
	 
   //Fungsi update general
   public function update($id,$column,$field,$table){
	   $this->db->where($column,$id);
       $this->db->update($table, $field);
       return $this->db->affected_rows();
  }
   public function simpanData($table,$data) {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    
   }
   
   //asesment UKM
   public function get_jawaban_standar1($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar1 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar3($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar3 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar5($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar5 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar7($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar7 where id_admin='.$id_admin.'');
	   return $query->row();
   }
   public function get_jawaban_standar2($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar2 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar4($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar4 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar6($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar6 where id_admin='.$id_admin.'');
	   return $query->row();
   }
    public function get_jawaban_standar8($id_admin){
	   $query=$this->db->query('select * from asesment_ukm_standar8 where id_admin='.$id_admin.'');
	   return $query->row();
   }
   
   //assesment ukm hasil
   public function get_ukm(){
	   $query=$this->db->query('SELECT * FROM `organisasi_kemahasiswaan` where id_tipe_org=1 and status_aktif=1 order by singkatan asc');
	   return $query->result();
   }
   
    public function get_profile_ukm($id_admin){
	   $query=$this->db->query('SELECT * FROM `organisasi_kemahasiswaan` where id_admin='.$id_admin.'');
	   return $query->row();
   }
   
   public function get_ketua($id_org_kemahasiswaan){
	   $query=$this->db->query('SELECT * FROM `pengurus_ukm` where id_org_kemahasiswaan='.$id_org_kemahasiswaan.' order by id_ukm desc');
	   return $query->row();
   }
   
   
}