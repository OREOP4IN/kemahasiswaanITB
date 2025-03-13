  <?php echo $script_captcha; ?>

<div class="section section-xlg bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-light">
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Login</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">Login</h1>
                </div>
                <!-- Content -->
                <!-- <div class="separator separator-bg-light mb-lg-4 mb-3" data-title="atau"></div> -->
                <div class="row">
                   
                    <div class="col-md-12 mb-3">
                        <div class="card lift shadow-sm h-100">
                           <form action="<?= base_url('admin/login/process_normal') ?>" method="POST">
                           
                                <div class="card-body p-lg-4">
                                    <div class="d-block pb-3 mb-3">
                                        <h5 class="border-bottom">Akses Private</h5>
                                        <p class="m-0" style="text-align:justify">
                                            Pilihan menu login hanya dapat diakses oleh civitas akademik (Tendik, Mahasiswa, Organisasi Mahasiswa) melalui jaringan ITB atau menggunakan Virtual Private Network (VPN ITB).
                                            <br/><br/>
                                            <a target="_blank" href="https://dti.itb.ac.id/panduan-instalasi-vpn-itb/">Panduan Setting VPN ITB <i>Virtual Private Network (VPN) ITB.</i></a> 
                                        </p>
                                    </div>
                                  
                                     <i>
                                        <small style="color:red"><?= $this->session->flashdata("warning"); ?></small>
                                     </i>
                                </div>
                                <div class="card-footer py-3 bg-white">
                                     <a href="https://aps.kemahasiswaan.itb.ac.id" class="btn btn-gold">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


