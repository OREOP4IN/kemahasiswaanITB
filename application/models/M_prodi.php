<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_prodi extends CI_Model
{
    public $prodi = 'prodi';

    function __construct()
    {
        parent::__construct();
    }
    
    public function getPenggunaDenganID($pagi=0,$id_prodi=0,$cari=0)
    {
        if (!empty($cari))
        {
            $this->db->like('nip',$cari);
            $this->db->or_like('nama',$cari);
            $this->db->where('pengguna.id_prodi',$id_prodi);
        }
        $this->db->limit('5',$pagi); 
        $this->db->where('pengguna.id_prodi',$id_prodi);
        $this->db->join('prodi as p','p.id_prodi=pengguna.id_prodi','left'); 
        $query=$this->db->get('pengguna');
        return ($query->num_rows()>0)?$query->result_array():FALSE;
    }

    public function jml_mhs_prodi($id_prodi=0) {

        //$this->db->limit('5',$pagi); 
        // $this->db->where('pengguna.id_prodi',$id_prodi);
        // $this->db->join('prodi as p','p.id_prodi=pengguna.id_prodi','left'); 
        return $this->db->count_all_results('pengguna');
    }
    
    
    public function ambilDataPenghargaanDngnUser($user_id = 0, $status = 0, $orderby = 'p.id_penghargaan', $sortd ='asc')

	{
		$this->db->select('p.*,lp.original_name,lp.ekstensi,lp.original_name,det.*,ek.*,ling.*,usr.*,sp.status_name')
		->from('penghargaan as p');
		$this->db->join('lampiran_penghargaan as lp','p.id_penghargaan = lp.id_penghargaan','left');
		$this->db->join('detail as det','det.id_detail=p.id_detail','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=p.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=p.no_lingkup','left');
		$this->db->join('pengguna as usr','p.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = p.id_status','left');
		$this->db->order_by($orderby, $sortd);

		
		if(!empty($user_id)){
			$this->db->where('p.id_pengguna',$user_id);
		}

		
		if(!empty($status)){
			$this->db->where('p.id_status',$status);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}
    
    public function jumlahPenghargaanDenganUser($id_user, $id_status = 1)
    {
        $this->db->where('id_pengguna',$id_user);
        $this->db->where('id_status',$id_status);
        return $this->db->count_all_results('penghargaan');
    }
    
    public function ambilDataOrganisasiDngnUser($user_id = 0, $status = 0, $orderby = 'o.id_organisasi', $sortd ='asc')

	{
		$this->db->select('o.*,lp.original_name,lp.ekstensi,lp.original_name,ek.*,ling.*,usr.*,sp.status_name')
		->from('organisasi as o');
		$this->db->join('lampiran_penghargaan as lp','o.id_organisasi = lp.id_organisasi','left');
        $this->db->join('ekuivalensi as ek','ek.id_ekui=o.id_ekui','left');
        $this->db->join('lingkup_tingkat as ling','ling.no_lingkup=o.no_lingkup','left');
		$this->db->join('pengguna as usr','o.id_pengguna = usr.id_pengguna','left');
		$this->db->join('status_penghargaan as sp','sp.id_status = o.id_status','left');
		$this->db->order_by($orderby, $sortd);

		
		if(!empty($user_id)){
			$this->db->where('o.id_pengguna',$user_id);
		}
		
		if(!empty($status)){
			$this->db->where('o.id_status',$status);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
	}
    
    public function jumlahOrganisasiDenganUser($id_user, $id_status=1)
    {
        $this->db->where('id_pengguna',$id_user);
        $this->db->where('id_status',$id_status);
        return $this->db->count_all_results('organisasi');
    }
	 public function mhs_where_prodi($id_prodi=0)
    {
        $this->db->where('pengguna.id_prodi',$id_prodi);
        $this->db->join('prodi as p','p.id_prodi=pengguna.id_prodi','left');
        return $this->db->count_all_results('pengguna');
    }
    public function getDataMhsProdi($id_prodi=0)
    {
        
    	$data = $this->db->query('select * from pengguna');
    	if(!empty($id_prodi)){
    		$data = $this->db->where('id_prodi',$id_prodi);
    	}
    	return $data->result_array();
    }

    public function getDataProdi($limit = 10, $offset = 0, $cari=0, $id_prodi=0){

        if (!empty($cari))
        {
            $this->db->like('id_prodi',$cari);
            $this->db->or_like('nama_prodi',$cari);
            $this->db->where('id_prodi',$id_prodi);
        }
        $this->db->select('prodi.*');
        $this->db->limit($offset,$limit);
	   
       $query = $this->db->get('prodi');
       return $query->result();
	}
	public function jml_prodi() {
	    return $this->db->count_all_results('prodi');
	}
    // public function jumlah_penghargaan_where_user($id_user)
    // {
    //     $this->db->where('id_pengguna',$id_user);
    //     return $this->db->count_all_results('penghargaan');
    // }
}
