<!DOCTYPE html>


<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo base_url()?>assets/new_template/assets_new/"
  data-template="horizontal-menu-template">
<head>
  <!-- <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description" content="" /> -->

  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Direktorat Kemahasiswaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta charset="utf-8">
  <meta name="author" content="Tim Media Direktorat Kemahasiswaan ITB">
  <meta name="title" content="Direktorat Kemahasiswaan ITB">
  <meta property="og:title" content="Direktorat Kemahasiswaan ITB">
  <meta property="og:image" content="<?php echo base_url()?>assets/new_template/assets_new/img/itb.png">
  <meta name="image" content="<?php echo base_url()?>assets/new_template/assets_new/img/itb.png">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/new_template/assets_new/img/itb.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" /> -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/assets_new/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo base_url()?>assets/new_template/assets_new/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="<?php echo base_url()?>assets/new_template/assets_new/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo base_url()?>assets/new_template/assets_new/js/config.js"></script>
  
  <!-- css lama -->
 
  <style type="text/css">
    #navbar-collapse{
     max-width: 1000px;
    }
    </style>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <!-- Navbar -->

      <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-xxl">
          <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="#" class="app-brand-link gap-2">
              <span class="logo-mini"><img src="<?php echo base_url()?>assets/new_template/assets_new/img/itb.png" width="40px"></span>
              </span>
              <!-- //app-brand-text -->
              <span class="demo menu-text fw-bolder text-wrap">Direktorat Kemahasiswaan ITB</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?php echo base_url().'assets/new_template/assets_new/img/user.png' ?>" class="w-px-40 h-auto rounded-circle" alt="User Image">
                    <!-- <img src="<?php echo base_url()?>assets/new_template/assets_new/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    
                    <a class="dropdown-item" href="<?=base_url().'admin/prestasi/user_profile/'.$this->session->userdata('username') ?>">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                          <?php 
                            $nim = ($this->session->userdata('nim') == 0 ? $this->session->userdata('nim_tpb') : $this->session->userdata('nim'));
                            $getUser = $this->M_admin->getUserProfile($nim); 
                          ?>
                        <?php if(empty($getUser->photo) || $nim == '') { ?>
                        <img src="<?php echo base_url().'assets/new_template/assets_new/img/user.png' ?>" class="w-px-40 h-auto rounded-circle" alt="User Image">
                        <?php }else{ ?>
                          <?php if ($this->session->userdata('jenis_civitas') == 'Mahasiswa'): ?>
                                <img src="<?=base_url().'assets/upload/'.$nim.'/'.$getUser->photo;?>" class="w-px-40 h-auto rounded-circle" alt="User Image">
                          <?php else: ?>
                                <img src="<?php echo base_url().'assets/new_template/assets_new/img/user.png' ?>" class="w-px-40 h-auto rounded-circle" alt="User Image">
                          <?php endif ?>
                      
                        <?php } ?>
                            <!-- <img src="<?php echo base_url()?>assets/new_template/assets_new/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          
                          <span class="fw-semibold d-block text-wrap">
                            <?php echo $this->session->userdata('name_user') ;?>
                            <?php $User = $this->session->userdata('id_ITB') ;?>

                            <?php if(!empty($User)){ ?>
                              <?php $username = $this->session->userdata('id_ITB') ;?>
                              
                            <?php } else { ?>
                              <?php $username = $this->session->userdata('username') ;?>
                            <?php } ?>
                          </span>
                          <small class="text-muted">
                             <?=$this->session->userdata('nama_prodi') ;?>
                            <?php $jenjang = $this->session->userdata('prodi_jenjang') ;?>
                            <?php if($jenjang) { ?>
                            Jenjang <?php echo $this->session->userdata('prodi_jenjang') ;?>
                            <?php } else { }?>
                          </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?=base_url().'admin/prestasi/user_profile/'.$username;?>">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item"   href="<?=base_url().'admin/login/logout'?>">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
            <input type="text" class="form-control search-input border-0" placeholder="Search..."
              aria-label="Search..." />
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </div>
        </div>
      </nav>
      <!-- / Navbar -->
      <?php 

// $module = $this->M_menu_sidebar->getMenu(); 
// $users     = $this->session->userdata('akun_id');
// $sipandai = NULL;
// $sipandai  = $this->M_menu_sidebar->getUsers($users); 
// $profil=$this->session->userdata('profile');

$module = $this->M_menu_sidebar->getMenu(); 
$users     = $this->session->userdata('akun_id');
$sipandai = NULL;
$sipandai  = $this->M_menu_sidebar->getUsers($users); 
$profil=$this->session->userdata('profile');
if (isset($profil)) {
  $profil=$this->session->userdata('profile');
}else{
  $profil['jenis_civitas'] = 'Karyawan';

}
// print_r($users);
// echo '<br>';

// print_r($profil);
// exit;
?>

<?php 
$id_admin           = $this->session->userdata('id_admin');
$periode_registrasi         = $this->M_admin->getOrmawaRegistrasiPeriode();
$tgl_daftar_ulang           = $this->M_admin->getOrmawaDaftarUlang($id_admin);
$ormawatipe                 = $this->M_admin->getOrmawaTipe($id_admin);

?>
 
 <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Menu -->
          <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
            <div class="container-xxl d-flex h-100">
              <ul class="menu-inner">
                <?php foreach($module as $k=>$mod){ ?>
                  <?php if ($profil['jenis_civitas']=="Mahasiswa" || $profil['jenis_civitas']=="Alumni" || $this->session->userdata('group_id')==2) { ?>
                      <?php  $this->load->model('M_bansos_ormawa');
                      $data['nim']= $profil['nim'];
                      $nim=$profil['nim'];
                      if($nim != 0){
                      $hasil = $this->M_bansos_ormawa->cek_user($nim);
                      $nim=$profil['nim'];
                      
                    } else {
                      $nim_tpb=$profil['nim_tpb'];
                      //$data['nim_tpb']= $profil['nim_tpb'];
                      $hasil = $this->M_bansos_ormawa->cek_user($nim_tpb);
                    }
                    if(isset($nim)){
                      $hasil2individu = $this->M_admin->cek_user($nim,2);
                      $hasil2tim = $this->M_admin->cek_user($nim,1);
                      $hasil2ditolak = $this->M_admin->cek_user($nim,3);
                      $hasil2ksw = $this->M_admin->cek_user($nim,4);
                      $hasil2organisasi = $this->M_admin->cek_user($nim,5);
                      $hasil2timlapangan = $this->M_admin->cek_user($nim,6);
                      $hasil2simkatmawa = $this->M_admin->cek_user($nim,7);
                      $hasil2prestasiall = $this->M_admin->cek_user($nim,8);
                      $hasil2verifikasipaten= $this->M_admin->cek_user($nim,9);
                      $hasil2simkatmawapaten= $this->M_admin->cek_user($nim,10);
                      $hasil2verifikasikurasi= $this->M_admin->cek_user($nim,11);
                      $hasil2simkatmawakurasi= $this->M_admin->cek_user($nim,12);
                      $hasil2simkatmawapengmas= $this->M_admin->cek_user($nim,13);
                      $konseling= $this->M_admin->cek_user($nim,14);
                      //$simkatmawa_rekap = $this->M_admin->cek_user($nim,9); 
                    } else {
                      $hasil2individu = $this->M_admin->cek_user($nim_tpb,2);
                      $hasil2tim = $this->M_admin->cek_user($nim_tpb,1);
                      $hasil2ditolak = $this->M_admin->cek_user($nim_tpb,3);
                      $hasil2ksw = $this->M_admin->cek_user($nim_tpb,4);
                      $hasil2organisasi = $this->M_admin->cek_user($nim_tpb,5);
                      $hasil2timlapangan = $this->M_admin->cek_user($nim_tpb,6);
                      $hasil2simkatmawa = $this->M_admin->cek_user($nim_tpb,7);
                      $hasil2prestasiall = $this->M_admin->cek_user($nim_tpb,8);
                      $hasil2verifikasipaten= $this->M_admin->cek_user($nim_tpb,9);
                      $hasil2simkatmawapaten= $this->M_admin->cek_user($nim_tpb,10);
                      $hasil2verifikasikurasi= $this->M_admin->cek_user($nim_tpb,11);
                      $hasil2simkatmawakurasi= $this->M_admin->cek_user($nim_tpb,12);
                      $hasil2simkatmawapengmas= $this->M_admin->cek_user($nim_tpb,13);
                      $konseling=$this->M_admin->cek_user($nim_tpb,14);
                      //$simkatmawa_rekap = $this->M_admin->cek_user($nim_tpb,9);   
                    }?>
                    
                    <li class="menu-item">
                      <?php if (!empty($nim)  || !empty($nim_tpb)) { ?>
                      <?php if ($hasil->num_rows() >= 1 && $hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs" && $mod['menu']->controller=="Prestasi_verifikasi" ) { ?>
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <?php } else if ($mod['menu']->controller==null) { ?>
                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <?php } else if ($hasil->num_rows() >= 1 && $hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs" && $mod['menu']->controller=="Prestasi_verifikasi_tim" ) { ?>
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <?php } if ($hasil->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs") { ?>
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi") { ?>
                                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                                  <?php } else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="prestasi_simkatmawa/simkatmawa_rekap") { ?>
                                  <a href="<?=base_url(''.$mod['menu']->controller) ?>">
                                  <?php } else if ($hasil2ditolak->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_ditolak") {?>
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_tahun") { ?>
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <?php }   else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_tahun") { ?>
                                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                                      <?php } else if ($hasil2ksw->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_ksw") { ?>
                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <?php }  else if ($hasil2organisasi->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/organisasi") { ?>
                                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                                          <?php } else if ($hasil2timlapangan->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/tim_support") { ?>
                                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                            <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_prestasi") { ?>
                                              <a href="javascript:void(0)" class="menu-link menu-toggle">
                                              <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_ksw") { ?>
                                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_penghargaan_tim_verifikasi") { ?>
                                                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                  <?php } else if ($hasil2simkatmawa->num_rows() >= 1  && $mod['menu']->nama=="Rekognisi") {?>
                                                   <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                  <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_ksw_tim_verifikasi") { ?>
                                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                    <?php } else if($mod['menu']->controller=="mahasiswa/Event") { ?>
                                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                    <?php } else if ($mod['menu']->controller=="Tiket/pengajuan_tiket") { ?>
                                                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                      <?php } else if ($mod['menu']->controller=="mahasiswa/antrean") { ?>
                                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                        <?php } else if ($mod['menu']->controller=="beasiswa") {?>
                                                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                          <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_all") {?>
                                                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                            <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_organisasi") {?>
                                                              <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                              <?php } else if ($hasil2verifikasipaten->num_rows() >= 1 && $mod['menu']->controller=="verifikasi_paten") { ?>
                                                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                <?php } else if ($hasil2simkatmawapaten->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_paten") {?>
                                                                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                  <?php } else if ($hasil2verifikasikurasi->num_rows() >= 1 && $mod['menu']->controller=="verifikasi_kurasi") { ?>
                                                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                    <?php } else if ($hasil2simkatmawakurasi->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_kurasi") { ?>
                                                                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                      <?php } else if ($hasil2simkatmawapengmas->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_pengmas") { ?>
                                                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                        <?php } else if ($mod['menu']->controller=="mahasiswa/konseling/index") { ?>
                                                                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                         <?php } else if ($mod['menu']->controller=="mahasiswa/Studium_generale/index") {?>
                                                                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                                                                            <?php } else if ($mod['menu']->controller=="mahasiswa/pmw") {?>
                                                                             <a href="javascript:void(0)" class="menu-link menu-toggle">                                                       
                      
                      <!-- <a > -->
                        <?php }?>
                                                          <?php if ($hasil->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Bantuan Kegiatan") { ?>
                                                            <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                          <?php } else if ($mod['menu']->nama=="Prestasi Mahasiswa") { ?>
                                                           <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                           <?php } else if ($hasil2simkatmawa->num_rows() >= 1  && $mod['menu']->nama=="Rekognisi") {?> 
                                                           <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                         <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->nama=="Prestasi yang belum diverif") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_penghargaan_tim_verifikasi") { ?>
                                                         <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php } else if ($hasil2ditolak->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Ditolak") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php  }  else if ($hasil2organisasi->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Organisasi") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php }  else if ($hasil2ksw->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi KSW") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php }  else if ($hasil2timlapangan->num_rows() >= 1 && $mod['menu']->nama=="Tim Support") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA PRESTASI") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php }  else if ($mod['menu']->nama=="SIPANDAI") { ?>
                                                         <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                       <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA KSW") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                      <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="Insert Prestasi") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                      <?php }else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="Insert KSW Tim Verifikasi") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                      <?php } else if ($mod['menu']->nama=="Lomba Desain Interior") { ?>
                                                        <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                      <?php } else if ($mod['menu']->nama=="Tiket") { ?>
                                                        <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                      <?php } else if ($mod['menu']->nama=="Antrean ULT") { ?>
                                                       <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                     <?php } else if ($mod['menu']->nama=="Beasiswa") {?>
                                                       <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                     <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->nama=="Prestasi ALL") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA ORGANISASI") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA Rekap") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2verifikasipaten->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Paten/Haki") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2simkatmawapaten->num_rows() >= 1 && $mod['menu']->nama=="Simkatmawa Paten/Haki") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2verifikasikurasi->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Kurasi/Pameran") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2simkatmawakurasi->num_rows() >= 1 && $mod['menu']->nama=="Simkatmawa Kurasi/Pameran") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($hasil2simkatmawapengmas->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA Pengmas") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($mod['menu']->nama=="Konseling") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($mod['menu']->nama=="Studium Generale") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($mod['menu']->nama=="Kewirausahaan") {?>
                                                      <i class="<?= $mod['menu']->icon ?>"></i> <span class="blink"> <?php echo $mod['menu']->nama ?></span>
                                                    <?php } ?>
                         <?php } ?>
                        
                        <!-- <div data-i18n="Konseling"><?php echo $mod['menu']->nama ?></div> -->
                     
                      </a>
                      
                      <?php if(count($mod['child']) > 0 ){ ?>
                        <ul class="menu-sub">
                          <?php foreach($mod['child'] as $r){ ?>
                              <li class="menu-item">
                                <a href="<?=base_url('admin/'.$r->controller)?>">
                                  <i class="menu-link"> <div data-i18n=" <?=$r->nama ?>"> <?=$r->nama ?> </div> </i>
                                </a>
                              </li>                            
                              <?php } ?>
                          </li>
                        </ul>
                      <?php }?>
                    </li>
                  <?php }else{ ?>
                    
                    <?php if (($mod['menu']->id == 36 || $mod['menu']->id == 35 ) AND !is_object($sipandai)): ?>
                      <?php elseif ($mod['menu']->id == 35 AND $sipandai->kode_fakultas == NULL): ?>
                      <?php elseif ($mod['menu']->id == 36 AND $sipandai->kode_fakultas != NULL): ?>
                      <?php elseif ($mod['menu']->id == 205 AND $this->session->userdata('id_admin')!=233): ?>
                    <?php else: ?>       
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class='bx bx-user'></i>
                          <div data-i18n="Konseling"><?php echo $mod['menu']->nama ?></div>
                        </a>
                        <?php if(count($mod['child']) > 0 ){ ?>
                          <ul class="menu-sub">
                            <?php foreach($mod['child'] as $r){ ?>
                                <li class="menu-item">
                                  <a href="<?=base_url('admin/'.$r->controller)?>">
                                    <i class="menu-link"> <div data-i18n=" <?=$r->nama ?>"> <?=$r->nama ?> </div> </i>
                                  </a>
                                </li>                            
                                <?php } ?>
                            </li>
                          </ul>
                        <?php }?>
                      </li>
                    <?php endif ?> 
                  <?php }?>
                <?php } ?>
                <?php if ($this->session->userdata('role_name') == 'organisasi-kemahasiswaan'){ ?>
                    <?php if ($ormawatipe->id_tipe_org == 1 && date('Y-m-d') >= $periode_registrasi->tanggal_mulai && date('Y-m-d') <= $periode_registrasi->tanggal_akhir && $tgl_daftar_ulang->daftar_ulang == NULL ){ ?>
                    <li style="background-color: red; color: white"><a href="<?= base_url('admin/prestasi/user_profile/ukm') ?>"><i class="<?= $mod['menu']->icon ?>"></i> DAFTAR ULANG UKM </a></li>
                  <?php } ?> 
                <?php } ?>
              </ul>
            </div>
          </aside>
          <!-- / Menu -->

