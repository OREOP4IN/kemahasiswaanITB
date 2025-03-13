<?php 

	/**
	* 
	*/
	class M_kegiatanModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


	public function getAllDataKegiatan_disetujui() {

        $query = $this->db->query('SELECT COUNT(tgl) as jum, tgl  FROM (SELECT a.id_kegiatan, ba.waktu_kegiatan_event as tgl FROM `kegiatan_mahasiswa` as a 
                                                    INNER JOIN kegiatan_mahasiswa_event as ba 
                                                    ON a.id_kegiatan = ba.id_kegiatan
                                                    INNER JOIN status_perizinan as sp 
                                                    ON a.id_kegiatan = sp.id_kegiatan
                                                    WHERE sp.status_name = "Disetujui" OR sp.status_name = "Selesai" 
                                                    OR sp.status_name ="Laporan Disetujui" OR sp.status_name ="Laporan Dikembalikan"
                        							OR sp.status_name ="Laporan Diajukan" OR sp.status_name ="Laporan Direvisi"
                                                    UNION
                                                    SELECT a.id_kegiatan, b.waktu_kegiatan_event_akhir as tgl FROM `kegiatan_mahasiswa` as a 
                                                    INNER JOIN kegiatan_mahasiswa_event as b 
                                                    ON a.id_kegiatan = b.id_kegiatan
                                                    INNER JOIN status_perizinan as sp 
                                                    ON a.id_kegiatan = sp.id_kegiatan
                                                    WHERE sp.status_name = "Disetujui" OR sp.status_name = "Selesai" 
                                                    OR sp.status_name ="Laporan Disetujui" OR sp.status_name ="Laporan Dikembalikan"
                        							OR sp.status_name ="Laporan Diajukan" OR sp.status_name ="Laporan Direvisi"
                                      			) as aa GROUP BY tgl ORDER BY tgl DESC');
        
        return $query->result();
    
	}

	public function getKegiatanByTgl($tgl = '0000-00-00',$limit = 0)
	 {
        
        $tgl = strip_tags($tgl);
       // $tgl = ($tgl);

	 	$this->db->distinct();
        $this->db->select('*');
        $this->db->from('kegiatan_mahasiswa');
        $this->db->join('kegiatan_mahasiswa_event', 'kegiatan_mahasiswa.id_kegiatan = kegiatan_mahasiswa_event.id_kegiatan');
        $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
        $this->db->join('kampus', 'kegiatan_mahasiswa_event.id_venue_list_kampus=kampus.id','left');
        $this->db->where("(waktu_kegiatan_event='".$tgl."' OR waktu_kegiatan_event_akhir='".$tgl."') AND (status_name = 'Disetujui' OR status_name = 'Selesai' 
                         OR status_name ='Laporan Disetujui' OR status_name ='Laporan Dikembalikan' OR status_name ='Laporan Diajukan' OR status_name ='Laporan Direvisi' OR kegiatan_mahasiswa_event.status_verif = 'Diterima') and publish not in ('0')");
        $this->db->group_by('kegiatan_mahasiswa.id_kegiatan');
        $this->db->order_by('tanggal','desc');
       	
       	if ($limit != 0) {
       		$this->db->limit($limit);
       	}

        return $this->db->get()->result();
    
	 } 

     public function getKegiatanByTglFilter($tgl = '0000-00-00',$kampus='',$limit = 0)
     {
        
        $tgl = strip_tags($tgl);
       // $tgl = ($tgl);

        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('kegiatan_mahasiswa');
        $this->db->join('kegiatan_mahasiswa_event', 'kegiatan_mahasiswa.id_kegiatan = kegiatan_mahasiswa_event.id_kegiatan');
        $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
        $this->db->join('kampus', 'kegiatan_mahasiswa_event.id_venue_list_kampus=kampus.id','left');

             $this->db->where('id_venue_list_kampus', $kampus);
 
        $this->db->where("(waktu_kegiatan_event='".$tgl."' OR waktu_kegiatan_event_akhir='".$tgl."') AND (status_name = 'Disetujui' OR status_name = 'Selesai' 
                         OR status_name ='Laporan Disetujui' OR status_name ='Laporan Dikembalikan' OR status_name ='Laporan Diajukan' OR status_name ='Laporan Direvisi' OR kegiatan_mahasiswa_event.status_verif = 'Diterima') and publish not in ('0')");
        $this->db->group_by('kegiatan_mahasiswa.id_kegiatan');
        $this->db->order_by('tanggal','desc');
        
        if ($limit != 0) {
            $this->db->limit($limit);
        }

        return $this->db->get()->result();
    
     } 

	  public function getRincianKegiatan($id_kegiatan)
    {
       // Diterima
        $this->db->select('*');
       // $this->db->where_not_in('status_verif', array('Ditolak'));
       // $this->db->where('status_verif !=' , 'Ditolak');
        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->join('kampus', 'kegiatan_mahasiswa_event.id_venue_list_kampus=kampus.id','left');
        $this->db->from('kegiatan_mahasiswa_event');
	    //$this->db->where('publish <> "0"');
        return $this->db->get()->result();
    }

    public function getKegiatan($id_kegiatan=0)
	 {
	 	
        $this->db->select('*');
        $this->db->from('kegiatan_mahasiswa');
 		$this->db->where('id_kegiatan', $id_kegiatan);
       
        return $this->db->get()->row();
    
	 } 

}


 ?>