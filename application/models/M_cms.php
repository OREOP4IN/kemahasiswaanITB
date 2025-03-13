<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_cms extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    
    //Berita
    function get_all_data($page=0)
    {
        $this->db->join('kategori_cms as kat','kat.id_kategori_cms=cms.id_kategori_cms');
        $this->db->order_by('cms.id_cms','asc')->limit('10', $page);
        $query = $this->db->get('cms');
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }

    public function getallbuku()
    {
        $this->db->order_by('id_buku','DESC');
        $query = $this->db->get('buku');
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

      public function getallbukubyid($id='')
    {
        $this->db->where('id_buku',$id);
        $query = $this->db->get('buku');
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }
    
     function get_all_data_id($id)
    {
        $this->db->join('kategori_cms as kat','kat.id_kategori_cms=cms.id_kategori_cms');
        $this->db->where('cms.id_cms',$id);
        $query = $this->db->get('cms');
        return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
    }
    
    function get_id($id_cms)
    {
        $this->db->where('id_cms', $id_cms);
        $query = $this->db->get('cms');
        return ($query->num_rows() > 0) ? $query->row_array() : FALSE;
    }

    function quotes()
    {

        $this->db->select('dp.quotes, dp.display_name, dp.photo, dp.nim')->from('default_profiles as dp');
        $this->db->where('quotes IS NOT NULL');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
    function get_data_by_id($id)
    {
        $this->db->where('id_cms', $id);
        $query = $this->db->get('cms');
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
    function count_all()
    {
        return $this->db->count_all('cms');
    }
    
    public function jml_post($published = 'published')
    {
        $this->db->where('status', $published);
        return $this->db->count_all_results('cms');
    }
    
    function insert_data($field)
    {
        $this->db->insert('cms', $field);
        return $this->db->affected_rows();
    }

    function savetranslate($field,$id)
    {
        $this->db->where('id_cms', $id)->update('cms', $field);
        return $this->db->affected_rows();
    }
    
    function update_data($id, $field)
    {
        $this->db->where('id_cms', $id)->update('cms', $field);
        return $this->db->affected_rows();
    }
    
    function delete_berita($id_cms)
    {
        $this->db->where('id_cms', $id_cms)->delete('cms');
        return $this->db->affected_rows();
    }
    
    public function late_post($page=0, $published = 'published', $order_by = 'tgl_publish', $sorted = 'desc', $kategori = 1)
    {
        $this->db->where(array('status' => $published, 'id_kategori_cms' => $kategori));
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('6',$page);
        $query = $this->db->get('cms');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }

    public function headline($is_utama=0, $is_bk=0)
    {
    	// $this->db->where('status','published');
     //    $this->db->where('on_headline',1);
     //    $this->db->where('id_kategori_cms',0);

     //    if ($is_utama == 1 && $is_bk == 0) {
        
     //    $this->db->where('is_utama',1);

     //    }elseif($is_utama == 0 && $is_bk == 1){

     //    $this->db->where('is_bk',1); 
        
     //    }else{
     //        //no filter
     //    }

     //    //$this->db->where('id_kategori_cms',0);
     //    $this->db->order_by('tgl_kirim', 'desc');
     //    $this->db->limit(5,0);
     //    $query = $this->db->get('cms');

       $query =  $this->db->query("
                SELECT * FROM (SELECT * FROM cms
                WHERE id_kategori_cms IN (0,2,3,4,5)
                AND status = 'Published'
                AND on_headline = 1
                ORDER BY tgl_publish DESC
                LIMIT 5 ) as aa
                UNION
                SELECT * FROM (SELECT * FROM cms
                WHERE id_kategori_cms = 1
                AND status = 'Published'
                AND on_headline = 1 
                ORDER BY tgl_publish DESC
                LIMIT 2) as bb
                ORDER BY tgl_publish DESC");
        
        return $query->result();
    }	

    public function headline_pengumuman($is_utama=0, $is_bk=0)
    {
        $this->db->where('status','published');
        $this->db->where('on_headline',1);
        $this->db->where('id_kategori_cms',0);

        if ($is_utama == 1 && $is_bk == 0) {
        
        $this->db->where('is_utama',1);

        }elseif($is_utama == 0 && $is_bk == 1){

        $this->db->where('is_bk',1); 
        
        }else{
            //no filter
        }

        //$this->db->where('id_kategori_cms',0);
        $this->db->order_by('tgl_publish', 'desc');
        $this->db->limit(3,0);
        $query = $this->db->get('cms');
        
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }   
 
    public function top_tiga_post($page=0, $published = 'Published', $order_by = 'tgl_publish', $sorted = 'desc', $kategori = 1)
    {
        $this->db->where(array('status' => $published));
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('3',$page);
        $query = $this->db->get('cms');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
     public function update_status($id,$field)
    {
        $this->db->where('id_cms',$id);
        $this->db->update('cms',$field);
    }
    
    //Event
    public function get_events($limit = 10, $offset = 0)
    {
        $this->db->limit($limit,$offset);
		$this->db->order_by('waktu_mulai','asc');
        $query = $this->db->get('cms_event');
        return $query->result();
    }
	public function get_eventMedia($id =0)
	{
		$picture = array();
		$video = array();
		$this->db->where('id_event', $id);
		$this->db->order_by('pos', 'asc');
		$img = $this->db->get('events_images');
		if($img->num_rows() > 0)
		{
			foreach($img->result() as $fimg){
				$fimg->type = 'pic';
				$picture[$fimg->pos] = $fimg; 
			}
		}
		$this->db->where('id_event', $id);
		$this->db->order_by('pos', 'asc');
		$vid = $this->db->get('events_video');
		if($vid->num_rows() > 0)
		{
			foreach($vid->result() as $fvid){
				$fvid->type = 'vid';
				$video[$fvid->pos] = $fvid; 
			}
		}	
		$media = array_merge($picture,$video);
		usort($media, function($a, $b) {
			return $a->pos - $b->pos;
		});
		return $media;
	}	
	public function get_eventFirstMedia($id =0)
	{
		$media = array(
			'pic' => array(),
			'vid' => array()
		);
		$this->db->where('id_event', $id);
		$this->db->order_by('pos', 'asc');
		$this->db->limit(1);
		$img = $this->db->get('events_images');
		if($img->num_rows() > 0)
		{
			$media['pic'] = $img->row(); 
		}
		$this->db->where('id_event', $id);
		$this->db->order_by('pos', 'asc');
		$this->db->limit(1);
		$vid = $this->db->get('events_video');
		if($vid->num_rows() > 0)
		{
			$media['vid'] = $vid->row(); 
		}
		
		if(!empty($media['pic']) && !empty($media['vid']))
		{
			if($media['pic']->pos > $media['vid']->pos){
				unset($media['pic']);
				$media['pic'] = array();
			}else{
				unset($media['vid']);
				$media['vid'] = array();
			}
		}
		

		return $media;
	}
    public function count_all_events()
    {
        return $this->db->count_all_results('cms_event');
    }	
     function get_event_id($id_cms)
    {
        $this->db->where('id_cms', $id_cms);
        $query = $this->db->get('cms');
        
        return $query->result();
    }

     function getvideoutama()
    {
     
        $this->db->where('video_name', 'utama');
        $query = $this->db->get('video_front');
        
        return $query->row();
    }

     function video()
    {
     
        $query = $this->db->get('video_front');
        
        return $query->result();
    }

     function getvideoall()
    {
        $this->db->where('is_utama', 0);
        $query = $this->db->get('video_front');
        
        return $query->result();
    }
    
    function getVideMicroLearning()
    {
        $this->db->where('is_utama', 0);
        $this->db->limit(4);
        $query = $this->db->get('video_micro_learning');
        return $query->result();
    }

    function get_event_by_id($id)
    {
        $this->db->where('id_event', $id);
        $query = $this->db->get('cms_event');
		$event = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
		if($event){
			$this->db->where('id_event', $id);
			$this->db->order_by('pos','asc');
			$images = $this->db->get('events_images');
			if($images->num_rows() > 0){
				$images = $images->result();
				foreach($images as $image){
					$event['images'][$image->pos] = $image;
				}
			}
			$this->db->where('id_event', $id);
			$this->db->order_by('pos','asc');
			$videos = $this->db->get('events_video');
			if($videos->num_rows() > 0){
				$videos = $videos->result();
				foreach($videos as $video){
					$event['videos'][$video->pos] = $video;
				}
			}			
		}
        return $event;
    }
    
    public function top_tiga_event($page=0, $order_by = 'tanggal_awal', $sorted = 'asc')
    {
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('3',$page);
        $query = $this->db->get('cms_event');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }


    public function event($limit = 10, $offset = 0)
    {

       // $this->db->limit($limit,$offset);
        $this->db->order_by('tgl_kirim','desc');
        $this->db->join('cms_kategori','cms.id_kategori_cms = cms_kategori.id_kategori');
        $query = $this->db->get('cms');
        
        return $query->result();
    }

    public function event_translate($limit = 10, $offset = 0)
    {

        $this->db->limit($offset,$limit);
        $this->db->order_by('tgl_publish','desc');
        $this->db->join('admin_login','admin_login.id_admin = cms.id_admin_pic','left');
        $query = $this->db->get('cms');
        
        return $query->result();
    }

    public function event_reporter($limit = 10, $offset = 0)
    {
        $id_user = $this->session->userdata('id_admin');
        $this->db->limit($offset,$limit);
        $this->db->order_by('tgl_publish','desc');
        $this->db->where('cms.id_reporter',$id_user);
        $this->db->join('admin_login','admin_login.id_admin = cms.id_reporter');
        $query = $this->db->get('cms');
        
        return $query->result();
    }

    function GetPengumuman($limit = 8, $offset = 0){

        $query = $this->db->query('SELECT * FROM `cms` WHERE CURDATE() >= tanggal_awal and CURDATE() <= tanggal_akhir AND status = "Published" AND id_kategori_cms = 1 AND is_utama = 1 LIMIT '.$limit.' OFFSET '.$offset.' order by tanggal_akhir asc');

        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result() : FALSE;

    }

     public function jml_pengumuman(){
            $this->db->where('id_kategori_cms',1);
            $this->db->where('status', 'Published');
            return $this->db->count_all_results('cms');
    }

    public function GetBerita($limit = 8, $offset = 0)
    {
        
        $this->db->select('c.*')->from('cms as c');
        if ($this->session->userdata('site_lang') == 'english') {
            $this->db->where('judul_eng is NOT NULL', NULL, FALSE);
        }
        $kategori = array(0,2,3,4,5,6,7,8,9);
        $this->db->where('status','Published');
        $this->db->where_in('id_kategori_cms',$kategori);
        $this->db->where('DATE(c.tgl_publish) <=',date('Y-m-d'));
        $this->db->order_by('c.tgl_publish','DESC');
        $this->db->limit($offset,$limit);
        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    
    }

    function getTema(){
        $query2= $this->db->query("SELECT * FROM Video_micro_learning_tema");
        return $query2;
    }

    public function GetDetailVideo_ML($limit = 8, $offset = 0,$searchid='')
    {
    
    $this->db->select('c.*')->from('video_micro_learning as c');
    if ($this->session->userdata('site_lang') == 'english') {
        $this->db->where('judul_eng is NOT NULL', NULL, FALSE);
    }
    // $kategori = array(0,2,3,4,5,6);
    // $this->db->where('status','Published');
    
    if($searchid != ''){
        // die();
        // $this->db->where('id_tema',$searchid);
        $this->db->like('id_tema', $this->db->escape_str($searchid));
    }
    
    $this->db->order_by('c.tanggal_upload','DESC');
    $this->db->limit($offset,$limit);
    $query = $this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : FALSE; 
    }

    public function GetBeritaLainnya($limit = 8, $offset = 0,$id_kategori = '')
    {
        
        $this->db->select('c.*')->from('cms as c');
        if ($this->session->userdata('site_lang') == 'english') {
            $this->db->where('judul_eng is NOT NULL', NULL, FALSE);
        }
        $this->db->where('status','Published');
        $this->db->where('id_kategori_cms',$id_kategori);
        $this->db->where('DATE(c.tgl_publish) <=',date('Y-m-d'));
        $this->db->order_by('c.tgl_publish','DESC');
        $this->db->limit($offset,$limit);
        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    
    }



      public function GetPengumuman2($limit = 8, $offset = 0)
    {
        
        $this->db->select('c.*')->from('cms as c');
        $this->db->where('status','Published');
        $this->db->where('id_kategori_cms',1);
        $this->db->order_by('c.tgl_publish','DESC');
        $this->db->limit($offset,$limit);
        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    
    }

     public function GetCerita($limit = 6, $offset = 0)
    {
        
        $this->db->select('c.*')->from('cms as c');
        
        $this->db->where('status','Published');
        $this->db->where('id_kategori_cms',2);
        $this->db->order_by('c.tgl_publish','DESC');
        $this->db->limit($offset,$limit);
        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    
    }


    public function GetAllBerita($page=0, $order_by = 'tgl_kirim', $sorted = 'desc')
    {
        $this->db->select('c.*')->from('cms as c');
        
        $this->db->where('status','Published');
        $this->db->where('id_kategori_cms',0);
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('5',$page);

        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }

    public function getDetBerita($id_cms)
    {
        $this->db->select('*')->from('cms as c');
        $this->db->join('admin_login a','a.id_admin=c.pengirim','left');
        $this->db->where('status','Published');
        $this->db->where('id_cms',$id_cms);

        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }

    public function getDetBeritaPreview($id_cms)
    {
        $this->db->select('*')->from('cms as c');
        $this->db->join('admin_login a','a.id_admin=c.pengirim','left');
        $this->db->where('id_cms',$id_cms);

        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }

     public function getDetCerita($id_cms)
    {
        $this->db->select('*')->from('cms as c');
        $this->db->join('admin_login a','a.id_admin=c.pengirim','left');
        $this->db->where('status','Published');
        $this->db->where('id_cms',$id_cms);

        $query = $this->db->get();
        
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }

    public function jml_berita($id_kategori_cms=0){
        if ($this->session->userdata('site_lang') == 'english') {
            $this->db->where('judul_eng is NOT NULL', NULL, FALSE);
        }
        $this->db->where('id_kategori_cms',$id_kategori_cms);
        $this->db->where('status', 'Published');
        return $this->db->count_all_results('cms');
    }

    public function jml_video_microLearning($searchid=''){
        if ($this->session->userdata('site_lang') == 'english') {
            $this->db->where('judul_eng is NOT NULL', NULL, FALSE);
        }
        // $this->db->where('id_kategori_cms',$id_kategori_cms);
        // $this->db->where('status', 'Published');
        if($searchid != ''){
            $this->db->like('id_tema',$this->db->escape($searchid));
        }
        return $this->db->count_all_results('video_micro_learning');
    }

    public function jml_pengumuman2($kode_fakultas=0){
        $this->db->where('id_kategori_cms',1);
        $this->db->where('status', 'Published');
        return $this->db->count_all_results('cms');
        }

    public function jml_cerita($kode_fakultas=0){
        $this->db->where('id_kategori_cms',2);
        $this->db->where('status', 'Published');
        return $this->db->count_all_results('cms');
    }
    
    public function jml_event()
    {
        return $this->db->count_all('cms_event');
    }
    
    function insert_event($field)
    {
        $this->db->insert('cms_event', $field);
        return $this->db->affected_rows();
    }

    function update_event($id = 0, $field='')
    {
		$this->db->where('id_event',$id);
        $this->db->update('cms_event', $field);
        return $this->db->affected_rows();
    }

    function update_video($id=0,$link=''){

        $this->db->set('video_url','https://www.youtube.com/embed/'.$link);
        $this->db->where('id', $id);
        $this->db->update('video_front');

        return $this->db->affected_rows();
    }
	
    public function kategori()
    {
        $query = $this->db->get('kategori_cms');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
    function update_acara($id, $field)
    {
        $this->db->where('id_event', $id)->update('cms_event', $field);
        return $this->db->affected_rows();
    }
    
    function delete_acara($id)
    {
        $this->db->where('id_event', $id)->delete('cms_event');
        return $this->db->affected_rows();
    }
    
    public function pengumuman($page=0, $published = 'published', $order_by = 'tgl_publish', $sorted = 'desc', $kategori = 2)
    {
        $this->db->where(array('status' => $published, 'id_kategori_cms' => $kategori));
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('5',$page);
        $query = $this->db->get('cms');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
    public function top_tiga_peng($page=0, $published = 'Published', $order_by = 'tgl_publish', $sorted = 'desc', $kategori = 2)
    {
        $this->db->where(array('status' => $published));
        $this->db->order_by($order_by, $sorted);
        $this->db->limit('3',$page);
        $query = $this->db->get('cms');
        
        return ($query->num_rows() > 0) ? $query->result_array() : FALSE;
    }
    
    public function getMhsQuotes($limit = 10,$offset=0, $like='')
	{
		$this->db->select('dp.user_id, dp.nim, dp.display_name, dp.quotes, dp.show_quotes')->from('default_profiles dp')
		->join('users u','u.id = dp.user_id')
		->where('dp.quotes IS NOT NULL')
		->where('dp.quotes <>','')
		->where('substring(nim,4,2) > substr(now(),3,2)-7')
		->where('u.group_id = 2');
		if(!empty($like)){
			$this->db->like($like);
		}
		$this->db->limit($limit,$offset);
		
		return $this->db->get();
	}
	
	public function countTotalMhsQuotes($like=''){
		$this->db->select('COUNT(*) totalQuotes')->from('default_profiles dp')
		->join('users u','u.id = dp.user_id')
		->where('dp.quotes IS NOT NULL')
		->where('dp.quotes <>','')
		->where('u.group_id = 2');
		if(!empty($like)){
			$this->db->like($like);
		}		
		return $this->db->get()->row();
	}
	
	public function updateShowQuotes($user_id = 0, $show_quotes = 0)
	{
		$user = $this->db->select('dp.user_id, dp.nim, dp.display_name, dp.quotes, dp.show_quotes')->from('default_profiles dp')
		->join('users u','u.id = dp.user_id')
	//	->where('dp.quotes IS NOT NULL')
	//	->where('dp.quotes <>', '')
		->where('dp.user_id', $user_id)
		->where('u.group_id = 2')->get();
		
		if($user->num_rows() > 0){	
			$this->db->where('user_id',$user_id);
			$qpilihan = $this->db->get('quotes_pilihan');
			if($qpilihan->num_rows() == 0)
			{
				if($show_quotes != 0){
					$this->db->insert('quotes_pilihan',array(
						'user_id' => $user_id,
						'quotes' => $user->row()->quotes
					));
				}else{
					$this->db->where('user_id',$user_id);
					$this->db->delete('quotes_pilihan');				
				}
			}else{
				if($show_quotes == 0){
					$this->db->where('user_id',$user_id);
					$this->db->delete('quotes_pilihan');
				}else{
					$this->db->where('user_id',$user_id);
					$this->db->update('quotes_pilihan',array(
						'quotes' => $user->row()->quotes
					));
				}
			}
			$this->db->where('user_id',$user_id);
			$this->db->update('default_profiles',array(
				'show_quotes' => $show_quotes
			));				
		}
	}
	
	public function getShowQuotes()
	{
		$user = $this->db->select('dp.user_id, dp.nim, dp.display_name, qp.quotes, dp.show_quotes, dp.photo')->from('quotes_pilihan qp')
		->join('default_profiles dp','dp.user_id = qp.user_id')
		->join('users u','u.id = dp.user_id')
		->where('substring(nim,4,2) > substr(now(),3,2)-7')
		->where('u.group_id = 2')->get();
		
		return $user;
	}
    public function getkategori()
    {
        $this->db->order_by('cms_kategori.order_num');
        $query = $this->db->get('cms_kategori');
        
        return ($query->num_rows() > 0) ? $query->result() : 0;
    }

    public function get_pengumuman($is_utama=0,$is_bk=0)
    {
        if($is_utama == 1 && $is_bk == 0){

            $query = $this->db->query('SELECT * FROM `cms` WHERE CURDATE() >= tanggal_awal and CURDATE() <= tanggal_akhir AND status = "Published" AND id_kategori_cms = 1 AND is_utama = 1 order by tanggal_akhir asc');
        
        }else if($is_utama == 0 && $is_bk == 1){

            $query = $this->db->query('SELECT * FROM `cms` WHERE CURDATE() >= tanggal_awal and CURDATE() <= tanggal_akhir AND status = "Published" AND id_kategori_cms = 1 AND is_bk = 1 order by tanggal_akhir asc');

        }else{

             $query = $this->db->query('SELECT * FROM `cms` WHERE CURDATE() >= tanggal_awal and CURDATE() <= tanggal_akhir AND status = "Published" AND id_kategori_cms = 1 order by tanggal_akhir asc');
        }
        
        // $this->db->order_by('tanggal_akhir','desc');
        return $query->result();
    }

    

     public function get_pengumuman_limit()
    {
        $query = $this->db->query('SELECT * FROM `cms` WHERE CURDATE() >= tanggal_awal and CURDATE() <= tanggal_akhir AND status = "Published" AND id_kategori_cms = 1 order by tanggal_akhir asc LIMIT 5');
        // $this->db->order_by('tanggal_akhir','desc');
        return $query->result();
    }

    public function get_pengumuman_last_6month($is_utama = 0,$is_bk=0)
    {
        if ($is_utama == 1 && $is_bk == 0) {
            $query = $this->db->query('SELECT * FROM cms WHERE tgl_publish >= DATE_SUB(now(), INTERVAL 6 MONTH) AND status = "Published" AND id_kategori_cms = 1 AND is_utama = 1 order by tgl_publish desc');
        }elseif($is_utama == 0 && $is_bk == 1){
            $query = $this->db->query('SELECT * FROM cms WHERE tgl_publish >= DATE_SUB(now(), INTERVAL 6 MONTH) AND status = "Published" AND id_kategori_cms = 1 AND is_bk = 1 order by tgl_publish desc');
        }else{
            $query = $this->db->query('SELECT * FROM cms WHERE tgl_publish >= DATE_SUB(now(), INTERVAL 6 MONTH) AND status = "Published" AND id_kategori_cms = 1 order by tgl_publish desc');
        }

        
        // $this->db->order_by('tanggal_akhir','desc');
        return $query->result();
    }

    public function hint($id='')
    {
        $query = $this->db->query('UPDATE cms SET hint = hint + 1 WHERE id_cms = '.$id);
        // $this->db->order_by('tanggal_akhir','desc');
    }

      public function get_kategori_simkatmawa()
    {
        $this->db->join('simkatmawa_sub_kategori','simkatmawa_sub_kategori.id_kategori = simkatmawa_kategori.id_kategori');
        $query = $this->db->get('simkatmawa_kategori');
        
        return $query->result();
    }

       public function get_subkategori_simkatmawa($id_kategori='')
    {
        
        $this->db->where('id_kategori',$id_kategori);

        $query = $this->db->get('simkatmawa_sub_kategori');
        
        return $query->result();
    }

    public function getdatakategorisimkatmawa(){

        $query = $this->db->query(' SELECT * FROM `simkatmawa_sub_kategori` 
                                    JOIN simkatmawa_kategori 
                                    ON simkatmawa_sub_kategori.id_kategori = simkatmawa_kategori.id_kategori
                                    ORDER BY simkatmawa_sub_kategori.id_sub_kategori, simkatmawa_kategori.id_kategori DESC
                                ');
        
        return $query->result();

    }



    // UPDATE CATEGORY
   //SET count = count + 1
 //WHERE category_id = ?
}

/* End of file m_cms.php */ 
/* Location: ./application/models/m_cms.php */
