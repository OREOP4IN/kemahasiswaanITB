<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_org_kemahasiswaan extends CI_Model
{
    var $tabel = "kegiatan_mahasiswa";
    var $tabel1 = "status_perizinan";

    function __construct()
    {
        parent::__construct();
    }

    public function getstatusterakhir($value='')
    {
        $this->db->order_by('id_status_perizinan','DESC');
        $this->db->where('id_kegiatan', $value);
        $query=$this->db->get('status_perizinan');
        return $query->row();
    }

    public function getOrganisasi($id_admin)
    {
        $this->db->join('admin_login', 'admin_login.id_admin=organisasi_kemahasiswaan.id_admin');
        $this->db->where('organisasi_kemahasiswaan.id_admin', $id_admin);

        $query=$this->db->get('organisasi_kemahasiswaan');
        return $query->result();
    }
    public function getIDOrg($id_admin)
    {
        $this->db->where('organisasi_kemahasiswaan.id_admin', $id_admin);
        $query=$this->db->get('organisasi_kemahasiswaan');
        return $query->row_array();
    }
    public function getIDAdminOrg($id_org_kemahasiswaan)
    {
        $this->db->select('id_admin')->from('organisasi_kemahasiswaan');
        $this->db->where('organisasi_kemahasiswaan.id_org_kemahasiswaan', $id_org_kemahasiswaan);
        $query=$this->db->get();
        return $query->row_array();
    }
    public function getMenu(){
        $this->db->select('nama,controller,parent,menu.id');
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
    public function getAllOrganisasi()
    {
        $query=$this->db->get('organisasi_kemahasiswaan');
        return $query->result();
    }

    public function getDataKegiatan($id_org_kemahasiswaan=0, $limit = 10, $offset = 0, $status='')
    {
  
     $this->db->select('IFNULL(lk.status_approval,99) as status_approval_laporan,sp.catatan, km.*, ok.id_org_kemahasiswaan, ok.id_admin, ok.nama_organisasi,sp.status_name, sp.tanggal, admin_login.nama_admin,link_file_pengesahan,link_file_fasilitas,link_file_publikasi,link_file_keringanan,link_file_kendaraan,link_file_undangan,link_file_sponsor')->from('kegiatan_mahasiswa as km');
     $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=km.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan as vk', 'vk.id_venue=km.id_venue');
     $this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
     $this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
     $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=km.id_kegiatan', 'left');
     $this->db->order_by ('sp.tanggal','desc');

     if(!empty($id_org_kemahasiswaan)){

        $this->db->where('km.id_org_kemahasiswaan',$id_org_kemahasiswaan);
        $this->db->where($status);

    }
    //$this->db->limit($limit,$offset);

    $query=$this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
}
public function getPengabdian($id_org_kemahasiswaan=0, $limit = 10, $offset = 0)
{
    $this->db->select('pm.*, ok.id_org_kemahasiswaan, ok.id_admin, ok.nama_organisasi')->from('pengabdian_masyarakat as pm');
    $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=pm.id_org_kemahasiswaan');
        //$this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
        //$this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
    if(!empty($id_org_kemahasiswaan)){
        $this->db->where('pm.id_org_kemahasiswaan',$id_org_kemahasiswaan);
    }
    $this->db->limit($limit,$offset);

    $query=$this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
}
public function getStatusPerizinan($id_kegiatan=0)
{
    $this->db->select('hp.*, admin_login.nama_admin')->from('history_perizinan as hp');
    $this->db->join('admin_login', 'admin_login.id_admin=hp.id_admin');
        //if(!empty($id_kegiatan)){
    $this->db->where('hp.id_kegiatan',$id_kegiatan);
                //$this->db->where('hp.id_admin',$this->session->userdata('id_admin'));
        //}

    $query=$this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
}
public function getVenue()
{
    $query=$this->db->get('venue_kegiatan');
    return $query->result();
}
public function getTipeOrg()
{
    $query=$this->db->get('tipe_organisasi');
    return $query->result();
}

public function getDataOrg($id_admin)
{
    $this->db->where('organisasi_kemahasiswaan.id_admin', $id_admin);
    $query=$this->db->get('organisasi_kemahasiswaan');
    return $query->result();
}

public function getDataOrg2($id_admin)
{
    $this->db->where('organisasi_kemahasiswaan.id_admin', $id_admin);
    $query=$this->db->get('organisasi_kemahasiswaan');
    return $query->row();
}

public function getDataPengurus($id_org_kemahasiswaan)
{
    $this->db->where('pengurus_ukm.id_org_kemahasiswaan', $id_org_kemahasiswaan);
    $query=$this->db->get('pengurus_ukm');
    return $query->result();
}
public function jumlah_keahlian_where_user($id_org_kemahasiswaan)
{
    $this->db->where('id_org_kemahasiswaan',$id_org_kemahasiswaan);
    return $this->db->count_all_results('kegiatan_mahasiswa');
}
public function jumlah_keahlian_where_user_p($id_org_kemahasiswaan)
{
    $this->db->where('id_org_kemahasiswaan',$id_org_kemahasiswaan);
    return $this->db->count_all_results('pengabdian_masyarakat');
}

function insert_kegiatan($field)
{
    $this->db->insert('kegiatan_mahasiswa', $field);
    return $this->db->affected_rows();
}

function update_org_kemahasiswaan($id_org_kemahasiswaan, $field)
{
    $this->db->where('id_org_kemahasiswaan', $id_org_kemahasiswaan);
    $this->db->update('organisasi_kemahasiswaan', $field);
    return $this->db->affected_rows();
}
function insert_org_kemahasiswaan($field)
{
    $this->db->insert('organisasi_kemahasiswaan', $field);
    return $this->db->affected_rows();
}
function insert_pengurus_ukm($field)
{
    $this->db->insert('pengurus_ukm', $field);
    return $this->db->affected_rows();
}
function update_pengurus_ukm($id_ukm, $field)
{
    $this->db->where('id_ukm', $id_ukm);
    $this->db->update('pengurus_ukm', $field);
    return $this->db->affected_rows();
}
function insert_draft($field)
{
    $this->db->insert('history_perizinan', $field);
    return $this->db->affected_rows();
}

public function getDataPerizinan($id, $id_org_kemahasiswaan)
{
    $this->db->where(array('nama_kegiatan'=>$id,'id_org_kemahasiswaan'=>$id_org_kemahasiswaan));
    $query = $this->db->get($this->tabel);

    return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
}

public function getDataPerizinan2($id, $id_org_kemahasiswaan)
{
    $this->db->where(array('nama_kegiatan'=>$id,'id_org_kemahasiswaan'=>$id_org_kemahasiswaan));
    $this->db->order_by('id_kegiatan', 'DESC');
    $query = $this->db->get($this->tabel);

    return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
}

public function getIDAdmin($id_org_kemahasiswaan)
{
    $this->db->where(array('id_org_kemahasiswaan'=>$id_org_kemahasiswaan));
    $query = $this->db->get('organisasi_kemahasiswaan');

    return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
}
public function simpanStatus($status_kegiatan, $id_kegiatan = 0)
{
    $this->db->insert('status_perizinan', $status_kegiatan);
    return $this->db->affected_rows();
}
public function simpanHistory($status_kegiatan, $id_kegiatan = 0)
{
    $this->db->insert('history_perizinan', $status_kegiatan);
    return $this->db->affected_rows();
}

public function simpanVerifikasi($field) {
    $this->db->insert('history_perizinan', $field);
    return $this->db->affected_rows();
}

public function getAllDataKegiatan() {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,tujuan,dana,nama_kegiatan,nama_organisasi,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval, barcode, foto');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->where('`status_perizinan`.id_status_perizinan = ( SELECT MAX(id_status_perizinan) FROM status_perizinan WHERE id_kegiatan=`kegiatan_mahasiswa`.`id_kegiatan` )', NULL, FALSE);

    $this->db->order_by('status_perizinan.tanggal', 'desc');
    // $this->db->limit(10);
    return $this->db->get()->result();

}

public function getAllDataKegiatanNew($thn) {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,tujuan,dana,nama_kegiatan,nama_organisasi,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval, barcode, foto');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->where('`status_perizinan`.id_status_perizinan = ( SELECT MAX(id_status_perizinan) FROM status_perizinan WHERE id_kegiatan=`kegiatan_mahasiswa`.`id_kegiatan` )', NULL, FALSE);
    $this->db->where_in('YEAR(tgl_input)',$thn);
    $this->db->order_by('status_perizinan.tanggal', 'desc');
    // $this->db->limit(10);
    return $this->db->get()->result();

}

public function getAllDataKegiatan2() {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,venue_name,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->where('`status_perizinan`.id_status_perizinan = ( SELECT MAX(id_status_perizinan) FROM status_perizinan WHERE id_kegiatan=`kegiatan_mahasiswa`.`id_kegiatan` )', NULL, FALSE);
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    return $this->db->get()->result();

}

public function getAllDataKegiatan_approver2($limit,$offset,$order="tanggal_mulai",$dir="desc",$getjumlah=false) {
   $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,tujuan,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue, barcode, foto');
   $this->db->from('kegiatan_mahasiswa');
   $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
   $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
   $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
   $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
   $this->db->where(array("status_name" => 'Diproses'));
		// $this->db->order_by($order,$dir);
   $this->db->order_by('id_kegiatan','desc');
   if ($getjumlah) {
     return $this->db->get()->num_rows();
 } else {
     $this->db->limit($limit,$offset);
     return $this->db->get()->result();
 }
}

public function getAllDataKegiatan_kasubdit() {
   $thn = array(date('Y'),date('Y')-1);
   $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,tujuan,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue, barcode, foto');
   $this->db->from('kegiatan_mahasiswa');
   $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
   $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
   $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
   $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
   $this->db->where_in('YEAR(tgl_input)',$thn);
   $this->db->where_not_in("status_name",array('Pengajuan Revisi','Draft','Pengajuan Baru','Diproses'));
   $this->db->order_by('id_kegiatan','desc');

   return $this->db->get()->result();
 
}

public function getAllDataKegiatan_semua($limit,$offset,$order="tanggal_mulai",$dir="asc",$getjumlah=false) {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,tujuan,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue, barcode, foto');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->order_by($order,$dir);
    if ($getjumlah) {
        return $this->db->get()->num_rows();
    } else {
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }
}

public function getAllDataKegiatan_approvernew() {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,venue_name,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->where(array("status_name" => 'Diproses'));
}

public function getUsername($id_admin)
{
    $this->db->select('username')->from('admin_login');
    $this->db->where('id_admin', $id_admin);

    $query = $this->db->get();
    return $query->row_array();
}
public function getDataKegiatanByID($id_kegiatan=0)
{
    $this->db->select('km.*, ok.nama_organisasi,  sp.*, admin_login.nama_admin, admin_login.username')->from('kegiatan_mahasiswa as km');
    $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=km.id_org_kemahasiswaan');
        // $this->db->join('venue_kegiatan as vk', 'vk.id_venue=km.id_venue','left');
    $this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
    $this->db->where('km.id_kegiatan', $id_kegiatan);

    $query=$this->db->get();
    return $query->result();
}
public function getFileUnduh($id_kegiatan=0)
{
    $this->db->select('sp.*')->from('status_perizinan as sp');
    $this->db->where('sp.id_kegiatan', $id_kegiatan);

    $query=$this->db->get();
    return $query->result();
}
public function getDataKegiatanByIDKegiatan($id_kegiatan=0)
{
    $this->db->select('km.*, ok.nama_organisasi,ok.logo,pu.id_ukm, pu.pengurus, pu.pembimbing,pu.nip,  sp.*, admin_login.nama_admin, admin_login.username, ok.id_tipe_org')->from('kegiatan_mahasiswa as km');
    $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=km.id_org_kemahasiswaan');
    $this->db->join('pengurus_ukm as pu', 'ok.id_org_kemahasiswaan=pu.id_org_kemahasiswaan');
        // $this->db->join('venue_kegiatan as vk', 'vk.id_venue=km.id_venue');
    $this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
    $this->db->where('km.id_kegiatan', $id_kegiatan);
    $this->db->order_by("pu.id_ukm","desc");

    $query=$this->db->get();
    return $query->row_array();
}

public function getDataKegiatanByUUID($uuid=0)
{
    $this->db->select('km.*, ok.nama_organisasi,ok.logo,pu.id_ukm, pu.pengurus, pu.pembimbing,pu.nip,  sp.*, admin_login.nama_admin, admin_login.username, ok.id_tipe_org')->from('kegiatan_mahasiswa as km');
    $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=km.id_org_kemahasiswaan');
    $this->db->join('pengurus_ukm as pu', 'ok.id_org_kemahasiswaan=pu.id_org_kemahasiswaan');
        // $this->db->join('venue_kegiatan as vk', 'vk.id_venue=km.id_venue');
    $this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
    $this->db->where('km.uuid', $uuid);
    $this->db->order_by("pu.id_ukm","desc");

    $query=$this->db->get();
    return $query->row_array();
}
public function getDataKegiatanByIDKegiatan2($id_kegiatan=0)
{
    $this->db->select('km.*, ok.nama_organisasi,ok.logo, pu.pengurus, pu.pembimbing,pu.nip, sp.*, admin_login.nama_admin, admin_login.username, ok.id_tipe_org')->from('kegiatan_mahasiswa as km');
    $this->db->join('organisasi_kemahasiswaan as ok', 'ok.id_org_kemahasiswaan=km.id_org_kemahasiswaan');
    $this->db->join('pengurus_ukm as pu', 'ok.id_org_kemahasiswaan=pu.id_org_kemahasiswaan');
       // $this->db->join('venue_kegiatan as vk', 'vk.id_venue=km.id_venue');
    $this->db->join('status_perizinan as sp', 'sp.id_kegiatan=km.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=sp.id_admin');
    $this->db->where('km.id_kegiatan', $id_kegiatan);
    $this->db->order_by("pu.tanggal","desc");
    $query=$this->db->get();
    return $query->row_array();
}
public function getDataKegiatanEdit($id_kegiatan=0)
{
    $this->db->join('kegiatan_mahasiswa_event','kegiatan_mahasiswa_event.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
        //$this->db->join('kegiatan_mahasiswa_sponsor','kegiatan_mahasiswa_sponsor.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->where('kegiatan_mahasiswa.id_kegiatan', $id_kegiatan);

    $query=$this->db->get('kegiatan_mahasiswa');
    return $query->result_array();
}
public function getDataKegiatanEdit2($id_kegiatan=0)
{
        //$this->db->join('kegiatan_mahasiswa_event','kegiatan_mahasiswa_event.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
    $this->db->join('kegiatan_mahasiswa_sponsor','kegiatan_mahasiswa_sponsor.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->where('kegiatan_mahasiswa.id_kegiatan', $id_kegiatan);

    $query=$this->db->get('kegiatan_mahasiswa');
    return $query->result_array();
}
public function getDataKegiatanEdit3($id_kegiatan=0)
{

    $this->db->join('kegiatan_mahasiswa_fasilitas','kegiatan_mahasiswa_fasilitas.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->where('kegiatan_mahasiswa.id_kegiatan', $id_kegiatan);

    $query=$this->db->get('kegiatan_mahasiswa');
    return $query->result_array();
}
function update_kegiatan($id_kegiatan, $field)
{

    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->update('kegiatan_mahasiswa', $field);
    return $this->db->affected_rows();
}
public function updateStatus($id_kegiatan, $status_kegiatan)
{
    $this->db->where('id_kegiatan', $id_kegiatan)->update('status_perizinan', $status_kegiatan);
    return $this->db->affected_rows();
}
public function updateHistory($id_kegiatan, $status_kegiatan)
{
    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->insert('history_perizinan', $status_kegiatan);
    return $this->db->affected_rows();
}
function update_status($id_kegiatan, $data) {
    $this->db->where('id_kegiatan', $id_kegiatan)->update('status_perizinan', $data);
    return $this->db->affected_rows();
}
    // function update_kegiatan($id_kegiatan, $field)
    // {
    //     $this->db->where('id_kegiatan', $id_kegiatan);
    //     $this->db->update('kegiatan_mahasiswa', $field);
    //     return $this->db->affected_rows();
    // }


public function getAllDataKegiatan_baru() {
  $thn=array($thn=date('Y'),$thn=date('Y')-1);
  $thn=date('Y');
  $thn=array(date('Y'),date('Y')-1);
  $this->db->select('kegiatan_mahasiswa.id_kegiatan,dana,tujuan,nama_kegiatan,nama_organisasi,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto, barcode, tgl_input');
  $this->db->from('kegiatan_mahasiswa');
  $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
  $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
  $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
  $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
  $status = array('Pengajuan Baru', 'Pengajuan Revisi','Diproses', 'Dikembalikan');
  $this->db->where_in('status_name', $status);
  $this->db->where_in('YEAR(tgl_input)',$thn);
  $this->db->order_by('id_kegiatan','desc');
  return $this->db->get()->result();
}



public function getAllDataKegiatan_disetujui() {
		//$thn=array(2020,2021);
        // $thn=date('Y');
    $thn=array(date('Y'),date('Y')-1);
    $this->db->select('link_file_fasilitas,link_file_publikasi, link_file_pengesahan, link_file_keringanan, link_file_kendaraan, link_file_sponsor, link_file_undangan,no_surat_ijin_kegiatan,tgl_input_no_surat_izin_kegiatan,kegiatan_mahasiswa.id_kegiatan,tujuan,dana,nama_kegiatan,nama_organisasi,tanggal_mulai, venue_name, tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto, barcode');
    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue','left');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->where(array("status_name" => 'Disetujui'));
    $this->db->where_in('YEAR(tgl_input)',$thn);
    $this->db->order_by('id_kegiatan','desc');

    return $this->db->get()->result();
}

	//cek cetak dokumen
public function cek_fasilitas($id_kegiatan){
  $query=$this->db->query('select * from kegiatan_mahasiswa_fasilitas where id_kegiatan='.$id_kegiatan.'');
  return $query->row();
}
	//keringanan tempat
public function cek_keringanan_fasilitas($id_kegiatan){
  $query=$this->db->query('select * from kegiatan_mahasiswa_event where id_kegiatan='.$id_kegiatan.' and is_keringanan_biaya=1');
  return $query->row();
}
	//keringanan fasilitas
public function cek_keringanan_fasilitas2($id_kegiatan){
  $query=$this->db->query('select * from kegiatan_mahasiswa_fasilitas where id_kegiatan='.$id_kegiatan.' and is_keringanan_biaya=1');
  return $query->row();
}

public function cek_fasilitas_tempat_event($id_kegiatan){
  $query=$this->db->query('select * from kegiatan_mahasiswa_event where id_kegiatan='.$id_kegiatan.'');
  return $query->row();
}

public function cek_ijin_kendaraan($id_kegiatan=''){
  $query=$this->db->query('select properti from kegiatan_mahasiswa where id_kegiatan='.$id_kegiatan.'');
  return $query->row();
}

public function cek_undang_pejabat($id_kegiatan =''){
  $query=$this->db->query('select pejabat from kegiatan_mahasiswa where id_kegiatan='.$id_kegiatan.'');
  return $query->row();
}

public function cek_sponsor($id_kegiatan){
  $query=$this->db->query('select * from kegiatan_mahasiswa_sponsor where id_kegiatan='.$id_kegiatan.'');
  return $query->row();
}



public function getAllDataKegiatan_diproses() {
    $this->db->select('kegiatan_mahasiswa.id_kegiatan,tujuan,dana,nama_kegiatan,nama_organisasi,tanggal_mulai, venue_name, tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto, barcode');

    $this->db->from('kegiatan_mahasiswa');
    $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
    $this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue','left');
    $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
    $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
    $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
    $this->db->where(array("status_name" => 'Diproses'));
    $this->db->order_by('id_kegiatan','desc');
    $this->db->where('YEAR(tgl_input)','2018');

    return $this->db->get()->result();
}


public function simpanDataBatch($table,$data) {
    $this->db->insert_batch($table, $data);
    return $this->db->affected_rows();
}

function updateDataBatch($id_kegiatan, $insert_batch)
{

    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->update_batch('kegiatan_mahasiswa_event', $insert_batch,'id_kegiatan_mahasiswa_event');
    return $this->db->affected_rows();
}

public function simpanDataSponsor($table,$data) {
    $this->db->insert_batch($table, $data);
    return $this->db->affected_rows();
}

public function updateDataSponsor($id_kegiatan,$insert_sponsor) {
    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->update_batch('kegiatan_mahasiswa_sponsor', $insert_sponsor,'id_sponsor');
    return $this->db->affected_rows();
}

public function listSponsor ($id_kegiatan) {
    $this->db->select('*');
    $this->db->from('kegiatan_mahasiswa_sponsor');
    $this->db->where('id_kegiatan', $id_kegiatan);
    return $this->db->get()->result();
}
public function getRincianKegiatan($id_kegiatan, $count = false)
{
    $this->db->select('*');
    $this->db->from('kegiatan_mahasiswa_event');
    $this->db->where('id_kegiatan', $id_kegiatan);
    if ($count == true) {
        return $this->db->get()->num_rows();
    }else {
        return $this->db->get()->result();
    }

}



 //keringanan tempat
public function getRincianKeringananFasilitas($id_kegiatan, $count = false)
{
    $this->db->select('*');
    $this->db->from('kegiatan_mahasiswa_event');
    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->where('is_keringanan_biaya', 1);
    if ($count == true) {
        return $this->db->get()->num_rows();
    }else {
        return $this->db->get()->result();
    }

}
	//keringanan fasilitas
public function getRincianKeringananFasilitas2($id_kegiatan, $count = false)
{
    $this->db->select('*');
    $this->db->from('kegiatan_mahasiswa_fasilitas');
    $this->db->where('id_kegiatan', $id_kegiatan);
    $this->db->where('is_keringanan_biaya', 1);
    if ($count == true) {
        return $this->db->get()->num_rows();
    }else {
        return $this->db->get()->result();
    }
}


public function deleteKegiatan($id_kegiatan){

 $this->db->where('id_kegiatan', $id_kegiatan);
 $this->db->delete('kegiatan_mahasiswa');
}

public function deleteBantuan($id_bansos){
    
 $this->db->where('id_bansos', $id_bansos);
 $this->db->delete('bansos_ormawa');


}

public function hapus_sponsor($id_sponsor){

 $this->db->where('id_sponsor', $id_sponsor);
 $this->db->delete('kegiatan_mahasiswa_sponsor');
}

public function getAllDataKegiatan_pencarian($start_date="",$end_date="") {

    $data = $this->db->query("  SELECT 
        organisasi_kemahasiswaan.nama_organisasi, 
        organisasi_kemahasiswaan.singkatan,
        tipe_organisasi.tipe_organisasi,
        IFNULL(induk_query.jumlah,0) as induk,
        IFNULL(anak_query.jumlah,0) as anak
        FROM organisasi_kemahasiswaan
        JOIN tipe_organisasi
        ON tipe_organisasi.id_tipe_org = organisasi_kemahasiswaan.id_tipe_org
        LEFT JOIN 
        (
            SELECT aa.nama_organisasi, aa.id_org_kemahasiswaan, aa.singkatan, COUNT(aa.id_kegiatan_mahasiswa_event) as jumlah FROM (
                SELECT 
                kegiatan_mahasiswa.*,
                tipe_organisasi.id_tipe_org,
                tipe_organisasi.tipe_organisasi, 
                kegiatan_mahasiswa_event.id_kegiatan_mahasiswa_event, 
                organisasi_kemahasiswaan.nama_organisasi,
                organisasi_kemahasiswaan.singkatan
                FROM `kegiatan_mahasiswa` 
                JOIN kegiatan_mahasiswa_event 
                ON kegiatan_mahasiswa.id_kegiatan = kegiatan_mahasiswa_event.id_kegiatan
                JOIN organisasi_kemahasiswaan
                ON organisasi_kemahasiswaan.id_org_kemahasiswaan = kegiatan_mahasiswa.id_org_kemahasiswaan
                JOIN tipe_organisasi
                ON tipe_organisasi.id_tipe_org = organisasi_kemahasiswaan.id_tipe_org
                JOIN status_perizinan
                ON status_perizinan.id_kegiatan = kegiatan_mahasiswa.id_kegiatan
                WHERE
                status_perizinan.status_name IN ('Disetujui','Selesai','Pengajuan Laporan','Laporan Dikembalikan','Laporan Disetujui')
                AND kegiatan_mahasiswa_event.waktu_kegiatan_event BETWEEN '".$start_date."' AND '".$end_date."'
                ) as aa
                GROUP BY aa.id_org_kemahasiswaan
                ORDER BY aa.id_tipe_org

                ) as anak_query ON organisasi_kemahasiswaan.id_org_kemahasiswaan = anak_query.id_org_kemahasiswaan
                LEFT JOIN 
                (
                SELECT aa.nama_organisasi, aa.id_org_kemahasiswaan, aa.singkatan, COUNT(aa.id_kegiatan_mahasiswa_event) as jumlah FROM (
                SELECT 
                kegiatan_mahasiswa.*,
                tipe_organisasi.id_tipe_org,
                tipe_organisasi.tipe_organisasi,
                kegiatan_mahasiswa_event.id_kegiatan_mahasiswa_event, 
                organisasi_kemahasiswaan.nama_organisasi,
                organisasi_kemahasiswaan.singkatan
                FROM `kegiatan_mahasiswa` 
                JOIN kegiatan_mahasiswa_event 
                ON kegiatan_mahasiswa.id_kegiatan = kegiatan_mahasiswa_event.id_kegiatan
                JOIN organisasi_kemahasiswaan
                ON organisasi_kemahasiswaan.id_org_kemahasiswaan = kegiatan_mahasiswa.id_org_kemahasiswaan
                JOIN tipe_organisasi
                ON tipe_organisasi.id_tipe_org = organisasi_kemahasiswaan.id_tipe_org
                JOIN status_perizinan
                ON status_perizinan.id_kegiatan = kegiatan_mahasiswa.id_kegiatan
                WHERE
                status_perizinan.status_name IN ('Disetujui','Selesai','Pengajuan Laporan','Laporan Dikembalikan','Laporan Disetujui')
                AND organisasi_kemahasiswaan.status_aktif = 1
                AND kegiatan_mahasiswa_event.waktu_kegiatan_event BETWEEN '".$start_date."' AND '".$end_date."'
                GROUP BY kegiatan_mahasiswa.id_kegiatan
                ) as aa
                GROUP BY aa.id_org_kemahasiswaan
                ORDER BY aa.id_tipe_org
                ) as induk_query ON organisasi_kemahasiswaan.id_org_kemahasiswaan = induk_query.id_org_kemahasiswaan

                ORDER BY tipe_organisasi.id_tipe_org DESC");

            return $data->result();
        }

        public function getAllDataKegiatan_pencarian_induk() {
            $this->db->select('*');
            $this->db->from('kegiatan_mahasiswa');
            $this->db->join('kegiatan_mahasiswa_event','kegiatan_mahasiswa.id_kegiatan = kegiatan_mahasiswa_event.id_kegiatan');
            $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
            $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
            $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
            $this->db->join('tipe_organisasi', 'organisasi_kemahasiswaan.id_tipe_org=tipe_organisasi.id_tipe_org');
            $this->db->where_in('status_name',array('Disetujui','Selesai','Pengajuan Laporan','Laporan Dikembalikan','Laporan Disetujui'));
            $this->db->group_by('kegiatan_mahasiswa.id_kegiatan');
            $this->db->order_by('waktu_kegiatan_event','desc');
            $this->db->order_by('kegiatan_mahasiswa.id_kegiatan','desc');

            return $this->db->get()->result();
        }
        public function status_selesai($id,$id_admin) {
            $array = array(
                'status_name' => 'Selesai',
                'id_admin' => $id_admin
            );

            $this->db->set($array);
            $this->db->where('id_kegiatan', $id);
            $this->db->update('status_perizinan');

            return $this->db->affected_rows();
        }
        public function getDataSiswa($nim){

            $this->db->select("nim,display_name");
            $whereCondition = array('nim' =>$nim);
            $this->db->where($whereCondition);
            $this->db->from('default_profiles');
            $query = $this->db->get();
            return $query->result();
        }

        public function getDataDosen($nip){

            $this->db->select("nip,nama,gelar_depan,gelar_belakang");
            $whereCondition = array('nopeg' =>$nip);
            $this->db->where($whereCondition);
            $this->db->from('tapeg_itb');
            $query = $this->db->get();
            return $query->result();



        }
        public function getAllDataKegiatan_laporan() {
		//$thn=array(2019,2020);
        // $thn=date('Y');
            $thn=array(date('Y'),date('Y')-1);
            $this->db->select('kegiatan_mahasiswa.id_kegiatan,dana, tujuan,nama_kegiatan,nama_organisasi,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto,barcode');
            $this->db->from('kegiatan_mahasiswa');
            $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
            $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
            $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
            $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
            $status = array('Pengajuan Laporan', 'Laporan Direvisi','Laporan Disetujui');
            $this->db->where_in('status_name', $status);
            $this->db->where_in('YEAR(tgl_input)',$thn);
            $this->db->order_by('id_kegiatan','desc');

            return $this->db->get()->result();
        }


        public function getAwalTanggal($id_kegiatan)
        {
            $this->db->select('waktu_kegiatan_event');
            $this->db->from('kegiatan_mahasiswa_event');
            $this->db->where('id_kegiatan', $id_kegiatan);
            $this->db->order_by('waktu_kegiatan_event', 'ASC');
            return $this->db->get()->row();
        }

       

        public function getAkhirTanggal($id_kegiatan)
        {
            $this->db->select('waktu_kegiatan_event_akhir');
            $this->db->from('kegiatan_mahasiswa_event');
            $this->db->where('id_kegiatan', $id_kegiatan);
            $this->db->order_by('waktu_kegiatan_event_akhir', 'DESC');
            return $this->db->get()->row();
        }

       

        public function getAkhirTanggalnull($id_kegiatan)
        {
            $this->db->select('waktu_kegiatan_event');
            $this->db->from('kegiatan_mahasiswa_event');
            $this->db->where('id_kegiatan', $id_kegiatan);
            $this->db->order_by('waktu_kegiatan_event_akhir', 'DESC');
            return $this->db->get()->row();
        }

        function delete_file_proposal($id,$datay){
          $data=array('proposal'=>$datay);
          $this->db->where('id_kegiatan', $id);
          $this->db->update('kegiatan_mahasiswa', $data);
      }
      function delete_file_rundown($id,$datay){
          $data=array('rundown'=>$datay);
          $this->db->where('id_kegiatan', $id);
          $this->db->update('kegiatan_mahasiswa', $data);
      }  
      function delete_file_publikasi($datay,$id){
          $data=array('foto'=>$datay);
          $this->db->where('id_kegiatan', $id);
          $this->db->update('kegiatan_mahasiswa_fasilitas', $data);
      } 
      function delete_file_rekening($id,$datay){
          $data=array('rekening'=>$datay);
          $this->db->where('id_kegiatan', $id);
          $this->db->update('kegiatan_mahasiswa', $data);
      }
      public function getAllDataKegiatan_approver2modif($status)  {
        $this->db->select('kegiatan_mahasiswa.id_kegiatan,nama_kegiatan,nama_organisasi,tujuan,tanggal_mulai,tanggal_selesai,status_name,nama_admin,username,reviewer,request_pengesahan,request_ijin_kegiatan,request_ijin_fasilitas,request_ijin_kendaraan,request_undang_pejabat,request_sponsor,status_approval,venue,foto, barcode');

        $this->db->from('kegiatan_mahasiswa');
        $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
        $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
        $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
        $this->db->join('laporan_kegiatan lk', 'lk.id_kegiatan=kegiatan_mahasiswa.id_kegiatan', 'left');
        $this->db->where($status);
        $this->db->order_by('status_perizinan.tanggal','desc');
        return $this->db->get()->result();
        
    }
    public function getDataKegiatanEditlaporan($id_kegiatan=0)
    {

        //$this->db->join('kegiatan_mahasiswa_event','kegiatan_mahasiswa_event.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');

        
        $this->db->join('kegiatan_mahasiswa_sponsor','kegiatan_mahasiswa_sponsor.id_kegiatan=kegiatan_mahasiswa.id_kegiatan','left');
        $this->db->join('organisasi_kemahasiswaan', 'organisasi_kemahasiswaan.id_org_kemahasiswaan=kegiatan_mahasiswa.id_org_kemahasiswaan');
        //$this->db->join('venue_kegiatan', 'venue_kegiatan.id_venue=kegiatan_mahasiswa.id_venue');
        $this->db->join('status_perizinan', 'status_perizinan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
        $this->db->join('admin_login', 'admin_login.id_admin=status_perizinan.id_admin');
        $this->db->join('laporan_kegiatan', 'laporan_kegiatan.id_kegiatan=kegiatan_mahasiswa.id_kegiatan');
        $this->db->where('kegiatan_mahasiswa.id_kegiatan', $id_kegiatan);

        $query=$this->db->get('kegiatan_mahasiswa');
        return $query->result_array();
    }
    public function getNoBarcode() {
        /*$qry = $this->db->select('MAX(no_urut_barcode) as max_no_barcode')
                ->from('kegiatan_mahasiswa')
                ->where('tgl_input'(date), date('y'))
                ->get();*/
                $qry=$this->db->query("select max(no_urut_barcode) as max_no_barcode from kegiatan_mahasiswa where year(tgl_input)= year(curdate())");
                if ($qry->num_rows() > 0)
                    return $qry->row_array();
                return false;
            }

            public function tambahanEvent($event)
            {
                $this->db->insert('kegiatan_mahasiswa_event', $event);
                return $this->db->affected_rows();
            }

            public function getRincianFasilitas($id_kegiatan, $count = false)
            {
                $this->db->select('*');
                $this->db->from('kegiatan_mahasiswa_fasilitas');
                $this->db->where('id_kegiatan', $id_kegiatan);
                if ($count == true) {
                    return $this->db->get()->num_rows();
                }else {
                    return $this->db->get()->result();
                }
            }



     //   public function getRincianFasilitasTambahan($id_kegiatan)
     // {
            
     //    $this->db->select('*');
     //    $this->db->from('kegiatan_mahasiswa_fasilitas');
     //    $this->db->where('status_created', 1);
     //    $this->db->where('id_kegiatan', $id_kegiatan);

     //    return $this->db->get()->result();
     // }

     //   public function getRincianEventTambahan($id_kegiatan)
     // {
            
     //    $this->db->select('*');
     //    $this->db->from('kegiatan_mahasiswa_event');
     //    $this->db->where('status_created', 1);
     //    $this->db->where('id_kegiatan', $id_kegiatan);

     //    return $this->db->get()->result();
     // }
            public function getRincianFasilitasTambahan($id_kegiatan, $count = false)
            {

                $this->db->select('*');
                $this->db->from('kegiatan_mahasiswa_fasilitas');
                $this->db->where('status_created', 1);
                $this->db->where('id_kegiatan', $id_kegiatan);

                if ($count == true) {
                    return $this->db->get()->num_rows();
                }else {
                    return $this->db->get()->result();
                }
            }

            public function getRincianEventTambahan($id_kegiatan, $count = false)
            {

                $this->db->select('*');
                $this->db->from('kegiatan_mahasiswa_event');
                $this->db->where('status_created', 1);
                $this->db->where('id_kegiatan', $id_kegiatan);

                if ($count == true) {
                    return $this->db->get()->num_rows();
                }else {
                    return $this->db->get()->result();
                }
            }

            public function hapusgambar($id)
            {
               $this->db->where('id_izin_pinjam_fasilitas', $id);
               $this->db->delete('kegiatan_mahasiswa_fasilitas'); 
           }

           public function hapuskegiatanevent($id)
           {
               $this->db->where('id_kegiatan_mahasiswa_event', $id);
               $this->db->delete('kegiatan_mahasiswa_event'); 
           }

           public function tambahanFasilitas($fasilitas)
           {
            $this->db->insert('kegiatan_mahasiswa_fasilitas', $fasilitas);
            return $this->db->affected_rows();
        }
        function updateDataIjinFasilitas($id_kegiatan, $insert_izin)
        {

            $this->db->where('id_kegiatan', $id_kegiatan);
            $this->db->update_batch('kegiatan_mahasiswa_fasilitas', $insert_izin,'id_izin_pinjam_fasilitas');
            return $this->db->affected_rows();
        }
        public function getDataOrmawa()
        {
            $this->db->select("*");
            $this->db->from('organisasi_kemahasiswaan');
            $query = $this->db->get();
            return $query->result();
        }

        public function getDataOrmawaAktif()
        {
            $this->db->select("*");

            $whereCondition = array('status_aktif' =>'1');

            $this->db->where($whereCondition);

            $this->db->from('organisasi_kemahasiswaan');

            $query = $this->db->get();

            return $query->result();
        }

        public function getDataOrmawaAktifbytipe($id_tipe='')
        {
        // 1 ukm
        // 3 himpunan
        // 2 km

            $this->db->select("*");

            $whereCondition = array('status_aktif' =>'1','id_tipe_org' => $id_tipe);

            $this->db->where($whereCondition);

            $this->db->from('organisasi_kemahasiswaan');

            $query = $this->db->get();

            return $query->result();
        }

        public function getDataOrmawaNonAktif()
        {

            $this->db->select("*");

            $whereCondition = array('status_aktif' =>'0');

            $this->db->where($whereCondition);

            $this->db->from('organisasi_kemahasiswaan');

            $query = $this->db->get();

            return $query->result();
        }

        public function setAktifOrmawa($id_org_kemahasiswaan,$update)
        {
            $this->db->where('id_org_kemahasiswaan', $id_org_kemahasiswaan)->update('organisasi_kemahasiswaan', $update);
            return $this->db->affected_rows();
        }

        public function setNonAktifOrmawa($id_org_kemahasiswaan,$update)
        {
            $this->db->where('id_org_kemahasiswaan', $id_org_kemahasiswaan)->update('organisasi_kemahasiswaan', $update);
            return $this->db->affected_rows();
        }

        public function updatePass($id_admin,$aktifasi)
        {
            if ($aktifasi == 1) {

                $data['password'] = md5('ormawa123');
                $this->db->where('id_admin', $id_admin)->update('admin_login', $data);
                return $this->db->affected_rows();

            } else {

                $data['password'] = '';
                $this->db->where('id_admin', $id_admin)->update('admin_login', $data);
                return $this->db->affected_rows();
            }
            
        }


    //tambahan ----------------------------------------------------

        function update_pengurus_ukm2($id_ukm, $field)
        {
            $this->db->where('id_org_kemahasiswaan', $id_ukm);
            $this->db->update('pengurus_ukm', $field);
            return $this->db->affected_rows();
        }

        public function getDataOrmawaDaftarUlang()
        {
            $this->db->select("*");

            $this->db->where('daftar_ulang is NOT NULL', NULL, FALSE);


            $this->db->from('organisasi_kemahasiswaan');

            $query = $this->db->get();

            return $query->result();
        }

        public function getDataOrmawaDaftarUlangKepengurusanTerbaru()
        {
            $query = $this->db->query(' SELECT organisasi_kemahasiswaan.id_org_kemahasiswaan,singkatan,nama_organisasi,pembimbing,nip, pengurus as peng_ketua, pengurus as peng_nim_ketua, pengurus_ukm.tanggal as awal , pengurus_ukm.tanggal_akhir as akhir, daftar_ulang
                FROM organisasi_kemahasiswaan
                JOIN pengurus_ukm 
                ON organisasi_kemahasiswaan.id_org_kemahasiswaan = pengurus_ukm.id_org_kemahasiswaan
                WHERE organisasi_kemahasiswaan.daftar_ulang IS NOT NULL AND id_tipe_org = 1 AND daftar_ulang is NOT NULL
                AND pengurus_ukm.id_ukm IN (SELECT MAX(pengurus_ukm.id_ukm) FROM pengurus_ukm GROUP BY id_org_kemahasiswaan )');

            return $query->result();
        }

        public function getDataOrganisasi($whereCondition)
        {

            $this->db->select("*");
            $this->db->from('organisasi_kemahasiswaan');
            $this->db->where('id_org_kemahasiswaan',$whereCondition);
            $query = $this->db->get();
            return $query->row();
        }

        public function getDataPengurusRow($id_org_kemahasiswaan)
        {
            $this->db->where('pengurus_ukm.id_org_kemahasiswaan', $id_org_kemahasiswaan);
            $this->db->order_by('id_ukm', 'desc');
            $query=$this->db->get('pengurus_ukm');
            return $query->row();
        }

        public function getDataPengurusTerbaru($id_org_kemahasiswaan)
        {
            $this->db->where('id_org_kemahasiswaan', $id_org_kemahasiswaan);
            $this->db->order_by('id_ukm', 'DESC');
            $query=$this->db->get('pengurus_ukm');
            return $query->row();
        }

        function update_approval($id_org_kemahasiswaan, $field)
        {
            $this->db->where('id_org_kemahasiswaan', $id_org_kemahasiswaan);
            $this->db->update('organisasi_kemahasiswaan', $field);
            return $this->db->affected_rows();
        }

        public function countKegiatanUtama($value='')
        {
            $query = $this->db->query('SELECT COUNT(kegiatan_mahasiswa.id_kegiatan) as jumlah_induk FROM organisasi_kemahasiswaan
              JOIN kegiatan_mahasiswa
              ON organisasi_kemahasiswaan.id_org_kemahasiswaan = kegiatan_mahasiswa.id_org_kemahasiswaan
              JOIN history_perizinan 
              ON history_perizinan.id_kegiatan = kegiatan_mahasiswa.id_kegiatan
              WHERE organisasi_kemahasiswaan.id_org_kemahasiswaan = '.$value.'
              AND history_perizinan.status_name = "disetujui"');
            return $query->row()->jumlah_induk;
        }

        public function countKegiatanRincian($value='')
        {
            $query = $this->db->query('SELECT COUNT(kegiatan_mahasiswa_event.id_kegiatan_mahasiswa_event) as jumlah_event FROM organisasi_kemahasiswaan
                JOIN kegiatan_mahasiswa
                ON organisasi_kemahasiswaan.id_org_kemahasiswaan = kegiatan_mahasiswa.id_org_kemahasiswaan
                JOIN kegiatan_mahasiswa_event
                ON kegiatan_mahasiswa_event.id_kegiatan = kegiatan_mahasiswa.id_kegiatan
                JOIN history_perizinan 
                ON history_perizinan.id_kegiatan = kegiatan_mahasiswa.id_kegiatan
                WHERE organisasi_kemahasiswaan.id_org_kemahasiswaan = '.$value.'
                AND history_perizinan.status_name = "disetujui"');
            return $query->row()->jumlah_event;
        }

	//histori pengajuan untuk di lembar2 cetak

    public function pengajuanbaru($id_kegiatan){
          $query=$this->db->query('select tanggal from history_perizinan where status_name="Pengajuan Baru" and id_kegiatan='.$id_kegiatan.'');
          return $query->row();
      }

      public function diproses($id_kegiatan){
          $query=$this->db->query('select tanggal from history_perizinan where status_name="Diproses" and id_kegiatan='.$id_kegiatan.' order by tanggal desc');
          return $query->row();
      }

      public function disetujui($id_kegiatan){
          $query=$this->db->query('select tanggal from history_perizinan where status_name="Disetujui" and id_kegiatan='.$id_kegiatan.' order by tanggal desc');
          return $query->row();
      }

      function updtempat($id, $val)
      {
        $field = array('publish' => $val);
        $this->db->where('id_kegiatan_mahasiswa_event', $id);
        $this->db->update('kegiatan_mahasiswa_event', $field);
        return $this->db->affected_rows();
    }


}
