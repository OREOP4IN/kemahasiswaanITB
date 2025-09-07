<?php $site_lang = $this->session->userdata('site_lang'); ?>
<div class="section section-xlg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>"><?= $this->lang->line('utama:beranda'); ?></a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/').'/'.strtolower($jenis) ?>"><?= $jenis ?></a></li>
                        <?php if (($site_lang == 'english' || $lang == 'en' ) && $konten[0]['judul_eng'] != ''): ?>
                        <li class="breadcrumb-item page active" aria-current="page"><?=$konten[0]['judul_eng']?></li>
                         <?php else: ?>
                        <li class="breadcrumb-item page active" aria-current="page"><?=$konten[0]['judul']?></li>
                         <?php endif ?>
                    </ol>
                </nav>


                <div class="d-block pb-3 mb-3 border-bottom">
                     <?php if (($site_lang == 'english' || $lang == 'en' ) && $konten[0]['judul_eng'] != ''): ?>
                    <h1><?=$konten[0]['judul_eng']?></h1>
                    <div class="d-block text-muted"><?= tanggal_indo_lengkap($konten[0]['tgl_kirim'],TRUE).' - '.$konten[0]['nama_admin']?>
                        <br>
                          Translator : <?php echo $konten[0]['translator']?>
                    </div>
                     <?php else: ?>
                    <h1><?=$konten[0]['judul']?></h1>
                    <div class="d-block text-muted"><?= tanggal_indo_lengkap($konten[0]['tgl_kirim'],TRUE)?>
                        <?php if ($jenis == 'Berita' || $jenis == 'News'): ?>
                             
                             | Reporter : <?= (isset($konten[0]['id_reporter']) ? $konten[0]['nama_penulis'] : $konten[0]['nama_admin']) ?>
                             | Editor : <?= $konten[0]['nama_admin'] ?>

                        <?php else: ?>
                            - <?= $konten[0]['nama_admin'] ?>
                        <?php endif ?>

                       
                      
                    </div>

                    <?php endif ?>

                </div>
                <style type="text/css">
                    .p-content img {
                            width: 100%!important;
                    }
                </style>
                <div class="d-block p-content">
                    <?php if ($konten[0]['img'] == ''): ?>
                        <p><img src="<?= PATH_FOTO_CMS.'/8b0687b33d1086d13e8d020b722376dc.jpeg' ?>" class="w-100" alt=""></p>
                    <?php else: ?>
                         <p><img src="<?= PATH_FOTO_CMS.'/'.$konten[0]['img'] ?>" class="w-100" alt=""></p>
                    <?php endif ?>

                     <?php if (($site_lang == 'english' || $lang == 'en' ) && $konten[0]['judul_eng'] != ''): ?>
                        <?=$konten[0]['isi_eng']?>
                    <?php else: ?>
                        <?=$konten[0]['isi']?>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-block">
                    <h5><?= $jenis ?></h5>
                </div>
                <div class="d-block">
                    
                    <?php $replace = array(" ","'",";","!"); ?>
                    <?php foreach ($konten_lainnya as $key): ?>



                        <?php if ($jenis == 'Berita' || $jenis == 'News' ){ ?>

                            <?php if (($site_lang == 'english' || $lang == 'en' ) && $key['judul_eng'] != ''){ ?>
                            <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/en/'.strtolower(str_replace($replace, "-", $key['judul_eng']))); ?>" class="article-clean article-sidebar">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>ss
                                <?php else: ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                
                                <div>
                                    <div class="article-title"><?= $key['judul_eng'] ?></div>
                                    <small><?= tanggal_indo_lengkap($key['tgl_kirim']);?></small>
                                </div>
                                
                            </a>
                            <?php }else{ ?>

                            <a href="<?= base_url('beranda/read/berita/'.$key['id_cms'].'/id/'.strtolower(str_replace($replace, "-", $key['judul']))); ?>" class="article-clean article-sidebar">
                                <?php if ($key['img'] == ''): ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS.$key['img'] ?>')"></div>
                                <?php endif ?>
                                <div>
                                    <div class="article-title"><?= $key['judul'] ?></div>
                                    <small><?= tanggal_indo_lengkap($key['tgl_kirim']);?></small>
                                </div>
                                
                            </a>

                            <?php } ?>
                        
                        <?php }else{ ?>

                             <a href="<?= base_url('beranda/read/pengumuman/'.$key->id_cms.'/'.strtolower(str_replace($replace, "-", $key->judul))); ?>" class="article-clean article-sidebar">
                                <?php if ($key->img == ''): ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS ?>8b0687b33d1086d13e8d020b722376dc.jpeg')"></div>
                                <?php else: ?>
                                    <div class="images" style="background-image:url('<?= PATH_FOTO_CMS.$key->img ?>')"></div>
                                <?php endif ?>
                                <div>
                                    <div class="article-title"><?= $key->judul ?></div>
                                    <small><?= tanggal_indo_lengkap($key->tgl_kirim);?></small>
                                </div>
                                
                            </a>

                        <?php } ?>
                        
                        

                    <?php endforeach ?>

                   
                  
                </div>
                <div class="d-block mt-3">
                    <a href="<?= base_url('beranda/all') ?>" class="btn btn-outline-primary btn-sm"><?= $this->lang->line('utama:lainnya'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
