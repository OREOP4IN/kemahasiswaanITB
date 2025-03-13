 <?php 

        $ci =& get_instance();
        $ci->load->model('M_admin');

        $periode_registrasi         = $ci->M_admin->getOrmawaRegistrasiPeriode(); 

 ?>

 <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="active"><a href="https://kemahasiswaan.itb.ac.id"><?php echo $this->lang->line('utama:beranda'); ?></a></li>
        <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('utama:profil'); ?><span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url('visi_misi'); ?>"><?php echo $this->lang->line('utama:visimisi'); ?></a></li>
            <li><a href="<?php echo base_url('struktur_organisasi'); ?>"><?php echo $this->lang->line('utama:strukturorganisasi'); ?></a></li>
            <li><a href="<?= base_url('lainnya') ?>"><?php echo $this->lang->line('utama:infolainnya'); ?></a></li>
          </ul>
        </li>
        <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('utama:link'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="https://karir.itb.ac.id/" target="_blank"><?php echo $this->lang->line('utama:kariritb'); ?></a></li>
              <li><a href="http://tracer.itb.ac.id" target="_blank"><?php echo $this->lang->line('utama:tracerstudy'); ?></a></li>
			  <li><a href="simaskar"><?php echo $this->lang->line('utama:simaskar'); ?></a></li>
			  <li><a href="siprima" ><?php echo $this->lang->line('utama:siprima'); ?></a></li>
        <li><a href="bk" ><?php echo $this->lang->line('utama:bimbingankonseling'); ?></a></li>

          </ul>
        </li>
	   <!-- <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buku<span class="caret"></span></a>
         <ul class="dropdown-menu">
						  <li class="dropdown-submenu">
							<a class="test" href="#">Beasiswa<span class="caret"></span></a>
							<ul class="dropdown-menu">
							  <li><a href="bsw1">Tahun 2018</a></li>
							  <li><a href="bsw2">Tahun 2017</a></li>
							  <li><a href="bsw3">Tahun 2016</a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu">
							<a class="test" href="#">Cerita Inspirasi<span class="caret"></span></a>
							<ul class="dropdown-menu">
							  <li><a href="c1">Tahun 2018</a></li>
							  <li><a href="c2">Tahun 2017</a></li>
							  <li><a href="c3">Tahun 2016</a></li>
							</ul>
						  </li>
						   <li class="dropdown-submenu">
							<a class="test" href="#">KKN<span class="caret"></span></a>
							<ul class="dropdown-menu">
							  <li><a href="kkn1">Tahun 2018</a></li>
							  <li><a href="kkn2">Tahun 2017</a></li>
							  <li><a href="kkn3">Tahun 2016</a></li>
							</ul>
						  </li>
					</ul>
        </li> -->
		<li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('utama:buku'); ?><span class="caret"></span></a>
         <ul class="dropdown-menu">
      
      <li><a href="<?php echo base_url('buku_beasiswa');?>">Beasiswa</a></li> 
			<li><a href="<?php echo base_url('cerita_inspiratif');?>"><?php echo $this->lang->line('utama:ceritainspiratif'); ?></a></li>
			<li><a href="<?php echo base_url('enj');?>"><?php echo $this->lang->line('utama:enj'); ?></a></li>
      <li><a href="<?php echo base_url('kkn');?>">KKN</a></li>  
      <li><a href="<?php echo base_url('assets/buku/lkm/2020');?>">LKM</a></li>
      <li><a href="<?php echo base_url('assets/buku/ppkm/PPKM2022');?>">PPKM 2022</li>
      <li><a href="<?php echo base_url('assets/buku/self_love');?>" target="_blank">Self Love</a></li>  

		</ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('assets/buku/booklet-ditmawa/');?>" >E-Booklet</a>
        </li>
		<li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('utama:panduan'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank"><?php echo $this->lang->line('utama:panduaninputprestasi'); ?></a></li>
            <li><a href="<?=base_url().'assets/Panduan/Panduan_Program_Pengmas.docx'?>" target="_blank">Panduan Program Pengmas</a></li>
             <!-- <li><a href="<?=base_url().'panduan/PILMAPRES.pdf'?>" target="_blank"><?php echo $this->lang->line('utama:panduanpilmapres'); ?></a></li> -->
             <li><a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank"><hr></a></li>
              <li><a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank">SOP Beasiswa Online</a></li>
              <li><a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank">SOP Beasiswa Online</a></li>
              <li><a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank">SOP Beasiswa Online</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?= base_url('kontak') ?>" ><?php echo $this->lang->line('utama:kontak'); ?></a>
        </li>
         <li class="">
          <a href="<?= base_url('faq') ?>" ><?php echo $this->lang->line('utama:faq'); ?></a>
        </li>

        <?php 
              //if (isset($periode_registrasi)) {
                //if (date('Y-m-d') >= $periode_registrasi->tanggal_mulai && date('Y-m-d') <= $periode_registrasi->tanggal_akhir) { 
                  
         ?>

         <?php            
         // } }

         ?>

    
        
		
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="<?= base_url('login') ?>"><b>Login</b></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                <div align="center">
                  <!--<img src="<?=base_url().'assets/dashboard/images/user.png';?>" class="img-circle" width="125" alt="User Image">-->
                </div><br />
                <div class="login-content">
                   <?php if($error_msg = $this->session->flashdata('error_msg')) { ?>
                    <div class="msg">
                        <p class="text-center text-red"><?= $error_msg; ?></p>
                    </div>
                    <?php } ?>
                    <form action="<?php echo site_url('admin/login');?>" method="POST" class="margin-bottom-0">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="loginid" id="loginid" placeholder="Masukan Akun INA">
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Kata Kunci" >
                        </div>
                       <!--  <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                       <br>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
                        </div> <hr />
                        <p class="text-center text-inverse"> &copy; <?php echo $this->lang->line('utama:ditmawa'); ?>All Right Reserved 2016 </p>
                    </form>
                </div>
              </div>
             <!--<div class="bottom text-center">
                New here ? <a href="#"><b>Join Us</b></a>
              </div>-->
           </div>
        </li>


           
         
      </ul>
        </li>
         <li ><a href="https://kemahasiswaan.itb.ac.id/LanguageSwitcher/switchLang/indonesian" style="border-left: 1px solid silver;padding-right: 5px;padding-left: 5px "><img src="https://www.itb.ac.id//themes/itbnew3/images/flag-id.png" class="float-right"></a>
        </li >
        <li ><a href="https://kemahasiswaan.itb.ac.id/LanguageSwitcher/switchLang/english" style="padding-left: 5px;padding-right: 5px">
             <img src="https://www.itb.ac.id//themes/itbnew3/images/flag-en.png" class="float-right mr-1"></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>