<?php
  $user_session = $this->session->userdata('profile');
  $nip = $user_session['nip'];
  $user_id = $this->session->userdata('user_id');
  $role_id = $this->session->userdata('role_id');
  $role_name = $this->session->userdata('role_name');
  $has_foto = streamFotoPegawai($nip);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lembaga Kemahasiswaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/font-awesome/css/font-awesome.min.css"); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/AdminLTE.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/datepicker/datepicker3.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/timepicker/bootstrap-timepicker.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/plugins/zebra/public/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/custom.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css"); ?>">
  
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <link rel="SHORCUT ICON" href="<?=base_url().'assets/img/icon.png'?>">
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="<?php echo base_url("assets/lib/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
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
                      $nim = $this->session->userdata('nim');
                      $getUser = $this->M_admin->getUserProfile($nim); 
                    ?>
                      <?php if(empty($getUser->photo)) { ?>
                      <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="user-image" alt="User Image">
                      <?php }else{ ?>
                      <img src="<?=base_url().'assets/upload/'.$nim.'/'.$getUser->photo;?>" class="user-image" alt="User Image">
                      <?php } ?>
                      <span class="hidden-xs"><?=$this->session->userdata('name_user') ;?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <?php if(empty($getUser->photo)) { ?>
                        <img src="<?php echo base_url().'assets/img/person_thumbs.gif' ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
                        <?php }else{ ?>
                        <img src="<?=base_url().'assets/upload/'.$nim.'/'.$getUser->photo;?>" class="profile-user-img img-responsive img-circle" alt="User Image">
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
