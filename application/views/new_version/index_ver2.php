<?php $site_lang = $this->session->userdata('site_lang'); ?>

<style type="text/css">
     @media screen and (max-width: 650px) {
                    .addonss {
                        width: 50%!important;
                    }
            }

     @media screen and (min-width: 650px) {
                    .addonss {
                        width: 25%!important;
                    }
    }

    .slideditmawa {
        position: relative;
        overflow: hidden;
    }

    /* Filter only on the background image via pseudo-element */
    .slideditmawa::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: inherit;
        background-size: cover;
        background-position: center;
        filter: sepia(100%) hue-rotate(160deg) saturate(300%);
        z-index: 0;
        pointer-events: none; /* prevent pseudo-element from interfering */
    }

    .slide-banner--container, .slide-banner {
        width: 100%;
        height: auto; /* or a fixed height */
        overflow: hidden; /* prevent internal scroll */
    }

    /* Title stays above the filtered background */
    .slide-banner--title {
        position: relative;
        z-index: 1;
        background-color: #0F77D2;
        padding: 5px 15px;
        border-radius: 10px;
        display: inline-block;
        color: #fff; /* optional, make text visible */
    }


</style>

<!-- Home Banner -->
<div class="slide-banner--container">

    <button id="prevBanner" class="prev-slider" aria-label="Previous banner" title="Previous Banner" data-toggle="tooltip" data-placement="top"><img src="<?= ARROW_SLIDER ?>/images/prev-arrow.svg" alt="Previous Banner"></button>
    <button id="nextBanner" class="next-slider" aria-label="Next banner" title="Next Banner" data-toggle="tooltip" data-placement="top"><img src="<?= ARROW_SLIDER ?>/images/next-arrow.svg" alt="Next Banner"></button>

    <div id="slideBanner" class="slide-banner">
        
        <?php $replace = array(" ","'",";","!"); ?>
        <?php $site_lang = $this->session->userdata('site_lang'); ?>

         <?php if ($site_lang == 'english'): ?>

            <?php $i=0;foreach($headline as $hl){ ?>

                <?php if($hl->id_kategori_cms == 0 && $hl->judul_eng != ''){ ?>

                    <a href="<?= base_url('beranda/read/berita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", (isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul) ))); ?>" data-toggle="tooltip" data-placement="top" alt="<?= isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul ?>">
                     <div class="slide-banner--item slideditmawa" style="background-image:url('<?= PATH_FOTO_CMS.$hl->img ?>');">
                        <div class="slide-banner--title"><b> <?= (isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul)  ?></b></div>
                     </div>
                    </a>

                <?php }else if($hl->id_kategori_cms != 0){ ?>

                    <a href="<?= base_url('beranda/read/pengumuman/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", (isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul) ))); ?>" data-toggle="tooltip" data-placement="top" alt="<?= isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul ?>">
                     <div class="slide-banner--item slideditmawa" style="background-image:url('<?= PATH_FOTO_CMS.$hl->img ?>');">
                        <div class="slide-banner--title"><b><?= (isset($hl->judul_eng) ?$hl->judul_eng:$hl->judul)  ?></b></div>
                     </div>
                    </a>
                    
                <?php } ?>

            <?php } ?>

        <?php else: ?>

             <?php $i=0;foreach($headline as $hl){ ?>

                <?php if($hl->id_kategori_cms == 0){ ?>

                    <a href="<?= base_url('beranda/read/berita/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul))); ?>" data-toggle="tooltip" data-placement="top" alt="<?= $hl->judul ?>">
                     <div class="slide-banner--item slideditmawa" style="background-image:url('<?= PATH_FOTO_CMS.$hl->img ?>');">
                        <div class="slide-banner--title"><b><?= $hl->judul ?></b></div>
                     </div>
                    </a>

                <?php }else if($hl->id_kategori_cms != 0){ ?>

                    <a href="<?= base_url('beranda/read/pengumuman/'.$hl->id_cms.'/'.strtolower(str_replace($replace, "-", $hl->judul))); ?>" data-toggle="tooltip" data-placement="top" alt="<?= $hl->judul ?>">
                     <div class="slide-banner--item slideditmawa" style="background-image:url('<?= PATH_FOTO_CMS.$hl->img ?>');">
                        <div class="slide-banner--title"><b><?= $hl->judul ?></b></div>
                     </div>
                    </a>
                    
                <?php } ?>

            <?php } ?>


        <?php endif ?>
    </div>
</div>

<!-- Important Menu -->
<div class="bg-blue">
    <div class="top-menu-3">
        <!-- <a href="https://kemahasiswaan.itb.ac.id/sibima" target="_blank" class="top-menu--item">
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
        </a> -->
            <div class="menu-social-media justify-content-center" style="width:100%;">
                <a style="width:14.2%" href="https://www.instagram.com/ditmawa.itb/" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Instagram">
                    <div class="inner"><img  src="<?= base_url('assets/new_version') ?>/images/icon-social-instagram.svg" alt="Instagram"></div>
                </a>
                <a style="width:14.2%" href="https://wa.me/628112111446" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="WhatsApp">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-whatsapp.svg" alt="Whatsapp"></div>
                </a>
                <a style="width:14.2%" href="https://twitter.com/ditmawa_itb" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-twitter.svg" alt="Twitter"></div>
                </a>
                <a style="width:14.2%" href="https://line.me/R/ti/p/%40ditmawa_itb" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Line Chat">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-line.svg" alt="Line"></div>
                </a>
                <a style="width:14.2%" href="https://www.tiktok.com/@kemahasiswaanitb?" target="_blank" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="TikTok">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-tiktok.svg" alt="TikTok"></div>
                </a>
                <a style="width:14.2%" href="https://www.youtube.com/c/direktoratkemahasiswaanitb" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Youtube">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-youtube.svg" alt="Youtube"></div>
                </a>
                <a style="width:14.2%" href="https://www.facebook.com/ditmawaITB" class="menu-social-media--item" data-toggle="tooltip" data-placement="top" title="Youtube">
                    <div class="inner"><img src="<?= base_url('assets/new_version') ?>/images/icon-social-facebook.svg" alt="Facebook"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Top Menu List -->
<div class="section bg-dark-navy" style="padding-left:4px;padding-right:4px;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 pr-md-0">
                <!-- Menu Lists -->
                <div class="menu-lists">
                     <a href="https://karir.itb.ac.id" class="menu-lists--item addonss"> 
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-karir2.svg" alt="Icon Karir ITB"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:karir'); ?></div>
                    </a>
                    <a href="<?= base_url(); ?>bk" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-konseling2.svg" alt="Icon Konseling"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:konseling'); ?></div>
                    </a>
                    <a href="<?= base_url(); ?>beasiswa" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-beasiswa2.svg" alt="Icon Beasiswa"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:beasiswa'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/ormawa') ?>" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-organisasi.svg" alt="Icon Organisasi Mahasiswa"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:organisasi'); ?></div>
                    </a>
                    <a href="https://kkn.itb.ac.id" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-pengabdian.svg" alt="Icon Pengabdian Masyarakat"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:pengabdian'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/prestasi') ?>" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-prestasi.svg" alt="Icon Prestasi">
                        </div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:prestasi'); ?></div>
                    </a>
                    <a href="<?= base_url('beranda/kegiatan') ?>" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-kegiatan.svg" alt="Icon Kegiatan"></div>
                        <div class="menu-lists--text"><?= $this->lang->line('utama:kegiatan'); ?></div>
                    </a>
                    <a href="https://tracer.itb.ac.id/" class="menu-lists--item addonss">
                        <div class="menu-lists--icon"><img src="<?= base_url('assets/new_version') ?>/images/icon-tracer.svg" alt="Icon Tracer Study"></div>
                        <div class="menu-lists--text">Tracer Study</div>
                    </a>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-2 pl-md-0">
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
            </div> -->
        </div>
    </div>
</div>

<!-- <div class="bg-lighter-grey border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="p-3">
                    <div class="font-weight-bold text-sm">➤ Periode Registrasi Ulang dan Registrasi Baru UKM dibuka, <a href="<?= base_url('regis') ?>" class="link-blue"> Ajukan UKM Baru kamu disini !</a></div>
                </div>
            </div>
        </div>
    </div>
</div> -->



