<?php
  $user_session = $this->session->userdata('profile');
 // $nip = $user_session['nip'];
  $user_id = $this->session->userdata('user_id');
  $role_id = $this->session->userdata('role_id');
  $role_name = $this->session->userdata('role_name');
  //$has_foto = streamFotoPegawai($nip);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <title>Direktorat Kemahasiswaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="author" content="Tim Media Direktorat Kemahasiswaan ITB">
  <meta name="title" content="Direktorat Kemahasiswaan ITB">
  <meta property="og:title" content="Direktorat Kemahasiswaan ITB">
  <meta property="og:image" content="<?=base_url().'assets/img/itb.png'?>">
  <meta name="image" content="<?=base_url().'assets/img/itb.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/font-awesome/css/font-awesome.min.css"); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/AdminLTE.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/datepicker/datepicker3.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/zebra/public/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/custom.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("dataTables/media/css/dataTables.material.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <link rel="SHORCUT ICON" href="<?=base_url().'assets/img/icon.png'?>">
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="<?php echo base_url("assets/lib/jquery.min.js"); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/timepicker/bootstrap-timepicker.min.css"); ?>">
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url("dataTables/datatables.min.js"); ?>"></script>
  
 <link href="<?php echo base_url('assets/AdminLTE-2.3.0/plugins/sweetalert/css/sweetalert.css'); ?>" rel="stylesheet">
 <style>
   
#navbar-collapse{
 overflow-x: scroll;
 
}
  
  .navbar-collapse .nav {
    
    display: flex;
    flex-wrap: nowrap;
    /* padding-bottom: 1rem; */
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    
    /* -webkit-overflow-scrolling: touch; */
    
  }
  ul.nav li.dropdown {position: static;}
  .nav {
  width: 100%;
  text-align: center;
  word-spacing: -9em; /*white-space fix*/
}
.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.nav li {
  display: inline-block;
  text-align: left;
  word-spacing: normal; /*white-space fix*/
}
.nav li > a {
  position: relative;
}

.nav li li {
  display: block;
}
.nav ul {
  position: absolute;
  z-index: 104;
  top: 0;
  opacity: 0;
}

.nav li > ul{
  left:auto ;
  top: auto;
  
  opacity: 1;
}
   </style>
</head>
<!-- menu hider-->
<?php 
$module = $this->M_menu_sidebar->getMenu(); 
$users     = $this->session->userdata('akun_id');
$sipandai = NULL;
$sipandai  = $this->M_menu_sidebar->getUsers($users); 
$profil=$this->session->userdata('profile');

// print_r($profil);
// exit;

if(isset($profil)) {
  $profil=$this->session->userdata('profile');
}else{
  $profil['jenis_civitas'] = 'Karyawan';
}


//  print_r($this->session->all_userdata());
// exit;
 // print_r($profil);
 // echo'</pre>';
 // echo u;
 // echo'exit'; 

 //Menu Verifikasi Simkatmawa
 // 1=tim, 2=individu, 3=ditolak,4=ksw,5=organisasi,6=tim_lapangan,7=menu_simkatmawa,8=menu_prestasi_all, 9=verifikasi_paten/haki,10=simkatmawa_paten/haki, 11=verifikasi_kurasi, 12= simkatmawa_kurasi
?>
<!--  -->

 <?php 
$id_admin           = $this->session->userdata('id_admin');
$periode_registrasi         = $this->M_admin->getOrmawaRegistrasiPeriode();
$tgl_daftar_ulang           = $this->M_admin->getOrmawaDaftarUlang($id_admin);
$ormawatipe                 = $this->M_admin->getOrmawaTipe($id_admin);
// echo $this->session->userdata('menu_all');
?>

<body class="hold-transition skin-blue sidebar-mini">
  
  <div class="wrapper" style=" background-color:#ecf0f5; min-height:800px!important">


    <!-- 19017276  || $this->session->userdata('nim') ==  '0'  && $this->session->userdata('group_id') !=  ''  -->
    <?php //print_r($this->session->all_userdata());?>
          <header class="main-header">
            <a style="background-color: rgb(27, 121, 245);" href="<?php echo base_url()?>admin/prestasi" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <!-- <span class="logo-mini"><img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px"></span> -->
              <!-- logo for regular state and mobile devices -->
              <span  style="font-family:'PT Sans Narrow', sans-serif;font-size:12px;" class="logo-lg">
              <img src="<?php echo base_url()?>assets/new_template/assets_new/img/itb.png" width="40px">
              <!-- <img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px"> -->
              &nbsp;
              <b>Direktorat Kemahasiswaan ITB
                
              </b></span>
            </a>
            
                
            <nav style="background-color: rgb(27, 121, 245); height:45px;border: solid 0px red " class="navbar navbar-static-top">
            
              <div class="container" > 
                <div class="navbar-header">
                  <!-- <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a> -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                  </button>
                </div>
                <!-- <div class="scroll " style="background-color: rgb(27, 121, 245);height:45px"> -->
                                  <!-- <div style="background-color: #3c8dbc;height:25px" class="navbar-collapse pull-left collapse"  id="navbar-collapse"> -->
                <div style="background-color: rgb(27, 121, 245);height:45px" class="navbar-collapse pull-left collapse"  id="navbar-collapse">
                    <ul class="nav navbar-nav me-auto mb-2 mb-sm-0" id="menubar">
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          menu 1<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              menu 2
                            </a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    menu 3
                                  </a>
                                  </li>
                              </ul>
                            </li>
                        </ul>
                      </li> -->
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
                    
                        <!-- <li><a href="#">Link</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                        </ul>
                        </li> -->
                        
                    <li class="dropdown">
                      <?php if (!empty($nim)  || !empty($nim_tpb)) { ?>
                      <?php if ($hasil->num_rows() >= 1 && $hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs" && $mod['menu']->controller=="Prestasi_verifikasi" ) { ?>
                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php } else if ($mod['menu']->controller==null) { ?>
                          <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <?php } else if ($hasil->num_rows() >= 1 && $hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs" && $mod['menu']->controller=="Prestasi_verifikasi_tim" ) { ?>
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                            <?php } if ($hasil->num_rows() >= 1 && $mod['menu']->controller=="bansos_ormawa/C_bansos_ormawa/data_bansos_verifikasi_mhs") { ?>
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi") { ?>
                                  <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <?php } else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="prestasi_simkatmawa/simkatmawa_rekap") { ?>
                                  <a href="<?=base_url(''.$mod['menu']->controller) ?>">
                                  <?php } else if ($hasil2ditolak->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_ditolak") {?>
                                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_tahun") { ?>
                                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php }   else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_mhs_tahun") { ?>
                                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <?php } else if ($hasil2ksw->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/data_ksw") { ?>
                                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <?php }  else if ($hasil2organisasi->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/organisasi") { ?>
                                          <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                          <?php } else if ($hasil2timlapangan->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_verifikasi/tim_support") { ?>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_prestasi") { ?>
                                              <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                              <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_ksw") { ?>
                                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_penghargaan_tim_verifikasi") { ?>
                                                  <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                  <?php } else if ($hasil2simkatmawa->num_rows() >= 1  && $mod['menu']->nama=="Rekognisi") {?>
                                                   <a  href="#"class="dropdown-toggle" data-toggle="dropdown">
                                                  <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_ksw_tim_verifikasi") { ?>
                                                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
                                                    <?php } else if($mod['menu']->controller=="mahasiswa/Event") { ?>
                                                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <?php } else if ($mod['menu']->controller=="Tiket/pengajuan_tiket") { ?>
                                                      <a   class="dropdown-toggle" data-toggle="dropdown">
                                                      <?php } else if ($mod['menu']->controller=="mahasiswa/prestasi_mahasiswa/antrean") { ?>
                                                        <a  href="<?=base_url('admin/'.$mod['menu']->controller) ?>">
                                                        <?php } else if ($mod['menu']->controller=="beasiswa") {?>
                                                          <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                          <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->controller=="Prestasi_all") {?>
                                                            <a   class="dropdown-toggle" data-toggle="dropdown">
                                                            <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_organisasi") {?>
                                                              <a  class="dropdown-toggle" data-toggle="dropdown">
                                                              <?php } else if ($hasil2verifikasipaten->num_rows() >= 1 && $mod['menu']->controller=="verifikasi_paten") { ?>
                                                                <a   class="dropdown-toggle" data-toggle="dropdown">
                                                                <?php } else if ($hasil2simkatmawapaten->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_paten") {?>
                                                                  <a   class="dropdown-toggle" data-toggle="dropdown">
                                                                  <?php } else if ($hasil2verifikasikurasi->num_rows() >= 1 && $mod['menu']->controller=="verifikasi_kurasi") { ?>
                                                                    <a  class="dropdown-toggle" data-toggle="dropdown">
                                                                    <?php } else if ($hasil2simkatmawakurasi->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_kurasi") { ?>
                                                                      <a  class="dropdown-toggle" data-toggle="dropdown">
                                                                      <?php } else if ($hasil2simkatmawapengmas->num_rows() >= 1 && $mod['menu']->controller=="simkatmawa_pengmas") { ?>
                                                                        <a  class="dropdown-toggle" data-toggle="dropdown">
                                                                        <?php } else if ($mod['menu']->controller=="mahasiswa/konseling/index") { ?>
                                                                        <a  href="<?=base_url('admin/'.$mod['menu']->controller) ?>">
                                                                         <?php } else if ($mod['menu']->controller=="mahasiswa/Studium_generale/index") {?>
                                                                            <?php } else if ($mod['menu']->controller=="mahasiswa/pmw") {?>
                                                                          <a    class="dropdown-toggle" data-toggle="dropdown">
                                                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">                                                       
                      
                      <!-- <a > -->
                        <?php }?>
                                                          <?php if ($hasil->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Bantuan Kegiatan") { ?>
                                                            <i class="<?= $mod['menu']->icon ?>"></i> <span ><?php echo $mod['menu']->nama ?> <span class="caret"></span></span>
                                                          <?php } else if ($mod['menu']->nama=="Prestasi Mahasiswa") { ?>
                                                           <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?> <span class="caret"></span> </span>
                                                           <?php } else if ($hasil2simkatmawa->num_rows() >= 1  && $mod['menu']->nama=="Rekognisi") {?> 
                                                           <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?> <span class="caret"></span></span>
                                                         <?php } else if ($hasil2individu->num_rows() >= 1 && $mod['menu']->nama=="Prestasi yang belum diverif") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->controller=="mahasiswa/Prestasi_mahasiswa/add_penghargaan_tim_verifikasi") { ?>
                                                         <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                        <?php } else if ($hasil2ditolak->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Ditolak") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?></span>
                                                        <?php  }  else if ($hasil2organisasi->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Organisasi") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                        <?php }  else if ($hasil2ksw->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi KSW") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                        <?php }  else if ($hasil2timlapangan->num_rows() >= 1 && $mod['menu']->nama=="Tim Support") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                        <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA PRESTASI") { ?>
                                                          <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                        <?php }  else if ($mod['menu']->nama=="SIPANDAI") { ?>
                                                         <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                       <?php }  else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA KSW") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                      <?php } else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="Insert Prestasi") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                      <?php }else if ($hasil2simkatmawa->num_rows() >= 1 && $mod['menu']->nama=="Insert KSW Tim Verifikasi") { ?>
                                                        <i class="<?= $mod['menu']->icon ?>"></i> <span><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                      <?php } else if ($mod['menu']->nama=="Lomba Desain Interior") { ?>
                                                        <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                      <?php } else if ($mod['menu']->nama=="Tiket") { ?>
                                                        <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                      <?php } else if ($mod['menu']->nama=="Antrean") { ?>
                                                       <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                     <?php } else if ($mod['menu']->nama=="Beasiswa") {?>
                                                       <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                     <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->nama=="Prestasi ALL") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2prestasiall->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA ORGANISASI") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2tim->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA Rekap") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2verifikasipaten->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Paten/Haki") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2simkatmawapaten->num_rows() >= 1 && $mod['menu']->nama=="Simkatmawa Paten/Haki") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2verifikasikurasi->num_rows() >= 1 && $mod['menu']->nama=="Verifikasi Kurasi/Pameran") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2simkatmawakurasi->num_rows() >= 1 && $mod['menu']->nama=="Simkatmawa Kurasi/Pameran") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($hasil2simkatmawapengmas->num_rows() >= 1 && $mod['menu']->nama=="SIMKATMAWA Pengmas") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($mod['menu']->nama=="Konseling") { ?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?></span>
                                                    <?php } else if ($mod['menu']->nama=="Studium Generale") {?>
                                                      <i class="<?= $mod['menu']->icon ?> blink"></i> <span class="blink"><?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } else if ($mod['menu']->nama=="Kewirausahaan") {?>
                                                      <i class="<?= $mod['menu']->icon ?>"></i> <span class="blink"> <?php echo $mod['menu']->nama ?><span class="caret"></span></span>
                                                    <?php } ?>
                         <?php } ?>
                        
                        <!-- <div data-i18n="Konseling"><?php echo $mod['menu']->nama ?></div> -->
                     
                      </a>
                      
                      <?php if(count($mod['child']) > 0 ){ ?>
                        <ul  class="dropdown-menu" id="drop-menu" role="menu">
                          <?php foreach($mod['child'] as $r){ ?>
                              <li >
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
                      <li class="dropdown">
                         <?php if(count($mod['child']) > 0 ){ ?>
                          <a  href="<?=base_url('admin/'.$mod['menu']->controller) ?>" class="dropdown-toggle" data-toggle="dropdown">
                          <i class='bx bx-user'></i>
                          <div data-i18n="Konseling"><?php echo $mod['menu']->nama ?><span class="caret"></span></div>
                        </a>
                        <?php }else{?>
                        <a  href="<?=base_url('admin/'.$mod['menu']->controller) ?>"> 
                         <div data-i18n="Konseling"><?php echo $mod['menu']->nama ?></div>
                        </a>
                        <?php }?>
                        <?php if(count($mod['child']) > 0 ){ ?>
                          <ul  class="dropdown-menu" role="menu">
                            <?php foreach($mod['child'] as $r){ ?>
                                <li >
                                  <a href="<?=base_url('admin/'.$r->controller)?>">
                                    <i class="menu-link"> <div data-i18n=" <?=$r->nama ?>"> <?=$r->nama ?>  </div> </i>
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
                    <!-- </div> -->
              
              <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <ul class="dropdown-menu">
                    </li>
                    <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
                  </ul>
                </li>
                <li class="dropdown tasks-menu">
                  <ul class="dropdown-menu">
                <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                  <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
        
          <!-- <li class="user user-menu">
            
            dd
          </li> -->
              <!-- <li  class="dropdown user user-menu"> -->
            <!-- <a href="<?php echo base_url()?>admin/prestasi"> <button class=" btn btn-primary margin btn-sm"><i class=""></i>  Menu</button></a> -->
                      <!-- <a   href="<?php echo base_url()?>admin/prestasi/cleare_sessionHeader" >
                        <span class="fa fa-home text-white"> </span>Menu
                      </a>
              </li> -->
              <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown">
                      <?php 
                        $nim = ($this->session->userdata('nim') == 0 ? $this->session->userdata('nim_tpb') : $this->session->userdata('nim'));
                        $getUser = $this->M_admin->getUserProfile($nim); 


                      ?>
                        <?php if(empty($getUser->photo) || $nim == '') { ?>
                        <!-- <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image"> -->
                        <img src="<?php echo base_url().'assets/new_template/assets_new/img/user.png' ?>" class="user-image" alt="User Image">                      <?php }else{ ?>
                          <?php if ($this->session->userdata('jenis_civitas') == 'Mahasiswa'): ?>
                                <img src="<?=base_url().'assets/upload/'.$nim.'/'.$getUser->photo;?>" class="user-image" alt="User Image">
                          <?php else: ?>
                                <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image">
                          <?php endif ?>
                      
                        <?php } ?>
                        <span class="hidden-xs"><?=$this->session->userdata('name_user') ;?></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="background-color: rgb(27, 121, 245);">
                          <?php if(empty($getUser->photo) || $nim == '') { ?>
                          <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
                          <?php }else{ ?>
                          <?php if ($this->session->userdata('jenis_civitas') == 'Mahasiswa'): ?>
                                <img src="<?=base_url().'assets/upload/'.$nim.'/'.$getUser->photo;?>" class="user-image" alt="User Image">
                          <?php else: ?>
                                <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image">
                          <?php endif ?>
                          <?php } ?>
                          <p>
                            <?php echo $this->session->userdata('name_user') ;?>
                            <?php $User = $this->session->userdata('id_ITB') ;?>

                            <?php if(!empty($User)){ ?>
                              <?php $username = $this->session->userdata('id_ITB') ;?>
                              
                            <?php } else { ?>
                              <?php $username = $this->session->userdata('username') ;?>
                            <?php } ?>
                            
                          </p>
                          <p>
                            <?=$this->session->userdata('nama_prodi') ;?>
                            <?php $jenjang = $this->session->userdata('prodi_jenjang') ;?>
                            <?php if($jenjang) { ?>
                            Jenjang <?php echo $this->session->userdata('prodi_jenjang') ;?>
                            <?php } else { }?>

                          </p>
                        </li>
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="<?=base_url().'admin/prestasi/user_profile/'.$username;?>" class="btn bg-primary btn-flat margin"><span class="glyphicon glyphicon-user"></span> Profile</a>
                          </div>  
                          <div class="pull-right">
                            <a href="<?=base_url().'admin/login/logout'?>" class="btn bg-maroon btn-flat margin"><span class="glyphicon glyphicon-off"></span> Log out</a>
                          </div>
                        </li>
          </ul>
          </li>
        </ul>

      </div>

      </div>

      </nav>
        <!-- <div class="pull-right" > -->
          
      <!-- </div> -->
      </header>
     

<!-- </div> -->