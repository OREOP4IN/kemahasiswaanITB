<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_cms');
        $this->load->library('calendar');
        $this->load->helper('fungsi_date');
        $this->load->model('M_chart');
        // var_dump($this->instanceConf["VIEWS_PATH"]);

    }

    // public function info($value='')
    // {
    //     phpinfo();
    // }

   

    public function ver2($page=0)
    {
        $this->load->library('pagination');
 
        $berita                 = $this->M_cms->GetBerita(0, 8);
        $berita_karir           = $this->M_cms->GetBeritaLainnya(0, 8,3);
        $berita_kewiraan        = $this->M_cms->GetBeritaLainnya(0, 8,4);
        $berita_konseling       = $this->M_cms->GetBeritaLainnya(0, 8,5);
        $berita_prestasi        = $this->M_cms->GetBeritaLainnya(0, 8,6);
        $berita_tracer          = $this->M_cms->GetBeritaLainnya(0, 8,7);
        $berita_beasiswa          = $this->M_cms->GetBeritaLainnya(0, 8,9);
        $quotes       = $this->M_cms->getShowQuotes();
        $headline     = $this->M_cms->headline(1,0);
        $pengumuman   = $this->M_cms->get_pengumuman(1,0);
        $video        = $this->M_cms->getvideoutama();
        $videoall     = $this->M_cms->getvideoall();


        $vars = array(
            'berita'                    =>  $berita,
            'berita_karir'              =>  $berita_karir,
            'berita_kewiraan'           =>  $berita_kewiraan,
            'berita_konseling'          =>  $berita_konseling,
            'berita_prestasi'           =>  $berita_prestasi,
            'berita_tracer'             =>  $berita_tracer,
            'berita_beasiswa'           =>  $berita_beasiswa,
            'quotes'        =>  $quotes,
            'headline'      =>  $headline,
            'pengumuman'    =>  $pengumuman,
            'video'         =>  $video,
            'videoall'      =>  $videoall
        );

        $this->load->view('new_version/partials/head', $vars);
        $this->load->view('new_version/partials/main-navigation', $vars);
        $this->load->view('new_version/index', $vars);
        $this->load->view('new_version/partials/announcement-section.php', $vars);
        $this->load->view('new_version/partials/news-section.php', $vars);
        $this->load->view('new_version/partials/cta.php', $vars);
        $this->load->view('new_version/partials/slider-testimonial.php', $vars);
        $this->load->view('new_version/partials/footer-nav.php', $vars);
        $this->load->view('new_version/partials/script.php', $vars);
        $this->load->view('new_version/partials/footer.php', $vars);
    }

    public function index($page=0)
    {
        $this->load->library('pagination');
 
        $berita                 = $this->M_cms->GetBerita(0, 8);
        $berita_karir           = $this->M_cms->GetBeritaLainnya(0, 8,3);
        $berita_kewiraan        = $this->M_cms->GetBeritaLainnya(0, 8,4);
        $berita_konseling       = $this->M_cms->GetBeritaLainnya(0, 8,5);
        $berita_prestasi        = $this->M_cms->GetBeritaLainnya(0, 8,6);
        $berita_tracer          = $this->M_cms->GetBeritaLainnya(0, 8,7);
        $berita_beasiswa          = $this->M_cms->GetBeritaLainnya(0, 8,9);
        $quotes       = $this->M_cms->getShowQuotes();
        $headline     = $this->M_cms->headline(1,0);
        $pengumuman   = $this->M_cms->get_pengumuman(1,0);
        $video        = $this->M_cms->getvideoutama();
        $videoall     = $this->M_cms->getvideoall();


        $vars = array(
            'berita'                    =>  $berita,
            'berita_karir'              =>  $berita_karir,
            'berita_kewiraan'           =>  $berita_kewiraan,
            'berita_konseling'          =>  $berita_konseling,
            'berita_prestasi'          =>  $berita_prestasi,
            'berita_tracer'             =>  $berita_tracer,
            'berita_beasiswa'           =>  $berita_beasiswa,
            'quotes'        =>  $quotes,
            'headline'      =>  $headline,
            'pengumuman'    =>  $pengumuman,
            'video'         =>  $video,
            'videoall'      =>  $videoall,
            'videoapi'      =>  ''
        );
        // var_dump($vars);

        $this->load->view('new_version/partials/head', $vars);
        $this->load->view('new_version/partials/main-navigation', $vars);
        $this->load->view('new_version/index_ver2', $vars);
        $this->load->view('new_version/partials/announcement-section.php', $vars);
        $this->load->view('new_version/partials/news-section.php', $vars);
        $this->load->view('new_version/partials/cta.php', $vars);
        $this->load->view('new_version/partials/slider-testimonial.php', $vars);
        $this->load->view('new_version/partials/footer-nav.php', $vars);
        $this->load->view('new_version/partials/script.php', $vars);
        $this->load->view('new_version/partials/footer.php', $vars);
    }

    function switchLang($language = "") {
        $language = ($language != "english") ? "indonesian" : "english";
        $this->session->set_userdata('site_lang', $language);
       
        redirect('beranda');
    }

    function tkt2021() {
        redirect('assets/buku/tkt-2021');
    }

     function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }


    public function log($id_konten='')
    {
        $ip = $this->getUserIP();
        $data = array(
            'ip' => $ip,
            'id_konten' => $id_konten
            );
        $this->db->insert('log_berita',$data);
    }

    public function read($jenis='', $id_cms='',$lang='')
    {
        $konten['konten']               = $this->M_cms->getDetBerita($id_cms);
        $konten['lang']                 = $lang;
        $konten['berita']               = $this->M_cms->getDetBerita($id_cms);

        $this->M_cms->hint($id_cms);
        $this->log($id_cms);

        if ($jenis=='berita'){
            $konten['jenis']                = $this->lang->line('utama:berita');
            $konten['konten_lainnya']       = $this->M_cms->GetBerita(0, 6);
            $konten['head']                = 'konten';
            $this->load->view('new_version/partials/head',$konten);
            $this->load->view('new_version/partials/main-navigation',$konten);
            $this->load->view('new_version/news-detail',$konten);
            $this->load->view('new_version/partials/footer-nav.php',$konten);
            $this->load->view('new_version/partials/script.php',$konten);
            $this->load->view('new_version/partials/footer.php',$konten);

        }elseif($jenis=='pengumuman'){
            $konten['jenis']                = $this->lang->line('utama:pengumuman');
            $konten['konten_lainnya']       = $this->M_cms->get_pengumuman_limit();
            $konten['head']                 = 'konten';
            $this->load->view('new_version/partials/head',$konten);
            $this->load->view('new_version/partials/main-navigation',$konten);
            $this->load->view('new_version/news-detail',$konten);
            $this->load->view('new_version/partials/footer-nav.php',$konten);
            $this->load->view('new_version/partials/script.php',$konten);
            $this->load->view('new_version/partials/footer.php',$konten);

        }else{

            echo "Not Found";
        
        }
        
    }

    public function read_preview($jenis='', $id_cms='',$lang='')
    {

        $konten['konten']               = $this->M_cms->getDetBeritaPreview($id_cms);
        $konten['lang']                 = $lang;
        $konten['berita']               = $this->M_cms->getDetBeritaPreview($id_cms);
        

    
        if ($jenis=='berita'){
            $konten['jenis']                = $this->lang->line('utama:berita');
            $konten['konten_lainnya']       = $this->M_cms->GetBerita(0, 6);
            $konten['head']                = 'konten';
            $this->load->view('new_version/partials/head',$konten);
            $this->load->view('new_version/partials/main-navigation',$konten);
            $this->load->view('new_version/news-detail',$konten);
            $this->load->view('new_version/partials/footer-nav.php',$konten);
            $this->load->view('new_version/partials/script.php',$konten);
            $this->load->view('new_version/partials/footer.php',$konten);

        }elseif($jenis=='pengumuman'){
            $konten['jenis']                = $this->lang->line('utama:pengumuman');
            $konten['konten_lainnya']       = $this->M_cms->get_pengumuman_limit();
            $konten['head']                 = 'konten';
            $this->load->view('new_version/partials/head',$konten);
            $this->load->view('new_version/partials/main-navigation',$konten);
            $this->load->view('new_version/news-detail',$konten);
            $this->load->view('new_version/partials/footer-nav.php',$konten);
            $this->load->view('new_version/partials/script.php',$konten);
            $this->load->view('new_version/partials/footer.php',$konten);

        }else{

            echo "Not Found";
        
        }
        
    }


    public function kipk(){
        $data['judul'] = (isset($kategori)? $kategori : 'Daftar Buku');
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/kip_k',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function buku($kategori='')
    {
        $data['judul'] = (isset($kategori)? $kategori : 'Daftar Buku');
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/buku-beasiswa',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');

    }

    public function pengumuman($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/pengumuman');
        $config['per_page']     = 8;
        $pengumuman             = $this->M_cms->GetPengumuman2($page, $config['per_page']);
        $config['total_rows']   = $this->M_cms->jml_pengumuman2();
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();

        $data = array(
            'page'          => $page,
            'pengumuman'    => $pengumuman,
            'pagination'    => $pagination
        );

        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/pengumuman',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function berita($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBerita($page, $config['per_page']);
        $config['total_rows']   = $this->M_cms->jml_berita();
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Terbaru',

        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');

    }

    public function berita_prestasi($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita_prestasi');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBeritaLainnya($page, $config['per_page'],6);
        $config['total_rows']   = $this->M_cms->jml_berita(6);
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Prestasi'
        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function berita_karir($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita_karir');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBeritaLainnya($page, $config['per_page'],3);
        $config['total_rows']   = $this->M_cms->jml_berita(3);
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Karir'
        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function berita_konseling($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita_konseling');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBeritaLainnya($page, $config['per_page'],5);
        $config['total_rows']   = $this->M_cms->jml_berita(5);
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Konseling'
        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function berita_kewirausahaan($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita_kewirausahaan');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBeritaLainnya($page, $config['per_page'],4);
        $config['total_rows']   = $this->M_cms->jml_berita(4);
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Kewirausahaan'
        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function berita_tracer($page=0)
    {
        $this->load->library('pagination');
        $config['base_url']     = base_url('beranda/berita_tracer');
        $config['per_page']     = 8;
        $berita                 = $this->M_cms->GetBeritaLainnya($page, $config['per_page'],7);
        $config['total_rows']   = $this->M_cms->jml_berita(7);
        
        $config = pagination_tpl_new($config);
        $config['attributes'] = array('class' => 'page-link');

        $pagination = new CI_Pagination();
        $pagination->initialize($config);
        $pagination = $pagination->create_links();


         $data = array(
            'page'          => $page,
            'berita'        => $berita,
            'pagination'    => $pagination,
            'title'         => 'Berita Tracer'
        );


        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/news',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

     public function visi_misi()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/vision-and-mission');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

     public function landasan_hukum()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/landasan_hukum');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

     public function tupoksi()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/tupoksi');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    function detail($id='') {
        $this->load->model('kegiatan_model');
        $this->load->model('kategori_model');
        $this->load->model('ormawa_model');

        if (is_string($id)) {
          redirect('beranda');
        }
        $where = array('id_kegiatan' => $id);

        $result = $this->kegiatan_model->get($where)->result();
        $data['kegiatan'] = $result;
        $data['other'] = $this->kegiatan_model->get_limit(5, 'DESC')->result();

        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/detail-kegiatan',$data);
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function lainnya()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/more-information');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');

    }

    public function kontak()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/contact');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function struktur_organisasi()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/organization-structure');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    

   
     public function pengabdian()
    {
        $this->load->view('new_version/partials/head');
        $this->load->view('new_version/partials/main-navigation');
        $this->load->view('new_version/pengabdian');
        $this->load->view('new_version/partials/footer-nav.php');
        $this->load->view('new_version/partials/script.php');
        $this->load->view('new_version/partials/footer.php');
    }

    public function daftar_kegiatan()
    {

          $this->load->library('pagination');
          $this->load->model('kegiatan_model');
          $this->load->model('kategori_model');
          $this->load->model('ormawa_model');
          $result = $this->kegiatan_model->get_list()->result();
          $config['base_url'] = base_url().'beranda/daftar_kegiatan/';
          $config['total_rows'] = count($result);
          $config['per_page'] = 20;
          $config['attributes'] = array('class' => 'page-link');
          $config = pagination_tpl_new($config);
          $from = $this->uri->segment(3);
          $this->pagination->initialize($config);
          $data['pagination'] = $this->pagination->create_links();
          $data['kegiatan'] = $this->kegiatan_model->data($config['per_page'], $from);

            $this->load->view('new_version/partials/head',$data);
            $this->load->view('new_version/partials/main-navigation',$data);
            $this->load->view('new_version/daftar-kegiatan',$data);
            $this->load->view('new_version/partials/footer-nav.php',$data);
            $this->load->view('new_version/partials/script.php',$data);
            $this->load->view('new_version/partials/footer.php',$data);

    }

    public function kkn() {
        // Create pagination
        $this->load->library('pagination');
        $this->load->model('kkn_model');
        $result = $this->kkn_model->get_list()->result();
        $config['base_url'] = base_url().'index.php/pengmas/kkn/';
        $config['total_rows'] = count($result);
        $config['per_page'] = 20;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        // Create data to be viewed
        $data['kknfoto'] = $this->kkn_model->get_limit(5, 'DESC')->result();
        $data['kkn'] = $this->kkn_model->data($config['per_page'], $from);
        $this->load->view('new_version/partials/head',$data);
        $this->load->view('new_version/partials/main-navigation',$data);
        $this->load->view('new_version/daftar-kkn',$data);
        $this->load->view('new_version/partials/footer-nav.php',$data);
        $this->load->view('new_version/partials/script.php',$data);
        $this->load->view('new_version/partials/footer.php',$data);
    }

    public function detail_kkn($id) {
        // Get single data
        $this->load->model('kkn_model');
        $this->load->model('kknfoto_model');
        $this->load->model('kkntema_model');
        $where = array('id_pengmas_kkn' => $id);
        $kkn = $this->kkn_model->get($where)->result();

        $data['kkn'] = $kkn;
        // Get all of the theme
        $data['kkntema'] = $this->kkntema_model->get($where)->result();;
        // Get all of the photos
        $data['kknfoto'] = $this->kknfoto_model->get($where)->result();
        // Get other newest 5 data
        $data['other'] = $this->kkn_model->get_limit(5, 'DESC')->result();

        $this->load->view('new_version/partials/head',$data);
        $this->load->view('new_version/partials/main-navigation',$data);
        $this->load->view('new_version/detail-kkn',$data);
        $this->load->view('new_version/partials/footer-nav.php',$data);
        $this->load->view('new_version/partials/script.php',$data);
        $this->load->view('new_version/partials/footer.php',$data);
    }

    public function faq()
    {
        $this->load->model('M_faq','mf');
        $data['faq_kategori'] = $this->mf->faq_kategori();
        $data['selected_faq_kategori'] = $data['faq_kategori'][0]->id_faq_kategori;
        $data['selected_name_kategori'] = $data['faq_kategori'][0]->nama_kategori;
        $data['faq'] = $this->mf->faqbyidkategori($data['faq_kategori'][0]->id_faq_kategori);
        $this->load->view('new_version/partials/head',$data);
        $this->load->view('new_version/partials/main-navigation',$data);
        $this->load->view('new_version/faq',$data);
        $this->load->view('new_version/partials/footer-nav.php',$data);
        $this->load->view('new_version/partials/script.php',$data);
        $this->load->view('new_version/partials/footer.php',$data);
    }

    public function faq_kategori($kategori='',$name='')
    {
        $this->load->model('M_faq','mf');
        $data['faq_kategori'] = $this->mf->faq_kategori();
        $data['faq'] = $this->mf->faqbyidkategori($kategori);
        $data['selected_faq_kategori'] = $kategori;
        $data['selected_name_kategori'] = $name;
        $this->load->view('new_version/partials/head',$data);
        $this->load->view('new_version/partials/main-navigation',$data);
        $this->load->view('new_version/faq',$data);
        $this->load->view('new_version/partials/footer-nav.php',$data);
        $this->load->view('new_version/partials/script.php',$data);
        $this->load->view('new_version/partials/footer.php',$data);
        //$this->output->enable_profiler(TRUE);
    }

    public function ormawa(){

        $this->load->model('M_organisasi');
        $himpunan=$this->M_organisasi->jumlah_organisasi('id_tipe_org="3" and status_aktif="1"');
        $ukm=$this->M_organisasi->jumlah_organisasi('id_tipe_org="1" and status_aktif="1"');
        $km=$this->M_organisasi->jumlah_organisasi('id_tipe_org="2" and status_aktif="1"');
        $vars=array(
        'himpunan'=>$himpunan,
        'ukm'=>$ukm,
        'km'=>$km
        );
        
        $this->load->view('new_version/partials/head',$vars);
        $this->load->view('new_version/partials/main-navigation',$vars);
        $this->load->view('new_version/organisasi-kemahasiswaan',$vars);
        $this->load->view('new_version/partials/footer-nav.php',$vars);
        $this->load->view('new_version/partials/script.php',$vars);
        $this->load->view('new_version/partials/footer.php',$vars);
        
    }


    public function getvideofromyt(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?key=AIzaSyBCvoEAtla45-zIN246aMXSGLfMBjAazJ8&channelId=UCwG1ovOa0G2u_zOzZNswZSw&part=snippet%2Cid&order=date&maxResults=5",


            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "bearer: AIzaSyBCvoEAtla45-zIN246aMXSGLfMBjAazJ8",
            "cache-control: no-cache",
            "postman-token: 14bda060-549c-aaa5-eb19-235c33d1464b"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            
            $items = json_decode($response);


                $arr_video = array();

            foreach($items->items as $item){

                if ($item->id->kind == "youtube#video") {
                    array_push($arr_video, $item->id->videoId);
                }

            }

        }
        // echo "<PRE>";
        // print_r($arr_video);
        // echo "</PRE>";
        return $arr_video;
      }

    public function kegiatan()
    {
            $this->load->view('new_version/partials/head');
            $this->load->view('new_version/partials/main-navigation');
            $this->load->view('new_version/kegiatan');
            $this->load->view('new_version/partials/footer-nav.php');
            $this->load->view('new_version/partials/script.php');
            $this->load->view('new_version/partials/footer.php');
    }

    public function kegiatan_list()
    {
        $this->load->model('M_kegiatanModel');
        $data = $this->M_kegiatanModel->getAllDataKegiatan_disetujui();
        $i = 0;
        $j = 0;
        $k = 0;

        foreach($data as $row) {
            if ($row->jum < 25 && $row->jum > 0) {
                $class = "grade-3";
                $nama_kegiatan = 'Kurang dari 25 Kegiatan';
            } elseif ($row->jum < 50 && $row->jum > 25) {
                $class = "grade-2";
                $nama_kegiatan = "25 - 50 Kegiatan";
            } elseif ($row->jum > 50) {
                $class = "grade-1";
                $nama_kegiatan = "Lebih dari 50 Kegiatan";
            }

            $out[] = array(
                "badge"     =>  false,
                'title'     =>  $nama_kegiatan,
                'date'      =>  $row->tgl,
                "classname" =>  $class
                );
        }
        echo json_encode($out); 
    }

    public function getKegiatanByTgl()
    {
        $this->load->model('M_kegiatanModel');

        $tgl = $this->input->post('tgl');
        $tgl = $this->security->xss_clean($tgl);
        $data = $this->M_kegiatanModel->getKegiatanByTgl($tgl);
        $url = base_url("assets/img/default_icon.png");
        $html = "";

        if (!empty($data)) {
            $count = 0;
            $html = '<select class="form-control" id="kampusfilter" onchange="filterListActivity(this)">
                            <option value="">-Pilih Kampus-</option>
                            <option value="1">Kampus Ganesha</option>
                            <option value="2">Kampus Jatinangor</option>
                            <option value="3">Kampus Cirebon</option>
                    </select><br>';

            foreach ($data as $key) {
                if (isset($key->logo)) {
                    $url = base_url("assets/berkas_kegiatan/".$key->logo);
                } else {
                    $url = base_url("assets/img/default_icon.png");
                }
                if(strlen($key->nama_kegiatan) > 89){
                    $temp = substr($key->nama_kegiatan, 0,89).'...';
                } else {
                    $temp = $key->nama_kegiatan;
                }

                $html = $html .  '<div class="card shadow-sm lift mb-3">'.
                                    '<div class="card-body">'.
                                        '<div class="d-flex align-items-center">'.
                                            '<div class="mr-lg-4 mr-3 flex-shrink-0"><img src="'.$url.'" width="80"></div>'.
                                            '<div class="w-100 border-left pl-lg-4 pl-3">'.
                                                '<div class="d-block">'.
                                                    '<div class="d-block text-sm mb-1">'.date("Y-m-d", strtotime($key->waktu_kegiatan_event)).'<label class="pull-right badge badge-primary">'.(isset($key->kampus) ?'Kampus '.$key->kampus:'').'</label>'.'</div>'.
                                                    '<h4 class="mb-1">'.$temp.'</h4>'.
                                                    '<div class="d-block font-weight-bold">'.$key->singkatan.'</div>'.
                                                '</div>'.
                                                '<div class="d-flex justify-content-end">'.
                                                    '<button type="button" class="btn btn-primary" data-toggle="modal" onclick="showModal('.$key->id_kegiatan.')"  data-target="#viewDetailKegiatan"><span class="icofont icofont-search-1 mr-2" data-id="'.$key->nama_kegiatan.'"></span>Lihat Detail</button>'.
                                                '</div>'.
                                            '</div>'.
                                        '</div>'.
                                    '</div>'.
                                '</div>';

            $count = $count + 1; 
            }
        } else {
            $html =  ' <li> '.
                        ' <div class="info">'.
                            '<p class="desc"><div class="text-center"><b>Tidak Ada Kegiatan..</b></div></p>'.
                        ' </div>'.
                    ' </li>';
        }
        echo $html;
    }

    public function getKegiatanByTglFilter()
    {
        $this->load->model('M_kegiatanModel');

        $tgl = $this->input->post('tgl');
        $tgl = $this->security->xss_clean($tgl);

        $kampus = $this->input->post('kampus');
        $kampus = $this->security->xss_clean($kampus);

        $data = $this->M_kegiatanModel->getKegiatanByTglFilter($tgl,$kampus);

        $url = base_url("assets/img/default_icon.png");
        
        $html = "";

        if (!empty($data)) {
            $count = 0;
            $html = '<select class="form-control" id="kampusfilter" onchange="filterListActivity(this)">
                            <option value="">-Pilih Kampus-</option>
                            <option '.($kampus == 1? 'selected':'' ).' value="1">Kampus Ganesha</option>
                            <option '.($kampus == 2? 'selected':'' ).' value="2">Kampus Jatinangor</option>
                            <option '.($kampus == 3? 'selected':'' ).' value="3">Kampus Cirebon</option>
                    </select><br>';

                foreach ($data as $key) {
                    if (isset($key->logo)) {
                        $url = base_url("assets/berkas_kegiatan/".$key->logo);
                    } else {
                        $url = base_url("assets/img/default_icon.png");
                    }
                    if(strlen($key->nama_kegiatan) > 89){
                        $temp = substr($key->nama_kegiatan, 0,89).'...';
                    } else {
                        $temp = $key->nama_kegiatan;
                    }

                    $html = $html .  '<div class="card shadow-sm lift mb-3">'.
                                        '<div class="card-body">'.
                                            '<div class="d-flex align-items-center">'.
                                                '<div class="mr-lg-4 mr-3 flex-shrink-0"><img src="'.$url.'" width="80"></div>'.
                                                '<div class="w-100 border-left pl-lg-4 pl-3">'.
                                                    '<div class="d-block">'.
                                                        '<div class="d-block text-sm mb-1">'.date("Y-m-d", strtotime($key->waktu_kegiatan_event)).'<label class="pull-right badge badge-primary">'.(isset($key->kampus) ?'Kampus '.$key->kampus:'').'</label>'.'</div>'.
                                                        '<h4 class="mb-1">'.$temp.'</h4>'.
                                                        '<div class="d-block font-weight-bold">'.$key->singkatan.'</div>'.
                                                    '</div>'.
                                                    '<div class="d-flex justify-content-end">'.
                                                        '<button type="button" class="btn btn-primary" data-toggle="modal" onclick="showModal('.$key->id_kegiatan.')"  data-target="#viewDetailKegiatan"><span class="icofont icofont-search-1 mr-2" data-id="'.$key->nama_kegiatan.'"></span>Lihat Detail</button>'.
                                                    '</div>'.
                                                '</div>'.
                                            '</div>'.
                                        '</div>'.
                                    '</div>';

                $count = $count + 1; 
            }
        } else {
            $html =  ' <li> '.
                        
                                    ' <div class="info">'.
                                        '<p class="desc"><div class="text-center"><b>Tidak Ada Kegiatan..</b></div></p>'.
                                    ' </div>'.
                                    
                                ' </li>';
        }
        echo $html;
    }

    public function getKegiatanByid()
    {
        $this->load->model('M_kegiatanModel');
        $id_kegiatan_param = $this->input->post('id_kegiatan_param');


        $data =  $this->M_kegiatanModel->getRincianKegiatan($id_kegiatan_param);
        $dataKegiatan = $this->M_kegiatanModel->getKegiatan($id_kegiatan_param);

        $head =        '<div class="d-block">'.
                        '<div class="table-responsive p-3 bg-light rounded mb-lg-4 mb-3">'.
                            '<table class="table mb-0">'.
                                '<tbody>'.
                                    '<tr>'.
                                        '<td class="font-weight-bolder">Nama&nbsp;Kegiatan</td>'.
                                        '<td>'.$dataKegiatan->nama_kegiatan.'</td>'.
                                    '</tr>'.
                                    '<tr>'.
                                        '<td class="font-weight-bolder">Tujuan</td>'.
                                        '<td>'.$dataKegiatan->tujuan.'</td>'.
                                    '</tr>'.
                                    '<tr>'.
                                        '<td class="font-weight-bolder">Deskripsi</td>'.
                                        '<td>'.$dataKegiatan->deskripsi_k.'</td>'.
                                    '</tr>'.
                                '</tbody>'.
                            '</table>'.
                        '</div>'.
                        '<h5 class="mb-3">Rincian Kegiatan</h5>'.
                        '<div class="table-responsive">'.
                            '<table class="table table-bordered">'.
                                '<thead class="thead-light">'.
                                    '<tr>'.
                                        '<th class="text-center">No</th>'.
                                        '<th>Nama Event</th>'.
                                        '<th>Tanggal</th>'.
                                        '<th>Waktu</th>'.
                                        '<th>Tempat</th>'.
                                        '<th>Kampus</th>'.
                                    '</tr></thead><tbody>';
        $html = '';
        $no=1;
            
        foreach ($data as $key) {
            if($key->status_verif == 'Diterima' || $key->status_verif == null):
                $ket='';
    
                if ($key->id_venue == 1) { 
                    $ket = "Luar Kampus";
                } else{ 
                    $ket = "Dalam Kampus";
                }
                $html = $html .'<tr>'.
                                '<td class="text-center">'.$no.'</td>'.
                                '<td>'.$key->nama_event.'</td>'.
                                '<td>'.tgl_indo($key->waktu_kegiatan_event)." - ".tgl_indo($key->waktu_kegiatan_event_akhir).'</td>'.
                                '<td>'.substr($key->waktu_mulai_event,0,5)." - ".substr($key->waktu_akhir_event,0,5).'</td>'.
                                '<td>'.$ket." - ".$key->tempat_kegiatan_event.'</td>'.
                                '<td>'.(isset($key->kampus) ?'Kampus '.$key->kampus:'').'</td>'.
                            '</tr>';
                $no++;
            endif;
        }
        $foot = " </tbody></table></div></div>";
        $html = $head.$html.$foot;
        echo $html;
    }
}

?>