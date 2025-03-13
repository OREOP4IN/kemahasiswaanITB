<div class="section section-lg bg-lighter-grey">
    <div class="container" style="max-width: 97%;">
        <h1 class="mb-4">Pengumuman</h1>
        <!-- Tab Header -->
        <div class="tab-header">
            <div class="tab-header--menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab" aria-selected="true">Semua</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
          
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                 <div class="row">
                     <?php $replace = array(" ","'",";","!"); ?>
                  <?php foreach ($pengumuman as $key2): ?>

                         <div class="col-lg-3 col-md-4 col-6 mb-4">
                         <a href="<?= base_url('beranda/read/pengumuman/'.$key2['id_cms'].'/'.strtolower(str_replace($replace, "-", $key2['judul']))); ?>" class="card border-0 rounded-0 card-border-bottom lift h-100">
                                <div class="card-images" style="background-image:url('<?= PATH_FOTO_CMS.$key2['img'] ?>')"></div>
                                <div class="card-body">
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap($key2['tgl_kirim']);?>
                                         <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"><b> <i class="fa fa-eye"></i> <i><?= $key2['hint']?></i></b></span>
                                    </small>
                                    <h6 class="font-weight-normal text-sm text-dark">
                                        <?= substr($key2['judul'], 0,60).'...' ?>
                                    </h6>
                                </div>
                            </a>
                        </div>
                   
                        
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
