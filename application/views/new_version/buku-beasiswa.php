<div class="section section-xlg">
    <div class="container" style="max-width: 90%;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>"><?= $this->lang->line('utama:beranda'); ?></a></li>
                        <li class="breadcrumb-item page active" aria-current="page"><?= $this->lang->line('utama:buku'); ?></li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">
                        <?php if ($judul == 'beasiswa'): ?>
                                <?= $this->lang->line('utama:beasiswa'); ?>
                         <?php endif ?>

                          <?php if ($judul == 'cerita-inspiratif'): ?>
                                <?= $this->lang->line('utama:ceritainspiratif'); ?>
                         <?php endif ?>

                          <?php if ($judul == 'kkn'): ?>
                                KKN (Kuliah Kerja Nyata)
                         <?php endif ?>

                          <?php if ($judul == 'enj'): ?>
                                ENJ
                         <?php endif ?>
                    </h1>
                </div>
                <!-- Content -->
                <div class="d-block">
                    <div class="row">

                        <?php if ($judul == 'enj'): ?>
                      
                        <div class="col-md-6 mb-4">
                            <a href="https://kemahasiswaan.itb.ac.id/assets/buku/enj/" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                    <h5 class="text-dark">ENJ</h5>
                                    <div class="text-muted text-sm"></div>
                                </div>
                            </a>
                        </div>


                        <?php endif ?>

                        <?php if ($judul == 'beasiswa'): ?>
                      
                 
                          <div class="col-md-2 mb-2">
                        <div class="libro">
                          <span></span>
                          <a href="<?php echo base_url('assets/buku/booklet-ditmawa'); ?>" target="_blank"><img src="<?php echo base_url('assets/buku/booklet-ditmawa'); ?>/cover.jpg" alt="Booklet Ditmawa" /></a>
                        </div>
                        </div>


                        <div class="col-md-2 mb-2">
                        <div class="libro">
                          <span></span>
                          <a href="<?php echo base_url('assets/buku/beasiswa/2018'); ?>" target="_blank"><img src="<?php echo base_url('assets/buku/beasiswa/2018'); ?>/cover beasiswa 2018.jpg" alt="Beasiswa 2018" /></a>
                        </div>
                        </div>

                        <?php endif ?>

                        <?php if ($judul == 'cerita-inspiratif'): ?>
                        <div class="col-md-1 mb-1">
                        </div>

                        <div class="col-md-2 mb-2">
                        <div class="libro">
                            <span></span>
                            <a href="<?php echo base_url('assets/buku/cerita_inspiratif/2019/2019.pdf'); ?>"><img src="https://kemahasiswaan.itb.ac.id/assets/buku/bidikmisi/cover/CI2019.jpg" alt="Cerita Inspiratif 2019" /></a>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="libro">
                            <span></span>
                            <a href="<?php echo base_url('assets/buku/cerita_inspiratif/2018/2018.pdf'); ?>"><img src="https://kemahasiswaan.itb.ac.id/assets/buku/bidikmisi/cover/CI2018.jpg" alt="Cerita Inspiratif 2018" /></a>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="libro">
                            <span></span>
                            <a href="<?php echo base_url('assets/buku/cerita_inspiratif/2017/2017.pdf'); ?>"><img src="https://kemahasiswaan.itb.ac.id/assets/buku/bidikmisi/cover/CI2017.jpg" alt="Cerita Inspiratif 2017" /></a>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="libro">
                            <span></span>
                            <a href="<?php echo base_url('assets/buku/cerita_inspiratif/2016/2016.pdf'); ?>"><img src="https://kemahasiswaan.itb.ac.id/assets/buku/bidikmisi/cover/CI2016.jpg" alt="Cerita Inspiratif 2016" /></a>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="libro">
                            <span></span>
                            <a href="<?php echo base_url('assets/buku/cerita_inspiratif/2014/2014.pdf'); ?>"><img src="https://kemahasiswaan.itb.ac.id/assets/buku/bidikmisi/cover/CI2014.jpg" alt="Cerita Inspiratif 2014" /></a>
                        </div>
                    </div>

                        <?php endif ?>


                        <?php if ($judul == 'kkn'): ?>
			
 <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2022'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                    <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2022</div>
                                </div>
                            </a>
                        </div>



 <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2021'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                    <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2021</div>
                                </div>
                            </a>
                        </div>



 <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2020'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                    <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2020</div>
                                </div>
                            </a>
                        </div>



                         <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2019'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                    <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2019</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2018'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                     <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2018</div>
                                </div>
                            </a>
                        </div>

                           <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2017'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                     <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2017</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2016'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                     <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2016</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 mb-4">
                            <a href="<?php echo base_url('assets/buku/kkn/2015'); ?>" class="card shadow-sm lift h-100">
                                <div class="card-body">
                                     <h5 class="text-dark">KKN</h5>
                                    <div class="text-muted text-sm">Tahun 2015</div>
                                </div>
                            </a>
                        </div>
                        <?php endif ?>



                      
                       
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
