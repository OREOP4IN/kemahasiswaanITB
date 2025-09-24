<div class="section section-lg bg-lighter-grey" data-aos="fade-up">
    <div class="container" style="max-width: 98%;">
        <!-- Tab Header -->
        <div class="tab-header">
            <div class="tab-header--title">
                <?= $this->lang->line('utama:berita'); ?>
            </div>
            <div class="tab-header--menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab" aria-selected="true"><?= $this->lang->line('utama:semua'); ?></a>
                    </li>

                     <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#konseling" role="tab" aria-selected="true"><?= $this->lang->line('utama:konseling'); ?></a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#karir" role="tab" aria-selected="true"><?= $this->lang->line('utama:karir'); ?></a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#kewirausahaan" role="tab" aria-selected="true"><?= $this->lang->line('utama:kewirausahaan'); ?></a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#prestasi" role="tab" aria-selected="true"><?= $this->lang->line('utama:prestasi'); ?></a>
                    </li>

                     <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#tracer" role="tab" aria-selected="true"><?= $this->lang->line('utama:tracerstudy'); ?></a>
                    </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#beasiswa" role="tab" aria-selected="true"><?= $this->lang->line('utama:beasiswa'); ?></a>
                    </li>
               
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#pengumuman" role="tab" aria-selected="false"><?= $this->lang->line('utama:pengumuman'); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>
        
                    <?php $replace = array(" ","!","'",";"); ?>
                    <?php foreach ($berita as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>
                   
                  
                  
                </div>
             

                    <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                    </div>

             
            </div>

             <div class="tab-pane fade" id="konseling" role="tabpanel">
                  <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>
                    <?php foreach ($berita_konseling as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>
                  
                </div>

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_konseling') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                    </div>   
            </div>

             <div class="tab-pane fade" id="karir" role="tabpanel">
                  <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>
                    <?php foreach ($berita_karir as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>

                </div>  

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_karir') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                    </div> 
            </div>

             <div class="tab-pane fade" id="kewirausahaan" role="tabpanel">
                 <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>
                    <?php foreach ($berita_kewiraan as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>

                </div>   

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_kewirausahaan') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                 </div>
                   
            </div>

            <div class="tab-pane fade" id="prestasi" role="tabpanel">
                 <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>

                    <?php if (!empty($berita_prestasi)){ ?>
                        
                    <?php foreach ($berita_prestasi as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>

                     <?php } ?>

                </div>   

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_prestasi') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                 </div>
                   
            </div>

             <div class="tab-pane fade" id="tracer" role="tabpanel">
                 <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>

                    <?php if (!empty($berita_tracer)){ ?>
                        
                    <?php foreach ($berita_tracer as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>

                     <?php } ?>

                </div>   

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_tracer') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                 </div>
                   
            </div>



             <div class="tab-pane fade" id="beasiswa" role="tabpanel">
                 <div class="row">
                    <?php $site_lang = $this->session->userdata('site_lang'); ?>

                    <?php if (!empty($berita_beasiswa)){ ?>
                        
                    <?php foreach ($berita_beasiswa as $key): ?>

                        <?php if ($site_lang == 'english' && $key['judul_eng'] != ''): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                 
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>

                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul_eng'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                        <?php else: ?>

                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                     <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>

                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_publish']);?>
                                        <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key['hint']?></i></b></span>
                                    </small>
                                     
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key['judul'], 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>

                         <?php endif ?>
                   
                        
                    <?php endforeach ?>

                     <?php } ?>

                </div>   

                 <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/berita_beasiswa') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                 </div>
                   
            </div>
         
            <div class="tab-pane fade" id="pengumuman" role="tabpanel">
                <div class="row">
                    
                    <?php foreach ($pengumuman as $key_p): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/pengumuman/'.$key_p->id_cms.'/'.strtolower(str_replace($replace, "-", $key_p->judul))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key_p->img ?>')"></div>
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key_p->tgl_publish);?>
                                         <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key_p->hint?></i></b></span>
                                    </small>
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key_p->judul, 0,46).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>
                   
                        
                    <?php endforeach ?>
                   
                  
                  
                </div>

             

                    <div class="d-flex justify-content-center">
                            <a href="<?= base_url('beranda/pengumuman') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                    </div>

          
            </div>
        </div>
        <!-- All News -->
      
    </div>
</div>