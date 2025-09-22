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
<style>

 li > a:after{
    content: '';
    display: block;
    height: 1.5px;
    background: #FBC02D;
    transform: scaleX(0);
    transition: transform .3s;
}
 li > a:hover:after{
    transform: scaleX(1);
    transition: transform .3s;
}
.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 13px;
}
 /* .active{
    color: #FBC02D !important;
} */
</style>
<?php 
$id_admin           = $this->session->userdata('id_admin');
$periode_registrasi         = $this->M_admin->getOrmawaRegistrasiPeriode();
$tgl_daftar_ulang           = $this->M_admin->getOrmawaDaftarUlang($id_admin);
$ormawatipe                 = $this->M_admin->getOrmawaTipe($id_admin);
// echo $this->session->userdata('menu_all');
?>

<body class="hold-transition skin-blue sidebar-mini">
  
  <div class="wrapper" style=" <?php if($this->session->userdata('nim') == '20715025'  
  || $this->session->userdata('group_id')=='5' || $this->session->userdata('group_id') =='13' || $this->session->userdata('group_id') =='4' 
  || $this->session->userdata('group_id') =='7' || $this->session->userdata('group_id') =='99'
  || $this->session->userdata('group_id') =='2'){ ?>background-color:#ecf0f5; <?php } ?>min-height:800px!important">

  <?php if($this->session->userdata('nim') == '20715025'  
        || $this->session->userdata('nim') ==  '19017276'
       || $this->session->userdata('group_id') =='5' 
       || $this->session->userdata('group_id') =='13' 
       || $this->session->userdata('group_id') =='4'
       || $this->session->userdata('group_id') =='7' 
       ||  $this->session->userdata('group_id') =='99'
       || $this->session->userdata('group_id') =='2'){?>
    <!-- 19017276  || $this->session->userdata('nim') ==  '0'  && $this->session->userdata('group_id') !=  ''  -->
    <?php //print_r($this->session->all_userdata());?>
          <header class="main-header">
            <a href="<?php echo base_url()?>admin/prestasi" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px"></span>
              <!-- logo for regular state and mobile devices -->
              <span  style="font-family:'PT Sans Narrow', sans-serif;" class="logo-lg"><img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px">&nbsp;<b>Kemahasiswaan
                
              </b></span>
            </a>
            
                
            <nav style="height:45px;border: solid 0px red " class=" navbar navbar-static-top">
            
              <div class="container"> 
                <div class="navbar-header">
                  <!-- <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a> -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                  <i class="fa fa-bars"></i>
                  </button>
                  
                </div>

                <!--    -->
                <div style="background-color: #3c8dbc;height:25px" class="navbar-collapse pull-left collapse"  id="navbar-collapse">
                  <ul class="cek nav navbar-nav">
                    <?php foreach($module as $k=>$mod){ ?>
                      
                        <?php if ($profil['jenis_civitas']=="Mahasiswa" || $profil['jenis_civitas']=="Alumni" || $this->session->userdata('group_id')==2) { ?>
                          <?php  $this->load->model('M_bansos_ormawa');
                                $data['nim']= $profil['nim'];
                                $nim=$profil['nim'];
                            //  echo'<pre>';
                            // print_r($mod);
                            // echo'</pre>';
                            // exit; 
                            if($nim != 0){
                            $hasil = $this->M_bansos_ormawa->cek_user($nim);
                            $nim=$profil['nim'];
                            
                          } else {
                            $nim_tpb=$profil['nim_tpb'];
                            //$data['nim_tpb']= $profil['nim_tpb'];
                            $hasil = $this->M_bansos_ormawa->cek_user($nim_tpb);
                          }

                          // echo $nim;
                          // echo '<br>';
                          // echo $nim_tpb;
                          // exit;

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
                         
                        
                          <?php  
                          if($this->session->userdata('menu_all') ==  $mod['menu']->nama){ ?>
                            <li class="dropdown" id="<?php echo $mod['menu']->nama ?>">
                                <?php if($mod['menu']->controller=="mahasiswa/konseling/index") { ?>
                                    <a href="<?=base_url('admin/'.$mod['menu']->controller) ?>"  ><?php echo $mod['menu']->nama ?> </a>
                                <?php }else {?>
                                    <?php if(count($mod['child']) > 0 ){ ?>                  
                                      <ul id="menu_header" class="nav navbar-nav" role="menu">
                                        <?php foreach($mod['child'] as $r){ ?>
                                              <li style="font-size:13px;font-weight:bold;outline:none;opacity: 1; font-family:'PT Sans Narrow', sans-serif;" <?php if(current_url() == base_url('admin/'.$r->controller)){ echo 'class="active";';}else{ echo '';}?> ><a href="<?=base_url('admin/'.$r->controller)?>"></i> <?=$r->nama ?> </a> </li>
                                        <?php } ?>
                                      </ul>
                                    <?php } ?>
                                <?php } ?>
                            </li>  
                          <?php }?>
                        <?php }else{ ?>

                          <?php if (($mod['menu']->id == 36 || $mod['menu']->id == 35 ) AND !is_object($sipandai)): ?>

                            <?php elseif ($mod['menu']->id == 35 AND $sipandai->kode_fakultas == NULL): ?>

                            <?php elseif ($mod['menu']->id == 36 AND $sipandai->kode_fakultas != NULL): ?>

                            <?php elseif ($mod['menu']->id == 205 AND $this->session->userdata('id_admin')!=233): ?>

                            <?php else: ?>       
                              <?php  if($this->session->userdata('menu_all') ==  $mod['menu']->nama){ ?>
                                <li class="dropdown" id="<?php echo $mod['menu']->nama ?>">
                                  <?php if($mod['menu']->controller=="mahasiswa/konseling/index") { ?>
                                        <a href="<?=base_url('admin/'.$mod['menu']->controller) ?>"  ><?php echo $mod['menu']->nama ?> </a>
                                    <?php }else {?>
                                        <?php if(count($mod['child']) > 0 ){ ?>                  
                                          <ul id="menu_header" class="nav navbar-nav" role="menu">
                                            <?php foreach($mod['child'] as $r){ ?>
                                                  <li style="font-size:13px;font-weight:bold;outline:none;opacity: 1; font-family:'PT Sans Narrow', sans-serif;" <?php if(current_url() == base_url('admin/'.$r->controller)){ echo 'class="active";';}else{ echo '';}?> ><a href="<?=base_url('admin/'.$r->controller)?>"></i> <?=$r->nama ?> </a> </li>
                                            <?php } ?>
                                          </ul>
                                        <?php } ?>
                                    <?php } ?>
                                </li> 
                              <?php } ?>
                            <?php endif ?>   
                        <?php }?>

                    <?php }?>
                    <?php if ($this->session->userdata('role_name') == 'organisasi-kemahasiswaan'){ ?>
                        <?php if ($ormawatipe->id_tipe_org == 1 && date('Y-m-d') >= $periode_registrasi->tanggal_mulai && date('Y-m-d') <= $periode_registrasi->tanggal_akhir && $tgl_daftar_ulang->daftar_ulang == NULL ){ ?>
                        <li style="background-color: red; color: white"><a href="<?= base_url('admin/prestasi/user_profile/ukm') ?>"><i class="<?= $mod['menu']->icon ?>"></i> DAFTAR ULANG UKM </a></li>
                      <?php } ?> 
                    <?php } ?>
                  </ul>
              </div>
              
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
              <li  class="dropdown user user-menu">
            <!-- <a href="<?php echo base_url()?>admin/prestasi"> <button class=" btn btn-primary margin btn-sm"><i class=""></i>  Menu</button></a> -->
                      <a   href="<?php echo base_url()?>admin/prestasi/cleare_sessionHeader" >
                        <span class="fa fa-home text-white"> </span>Menu
                      </a>
              </li>
              <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <?php 
                        $nim = ($this->session->userdata('nim') == 0 ? $this->session->userdata('nim_tpb') : $this->session->userdata('nim'));

                        $getUser = $this->M_admin->getUserProfile($nim); 


                      ?>
                        <?php if(empty($getUser->photo) || $nim == '') { ?>
                        <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image">
                        <?php }else{ ?>
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
                        <li class="user-header">
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
     
    
    <?php }?>

  <?php if($this->session->userdata('nim') != '20715025' && $this->session->userdata('nim') !=  '19017276' 
        && $this->session->userdata('group_id')!='5' &&  $this->session->userdata('group_id')!='13'
        &&  $this->session->userdata('group_id')!='4'  && $this->session->userdata('group_id') !='7'
        && $this->session->userdata('group_id') !='99' 
        && $this->session->userdata('group_id') !='2'                 
        ){ ?>
    <!-- && $this->session->userdata('nim') !=  '19017276' -->
        <header class="main-header">
    <!-- Logo -->
            <a href="#" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px"></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><img src="<?php echo base_url().'assets/img/logo_alt.png'?>" width="28px">&nbsp;<b>Kemahasiswaan</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>

              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php 
                       $nim = ($this->session->userdata('nim') == 0 ? $this->session->userdata('nim_tpb') : $this->session->userdata('nim'));

                      $getUser = $this->M_admin->getUserProfile($nim); 


                    ?>
                      <?php if(empty($getUser->photo) || $nim == '') { ?>
                      <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image">
                      <?php }else{ ?>
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
                      <li class="user-header">
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
                      <!-- Menu Body -->
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="<?=base_url().'admin/prestasi/user_profile/'.$username;?>" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Profile</a>
                        </div>  
                        <div class="pull-right">
                          <a href="<?=base_url().'admin/login/logout'?>" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Log out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
<?php }?>
<!-- </div> -->