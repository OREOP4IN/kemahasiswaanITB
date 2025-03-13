<div class="section section-lg bg-lighter-grey">
    <div class="container" style="max-width: 97%;">
        <?php if ($title == 'Berita Kewirausahaan'):  ?>
            <h1 class="mb-4"><?= $this->lang->line('utama:beritakewirausahaan'); ?></h1>
        <?php elseif ($title == 'Berita Konseling'):  ?>
            <h1 class="mb-4"><?= $this->lang->line('utama:beritakonseling'); ?></h1>
        <?php elseif ($title == 'Berita Karir'):  ?>
            <h1 class="mb-4"><?= $this->lang->line('utama:beritakarir'); ?></h1>
        <?php elseif ($title == 'Berita Prestasi'):  ?>
            <h1 class="mb-4"><?= $this->lang->line('utama:beritaprestasi'); ?></h1>
        <?php else:  ?>
            <h1 class="mb-4"><?= $this->lang->line('utama:berita'); ?></h1>
        <?php endif ?>
        
        <!-- Tab Header -->
        <div class="tab-header">
            <div class="tab-header--menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab" aria-selected="true"><?= $this->lang->line('utama:semua'); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row">
                   <?php $site_lang = $this->session->userdata('site_lang'); ?>
                   <?php $replace = array(" ", "'",";"); ?>
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
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tgl_kirim']);?>
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
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key['tgl_kirim']);?>
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
                    <nav aria-label="Page navigation example">
                        <?php echo $pagination; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
