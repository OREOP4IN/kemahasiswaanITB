<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model
{
    

    function __construct()
    {
        parent::__construct();
    }
	
	
public function penghargaan($status,$fakultas){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_penghargaan.created) BETWEEN "2015-06-23" AND CURRENT_DATE');
	
     return $query->row_array();
 }	
 
public function caripenghargaan($status,$fakultas,$tgl_mulai,$tgl_akhir){
	//$tgl_mulai=$this->input->post('tgl_mulai');
	//$tgl_akhir=$this->input->post('tgl_akhir');
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_penghargaan.created) BETWEEN "'.$tgl_mulai.'" AND "'.$tgl_akhir.'"');
	
     return $query->row_array();
 }
 
 public function ksw($status,$fakultas){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_ksw.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_ksw on default_prestasi_mahasiswa_ksw.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_ksw.created) BETWEEN "2015-06-23" AND CURRENT_DATE');
	
     return $query->row_array();
 }
 
public function cariksw($status,$fakultas,$tgl_mulai,$tgl_akhir){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_ksw.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_ksw on default_prestasi_mahasiswa_ksw.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_ksw.created) BETWEEN "'.$tgl_mulai.'" AND "'.$tgl_akhir.'"');
	
     return $query->row_array();
 }
public function organisasi($status,$fakultas){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_organisasi.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_organisasi on default_prestasi_mahasiswa_organisasi.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_organisasi.created) BETWEEN "2015-06-23" AND CURRENT_DATE');
	
     return $query->row_array();
 }

public function cariorganisasi($status,$fakultas,$tgl_mulai,$tgl_akhir){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_organisasi.created_by)as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_organisasi on default_prestasi_mahasiswa_organisasi.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and DATE(default_prestasi_mahasiswa_organisasi.created) BETWEEN "'.$tgl_mulai.'" AND "'.$tgl_akhir.'"');
	
     return $query->row_array();
 } 
 
 //halaman depan
 
//penghargaan berdasarkan peringkat
 
 
 //tanggal mulai dan akhir
 /*public function peringkatpenghargaan($status,$fakultas,$level,$peringkat){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id 
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan ='.$peringkat.' and((default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal BETWEEN "2017/01/01" and "2017/12/31")
						    or (default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2017/01/01" and "2017/12/31"))');
	
     return $query->row_array();
 } */
 
  public function peringkatpenghargaan($status,$fakultas,$level,$peringkat){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan ='.$peringkat.' and default_prestasi_mahasiswa_penghargaan.is_verifikasi in (1,0) and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN date(sysdate() - INTERVAL 1 YEAR) and date(sysdate())');
// BETWEEN date(sysdate() - INTERVAL 1 YEAR) and date(sysdate())	
     return $query->row_array();
 }

 public function peringkatpenghargaankepesertaan($status,$fakultas){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ("3","2","1")  and default_prestasi_mahasiswa_penghargaan.is_multifakultas = 0 and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }

 public function peringkatpenghargaankepesertaanmultifakultas($status){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ("3","2","1")  and default_prestasi_mahasiswa_penghargaan.is_multifakultas = 1 and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }

  public function peringkatpenghargaannonmultifakultas($status,$fakultas,$level,$peringkat){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan ='.$peringkat.' and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and default_prestasi_mahasiswa_penghargaan.is_multifakultas = 0 and 
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }

 public function kepesertaantingkatfakultas($status,$fakultas,$level){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and default_prestasi_mahasiswa_penghargaan.is_multifakultas = 0 and 
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }

 public function kepesertaantingkatfakultastahun($status,$fakultas,$level,$tahun=2019){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and prodi.kode_fakultas='.$fakultas.'  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 
	 	 and YEAR(default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir) = "'.$tahun.'"');
	
     return $query->row_array();
 }

 public function kepesertaantingkatfakultasdetail($status,$fakultas,$level){
	 $query=$this->db->query(' select default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal as tanggal_awal,default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir as tanggal_akhir,default_prestasi_mahasiswa_penghargaan.penghargaan_level as level,fakultas.nama_fakultas as nama_fakultas,default_prestasi_mahasiswa_penghargaan.id as id,default_prestasi_mahasiswa_penghargaan.foto_kegiatan as foto,default_profiles.nim as nim,default_profiles.display_name as nama,default_prestasi_mahasiswa_penghargaan.penghargaan_event as nama_event,default_prestasi_mahasiswa_penghargaan.penghargaan_nama as nama_penghargaan,default_prestasi_mahasiswa_penghargaan.penghargaan_penyelenggara as penyelenggara,default_prestasi_mahasiswa_penghargaan.penghargaan_tempat as tempat,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_equivalensi as equivalensi,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan as juara from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id join fakultas on prodi.kode_fakultas=fakultas.kode_fakultas
	 where default_prestasi_mahasiswa_penghargaan.penghargaan_status=1 and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31" and is_multifakultas = 0 and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')');
	
	return $query->result();
 }

  public function kepesertaantingkatfakultasdetail2($status,$fakultas,$level){
	 $query=$this->db->query(' select default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal as tanggal_awal,default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir as tanggal_akhir,default_prestasi_mahasiswa_penghargaan.penghargaan_level as level,fakultas.nama_fakultas as nama_fakultas,default_prestasi_mahasiswa_penghargaan.id as id,default_prestasi_mahasiswa_penghargaan.foto_kegiatan as foto,default_profiles.nim as nim,default_profiles.display_name as nama,default_prestasi_mahasiswa_penghargaan.penghargaan_event as nama_event,default_prestasi_mahasiswa_penghargaan.penghargaan_nama as nama_penghargaan,default_prestasi_mahasiswa_penghargaan.penghargaan_penyelenggara as penyelenggara,default_prestasi_mahasiswa_penghargaan.penghargaan_tempat as tempat,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_equivalensi as equivalensi,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan as juara from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id join fakultas on prodi.kode_fakultas=fakultas.kode_fakultas
	 where default_prestasi_mahasiswa_penghargaan.penghargaan_status=1 and users.group_id=2 and  default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31" and is_multifakultas = 1 and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')');
	
	return $query->result();
 }


  public function peringkatpenghargaanmultifakultas($status,$level){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where '.$status.' and users.group_id=2 and users.group_id=2  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and default_prestasi_mahasiswa_penghargaan.is_multifakultas = 1 and 
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }



 //tanggal mulai dan akhir 
/*  public function peringkatpenghargaanfakultas2($fakultas,$level,$peringkat){
	$query=$this->db->query(' select default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal as tanggal_awal,default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir as tanggal_akhir,default_prestasi_mahasiswa_penghargaan.penghargaan_level as level,fakultas.nama_fakultas as nama_fakultas,default_prestasi_mahasiswa_penghargaan.id as id,default_prestasi_mahasiswa_penghargaan.foto_kegiatan as foto,default_profiles.nim as nim,default_profiles.display_name as nama,default_prestasi_mahasiswa_penghargaan.penghargaan_event as nama_event,default_prestasi_mahasiswa_penghargaan.penghargaan_nama as nama_penghargaan,default_prestasi_mahasiswa_penghargaan.penghargaan_penyelenggara as penyelenggara,default_prestasi_mahasiswa_penghargaan.penghargaan_tempat as tempat,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_equivalensi as equivalensi,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan as juara from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id join fakultas on prodi.kode_fakultas=fakultas.kode_fakultas
	 where default_prestasi_mahasiswa_penghargaan.penghargaan_status=1 and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and((default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal BETWEEN "2017/01/01" and "2017/12/31")
						    or (default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2017/01/01" and "2017/12/31"))  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan ='.$peringkat.'');
	
	return $query->result();
	
}  */

public function peringkatpenghargaanfakultas2($fakultas,$level,$peringkat){
	$query=$this->db->query(' select default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal as tanggal_awal,default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir as tanggal_akhir,default_prestasi_mahasiswa_penghargaan.penghargaan_level as level,fakultas.nama_fakultas as nama_fakultas,default_prestasi_mahasiswa_penghargaan.id as id,default_prestasi_mahasiswa_penghargaan.foto_kegiatan as foto,default_profiles.nim as nim,default_profiles.display_name as nama,default_prestasi_mahasiswa_penghargaan.penghargaan_event as nama_event,default_prestasi_mahasiswa_penghargaan.penghargaan_nama as nama_penghargaan,default_prestasi_mahasiswa_penghargaan.penghargaan_penyelenggara as penyelenggara,default_prestasi_mahasiswa_penghargaan.penghargaan_tempat as tempat,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_equivalensi as equivalensi,default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan as juara from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 left join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id join fakultas on prodi.kode_fakultas=fakultas.kode_fakultas
	 where default_prestasi_mahasiswa_penghargaan.penghargaan_status=1 and users.group_id=2 and prodi.kode_fakultas='.$fakultas.' and default_prestasi_mahasiswa_penghargaan.is_verifikasi in (1,0) and
						    default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN date(sysdate() - INTERVAL 1 YEAR) and date(sysdate())  and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan ='.$peringkat.'');
	
	return $query->result();
	
}

//tabel skoring kemahasiswaan.itb.ac.id/daftar_prestasi/tabel_skoring

public function prestasiskor($level,$juara){
	 $query=$this->db->query('select count(default_prestasi_mahasiswa_penghargaan.created_by) as prestasi from default_profiles 
	 join prodi on default_profiles.id_prodi= prodi.id_prodi join users on users.id=default_profiles.user_id 
	 join default_prestasi_mahasiswa_penghargaan on default_prestasi_mahasiswa_penghargaan.created_by = default_profiles.user_id
	 where default_prestasi_mahasiswa_penghargaan.penghargaan_status=1 and users.group_id=2 and default_prestasi_mahasiswa_penghargaan.penghargaan_level in ('.$level.')  and default_prestasi_mahasiswa_penghargaan.penghargaan_jenis_penghargaan='.$juara.'  and default_prestasi_mahasiswa_penghargaan.is_verifikasi=1 and
     default_prestasi_mahasiswa_penghargaan.penghargaan_tanggal_berakhir BETWEEN "2018/01/01" and "2018/12/31"');
	
     return $query->row_array();
 }
 
	
} 
