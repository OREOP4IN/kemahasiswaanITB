  <?php // echo $script_captcha; ?>

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
                            <div class="card-body p-lg-4">
                                <div class="d-block">
                                    <h5 class="border-bottom"><?= $this->lang->line('utama:bukanpemilikina'); ?></h5>
                                    <p class="m-0">
                                        dapat diakses menggunakan jaringan non-ITB (umum).
                                       
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer bg-white py-3">
                               
                                <button type="button" data-toggle="modal" data-target="#loginmodals" class="btn btn-primary"><?= $this->lang->line('utama:bukanpemilikina'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

<div class="modal fade" id="loginmodals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <?= $this->lang->line('utama:bukanpemilikina'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/login/process_normal') ?>" method="POST">
      <div class="modal-body">
                                    <div class="d-block">
                                        <div class="form-group">
                                            <label for="InputUsername">Username</label>
                                            <input type="text" class="form-control" id="InputUsername" placeholder="Masukan username" name="loginid" required>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="InputPassword">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Kata Kunci" name="password" required>
                                        </div>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
      </form>
    </div>
  </div>
</div>
