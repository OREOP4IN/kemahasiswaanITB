<?php $site_lang = $this->session->userdata('site_lang'); ?>

<!-- Home Banner -->
<div class="slide-banner--container" style="position:absolute;!important">

    <button id="prevBanner" class="prev-slider" aria-label="Previous banner"><img src="<?= base_url('../assets/new_version') ?>/images/prev-arrow.svg" alt="Previous Banner"></button>
    <button id="nextBanner" class="next-slider" aria-label="Next banner"><img src="<?= base_url('../assets/new_version') ?>/images/next-arrow.svg" alt="Next Banner"></button>

    <div id="slideBanner" class="slide-banner" style="position:absolute;!important">


        <?php $replace = array("!"," ", "'",";"); ?>

     <?php if (($site_lang == 'english' || $lang == 'en' ) && $headline[0]->judul_eng != ''): ?>

    
           <?php $i=0;foreach($headline as $hl){ ?>

            <?php if($hl->id_kategori_cms != 1 && $hl->id_kategori_cms != 2){ ?>
                <a href="<?= base_url('beranda/read/berita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul_eng))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey; padding: 5px;opacity: 0.9; border-radius: 10px;"><b> <?= $hl->judul_eng ?></b></div>
                 </div>
                </a>

            <?php }else if($hl->id_kategori_cms == 1){ ?>

                <a href="<?= base_url('beranda/read/pengumuman/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul_eng))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey;padding: 5px;opacity: 0.9;border-radius: 10px;"><b><?= $hl->judul_eng ?></b></div>
                 </div>
                </a>

            <?php }else if($hl->id_kategori_cms == 2){ ?>

                <a href="<?= base_url('blog/cerita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul_eng))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey;padding: 5px;opacity: 0.9;border-radius: 10px;"><b><?= $hl->judul_eng ?></b></div>
                 </div>
                </a>

            <?php } ?>

        <?php } ?>
     

    <?php else: ?>

           <?php $i=0;foreach($headline as $hl){ ?>

            <?php if($hl->id_kategori_cms != 1 && $hl->id_kategori_cms != 2){ ?>
                <a href="<?= base_url('beranda/read/berita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey; padding: 5px;opacity: 0.9; border-radius: 10px;"><b> <?= $hl->judul ?></b></div>
                 </div>
                </a>

            <?php }else if($hl->id_kategori_cms == 1){ ?>

                <a href="<?= base_url('beranda/read/pengumuman/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey;padding: 5px;opacity: 0.9;border-radius: 10px;"><b><?= $hl->judul ?></b></div>
                 </div>
                </a>

            <?php }else if($hl->id_kategori_cms == 2){ ?>

                <a href="<?= base_url('blog/cerita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul))); ?>">
                 <div class="slide-banner--item" style="background-image:url('../assets/cms/uploads/berita/<?= $hl->img ?>');">
                    <div class="slide-banner--title" style="background-color: grey;padding: 5px;opacity: 0.9;border-radius: 10px;"><b><?= $hl->judul ?></b></div>
                 </div>
                </a>

            <?php } ?>

        <?php } ?>


    </div>



</div>

<!-- Important Menu -->
<div class="bg-blue">
    <div class="top-menu-3">
        <a href="https://kemahasiswaan.itb.ac.id/sibima" target="_blank" class="top-menu--item">
            <div class="inner">
                <img src="<?= base_url('assets/new_version') ?>/images/icon-beasiswa.svg" class="mr-3">
                <div><?= $this->lang->line('utama:beasiswa'); ?></div>
            </div>
        </a>
        <a href="https://kemahasiswaan.itb.ac.id/bk" target="_blank" class="top-menu--item">
            <div class="inner">
                <img src="<?= base_url('assets/new_version') ?>/images/icon-konseling.svg" class="mr-3">
                <div><?= $this->lang->line('utama:konseling'); ?></div>
            </div>
        </a>
        <a href="https://karir.itb.ac.id" target="_blank" class="top-menu--item">
            <div class="inner">
                <img src="<?= base_url('assets/new_version') ?>/images/icon-karir.svg" class="mr-3">
                <div><?= $this->lang->line('utama:karir'); ?></div>
            </div>
        </a>
    </div>
</div>

<!-- Top Menu List -->
<div class="section bg-dark-navy" style="padding-left:4px;padding-right:4px;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 pr-md-0">
                <!-- Menu Lists -->
                <div class="menu-lists">
                    <a href="<?= base_url('beranda/ormawa') ?>" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-organisasi.svg"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:organisasi'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/pengabdian') ?>" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-pengabdian.svg"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:pengabdian'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/prestasi') ?>" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-prestasi.svg"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:prestasi'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/kegiatan') ?>" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-kegiatan.svg"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:kegiatan'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/buku/cerita-inspiratif') ?>" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-cerita-inspiratif.svg"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:ceritainspiratif'); ?></div>
                    </a>
                    <a href="https://dev-pkm.itb.ac.id/" class="menu-lists--item">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-organisasi.svg"></div>
                        <div class="menu-lists--text">Kurikulum Kemahasiswaan</div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 pl-md-0">
                <div class="menu-social-media">
                   
                    <a href="https://www.instagram.com/ditmawa.itb/" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <div class="inner"><img  src="<?= base_url('assets/new_version') ?>/images/icon-social-instagram.svg"></div>
                    </a>
                     <a href="https://wa.me/628112111446" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="WhatsApp">
                        <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-whatsapp.svg"></div>
                    </a>
                       <a href="https://twitter.com/ditmawa_itb" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-twitter.svg"></div>
                    </a>
                    
                     <a href="https://line.me/R/ti/p/%40ditmawa_itb" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Line Chat">
                        <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-line.svg"></div>
                    </a>
                     <a href="https://www.tiktok.com/@kemahasiswaanitb?" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Tik Tok">
                        <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-tiktok.svg"></div>
                    </a>
                    <a href="https://www.youtube.com/c/direktoratkemahasiswaanitb" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Youtube">
                        <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-youtube.svg"></div>
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Information #2 -->
<div class="d-none bg-lighter-grey border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="p-3">
                    <div class="font-weight-bold text-sm">➤ Punya UKM yang baru digarap? 
                        <a href="#" class="link-blue">Ajukan UKM kamu disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>