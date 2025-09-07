<!-- Information -->
<!-- <div class="d-none bg-darkest-navy">
    <div class="d-flex pb-1 font-weight-bold justify-content-center">
        <div><small><span class="text-white">Kamu mempunyai UKM yang baru?</span> &nbsp;<a href="#" class="link-gold">Ajukan UKM kamu disini</a></small></div>
    </div>
</div> -->

<!-- Main Navigation Component -->

<!-- <div class="main-nav--line-graphic"></div> -->
<style>
    .menu-list--btn:focus {
        border: 2px solid #007bff; /* Example border color */
        outline: none; /* Remove default outline */
        border-radius: 5px;
    }

    .dropdown-content--list:focus {
        border: 2px solid #007bff; /* Example border color */
        outline: none; /* Remove default outline */
        border-radius: 5px;
    }
    .main-nav--menu-list.menu-list--dropdown.open .menu-list--btn {
        border: 2px solid #007bff; /* Example border color */
        outline: none; /* Remove default outline */
        border-radius: 5px;
    }
    .main-nav--menu-list.menu-list--dropdown.open .menu-list--dropdown-content {
        display: block;
    }
    /* Add border to non-dropdown buttons on focus */
    .main-nav--menu-list:not(.menu-list--dropdown) .menu-list--btn:focus {
        border: 2px solid #007bff;
        outline: none;
        border-radius: 5px;
    }
</style>

<div class="extra-menu">
    <div class="d-flex align-items-center justify-content-between">
        <div class="language">
            <a href="<?= base_url('beranda/switchLang/english') ?>"><img src="<?= base_url('assets/new_version') ?>/images/lang-eng.jpeg" alt="English Language"></a>
            <a href="<?= base_url('beranda/switchLang/indonesian') ?>"><img src="<?= base_url('assets/new_version') ?>/images/lang-ina.png" alt="Indonsian Language"></a>
        </div>
        <div class="extra-menu--list">
            <!-- <a href="https://www.itb.ac.id/staff" id="menus_no" class="extra-menu--item"><?= $this->lang->line('utama:staf'); ?></a> -->
            <a href="https://www.itb.ac.id/students" id="menus_no_students" class="extra-menu--item"><?= $this->lang->line('utama:mahasiswa'); ?></a>
            <a href="https://www.itb.ac.id/alumni" id="menus_no_alumni" class="extra-menu--item">Alumni</a>
            <a href="https://www.itb.ac.id/mitra" id="menus_no_citra" class="extra-menu--item"><?= $this->lang->line('utama:mitra'); ?></a>
            <a href="https://www.itb.ac.id/pengunjung" id="menus_no_pengunjung" class="extra-menu--item"><?= $this->lang->line('utama:pengunjung'); ?></a>
            <a href="https://www.itb.ac.id/pers" id="menus_no_pers" class="extra-menu--item">Pers</a>
            <a href="https://my.itb.ac.id" class="extra-menu--item">My ITB</a>
            <a href="https://www.itb.ac.id/covid19" class="extra-menu--item covid19">COVID 19</a>
            <a href="https://www.itb.ac.id/contact" id="menus_no_contact" class="extra-menu--item"><i class="icofont icofont-ui-message mr-2"></i><?= $this->lang->line('utama:kontak'); ?></a>
            <a href="https://www.itb.ac.id/search" id="menus_no_search" class="extra-menu--item"><i class="icofont icofont-ui-search mr-2"></i>Search</a>
        </div>
    </div>
</div>
<div class="main-nav shadow-sm">
    <div class="main-nav--logo">
        <!-- <a href="https://kemahasiswaan.itb.ac.id"><img src="<?= base_url('assets/new_version') ?>/images/logo-kemahasiswaan-itb.png" alt="Logo Kemahasiswaan ITB" width="236"></a> -->
        <a href="<?= base_url() ?>"><img src="<?= base_url('assets/new_version') ?>/images/logo-kemahasiswaan-itb.png" alt="Logo Kemahasiswaan ITB" width="236"></a>
    </div>

    <div class="main-nav--menu hide-mobile">
        <?php //NOTES: MAIN NAV - KEYBOARD NAV GHOSTING  ?>
        <div class="main-nav--menu-list">
            <a href="<?= base_url('beranda') ?>" class="menu-list--btn" tabindex="0"><?= strtoupper($this->lang->line('utama:beranda')); ?></a>
        </div>
        
        <div class="main-nav--menu-list menu-list--dropdown">
            <button type="button" class="menu-list--btn" tabindex="0"
                    aria-haspopup="true"
                    aria-expanded="false"
                    id="profilMenuBtn">
                <?= strtoupper($this->lang->line('utama:profil')); ?>
            </button>
            <div class="menu-list--dropdown-content" aria-labelledby="profilMenuBtn">
                <a href="<?= base_url('beranda/visi_misi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:visimisi'); ?></a>
                <a href="<?= base_url('beranda/struktur_organisasi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:strukturorganisasi'); ?></a>
                <a href="<?= base_url('beranda/landasan_hukum') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:landasan'); ?></a>
                <a href="<?= base_url('beranda/tupoksi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:tupoksi'); ?></a>
            </div>
        </div>
        <div class="main-nav--menu-list menu-list--dropdown">
            <button type="button" class="menu-list--btn" tabindex="0"><?= strtoupper($this->lang->line('utama:tautan')); ?></button>
            <div class="menu-list--dropdown-content">
                <div class="row" style="width:600px">
                    <div class="col-lg-6">
                        <a href="https://karir.itb.ac.id" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:kariritb'); ?></a>
                        <a href="https://tracer.itb.ac.id" target="_blank" class="dropdown-content--list" tabindex="-1">Tracer Study</a>
                        <!-- <a href="<?= base_url('simaskar') ?>" target="_blank" class="dropdown-content--list">Simaskar</a>
                        <a href="<?= base_url('siprima') ?>" target="_blank" class="dropdown-content--list">Siprima</a> -->
                        <a href="<?= base_url('bk') ?>" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:bimbingankonseling'); ?></a>
                        <!--  <a href="https://asrama.itb.ac.id" target="_blank" class="dropdown-content--list">Asrama</a> -->

                        <hr>
                        <a href="https://www.itb.ac.id/sarjana" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:sarjana'); ?></a>
                        <a href="https://www.itb.ac.id/pascasarjana" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:pascasarjana'); ?></a>
                        <a href="https://www.itb.ac.id/profesi" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:profesi'); ?></a>
                        <a href="https://www.itb.ac.id/pertukaran-mahasiswa" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:pertukaranmahasiswa'); ?></a>
                        <a href="https://www.itb.ac.id/kelas-internasional" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:kelasinternasional'); ?></a>
                        <a href="https://www.itb.ac.id/fakultas-dan-sekolah" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:fakultassekolah'); ?></a>
                        <a href="https://www.itb.ac.id/program-study" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:programstudi'); ?></a>
                    </div>
                    <div class="col-lg-6">
                        <a href="https://kemahasiswaan.itb.ac.id/beasiswa" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:beasiswa'); ?></a>
                        <a href="https://www.itb.ac.id/staf" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:staf'); ?></a>
                        <a href="https://www.itb.ac.id/aktivitas-mahasiswa" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:aktivitasmahasiswa'); ?></a>
                        <a href="https://www.itb.ac.id/jelajah" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:jelajahunit'); ?></a>
                        <a href="https://www.itb.ac.id/multikampus" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:multikampus'); ?></a>
                        <a href="https://www.itb.ac.id/senat-akademik" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:senatakademik'); ?></a>
                        <a href="https://www.itb.ac.id/majelis-wali-amanat" target="_blank" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:majeliswaliamanat'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav--menu-list">
            <a href="<?php echo base_url() . 'assets/buku/booklet-ditmawa/'; ?>" class="menu-list--btn" tabindex="0">E-BOOKLET</a>
        </div>
        <div class="main-nav--menu-list menu-list--dropdown">
            <button type="button" class="menu-list--btn" tabindex="0">E-BOOK</button>
            <div class="menu-list--dropdown-content">
                <a href="#" class="dropdown-content--list" tabindex="-1"><strong>PERATURAN</strong></a>
                <a href="<?= base_url() . '/assets/buku/peraturanrektor/peraturanrek' ?>" target="_blank" class="dropdown-content--list" tabindex="-1">Peraturan Rektor tentang Kemahasiswaan</a>
                <a href="<?= base_url() . '/assets/buku/peraturanrektor/PEDOMAN PELAKSANAAN PPKS INSTITUT TEKNOLOGI BANDUNG.pdf' ?>" target="_blank" class="dropdown-content--list" tabindex="-1">Pedoman Pelaksanaan PPKS ITB</a>
                <hr>
                <a href="#" class="dropdown-content--list" tabindex="-1"><strong>PANDUAN</strong></a>
                <a href="<?= base_url() . 'assets/Panduan/Panduan_SI_Prestasi.pdf' ?>" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:panduaninputprestasi'); ?></a>
                <a href="<?php echo base_url('beranda/kipk'); ?>" class="dropdown-content--list" tabindex="-1">KIP-K</a>
                <hr>
                <a href="#" class="dropdown-content--list" tabindex="-1"><strong><?= strtoupper($this->lang->line('utama:buku')); ?></strong></a>
                <a href="<?php echo base_url('beranda/buku/beasiswa'); ?>" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:beasiswa'); ?></a>
                <a href="<?php echo base_url('beranda/buku/kkn'); ?>" class="dropdown-content--list" tabindex="-1">KKN</a>
                <a href="<?php echo base_url('assets/buku/lkm/2020'); ?>" class="dropdown-content--list" tabindex="-1">LKM</a>
                <a href="<?php echo base_url('assets/buku/ppkm/PPKM2022'); ?>" class="dropdown-content--list" tabindex="-1">PPKM 2022</a>
                <a href="<?php echo base_url('beranda/buku/enj'); ?>" class="dropdown-content--list" tabindex="-1">ENJ</a>
                <a href="<?php echo base_url('assets/buku/self_love'); ?>" class="dropdown-content--list" tabindex="-1">Self Love</a>
                <a href="<?php echo base_url('beranda/buku/cerita-inspiratif'); ?>" class="dropdown-content--list" tabindex="-1"><?= $this->lang->line('utama:ceritainspiratif'); ?></a>
                <hr>
                <a href="#" class="dropdown-content--list" tabindex="-1"><strong>SOP</strong></a>
                <a href="<?= base_url() . '/sop/SOP 011_I1.B01.4_SOP_2014.pdf' ?>" target="_blank" class="dropdown-content--list" tabindex="-1">Beasiswa Online</a>
                <a href="<?= base_url() . '/sop/SOP 008_I1.B01.4_SOP_2014.pdf' ?>" target="_blank" class="dropdown-content--list" tabindex="-1">Pelayanan Kompetisi</a>
                <a href="<?= base_url() . '/sop/SOP 007_I1.B01.4_SOP_2014.pdf' ?>" target="_blank" class="dropdown-content--list" tabindex="-1">Peminjaman Fasilitas</a>
            </div>
        </div>

        <div class="main-nav--menu-list">
            <a href="<?= base_url('beranda/kontak') ?>" class="menu-list--btn" tabindex="0"><?= strtoupper($this->lang->line('utama:kontak')); ?></a>
        </div>
        <div class="main-nav--menu-list">
            <a href="<?= base_url('beranda/faq') ?>" class="menu-list--btn" tabindex="0">FAQ</a>
        </div>
    </div>

    <!-- Nav Toggle -->
    <div class="show-mobile">
        <div class="main-nav--menu">    
            <button type="button" id="btnOpen" class="btn-burger" aria-label="Open main menu" aria-expanded="false" aria-controls="main-nav"><div class="inner"></div></button>
        </div>
    </div>
</div>

<!-- Menu Mobile -->
<div id="mobileNavigation" class="main-nav--mobile">
    <div class="main-nav--mobile-inner">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h4 class="font-weight-bold m-0">Menu</h4>
            </div>
            <div>
                <button type="button" id="btnClose" class="btn-close" aria-label="Close menu"><div class="inner"></div></button>
            </div>
        </div>

        <div class="accordion">
             <div class="menu-lists">
            <div class="d-block w-100">
                <a href="<?= base_url('') ?>" class="btn text-left btn-block w-100">
                    <?= $this->lang->line('utama:beranda'); ?>
                </a>
            </div>
        </div>
            <div class="menu-lists">
                <div class="d-block w-100">
                    <button 
                        class="btn text-left btn-block w-100" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target="#collapseOne" 
                        aria-expanded="true"
                        aria-controls="collapseOne"
                        aria-label="Toggle Profile menu" >
                        <div class="d-flex align-items-center justify-content-between">
                            <span>Profil</span>
                            <img src="<?= base_url('assets/new_version') ?>/images/chevron-down.svg" width="12" alt="">
                        </div>
                    </button>
                    <div id="collapseOne" class="collapse">
                        <div class="d-block bg-white pt-2 pb-2 border-bottom">
                            <div class="menu-list--dropdown-content menu-list--dropdown-content-mobile">
                                <a href="<?= base_url('beranda/visi_misi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:visimisi'); ?> </a>
                                <a href="<?= base_url('beranda/struktur_organisasi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:strukturorganisasi'); ?></a>
                                <a href="<?= base_url('beranda/landasan_hukum') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:landasan'); ?></a>
                                <a href="<?= base_url('beranda/tupoksi') ?>" class="dropdown-content--list"><?= $this->lang->line('utama:tupoksi'); ?></a>
                             <!--    <a href="<?= base_url('beranda/lainnya') ?>" class="dropdown-content--list">Info Lainnya</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block w-100">
                    <button 
                        class="btn text-left btn-block w-100"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        aria-label="Toggle Links menu">
                        <div class="d-flex align-items-center justify-content-between">
                            <span>Tautan</span>
                            <img src="<?= base_url('assets/new_version') ?>/images/chevron-down.svg" width="12" alt="">
                        </div>
                    </button>
                    <div id="collapseTwo" class="collapse">
                        <div class="d-block bg-white pt-2 pb-2 border-bottom">
                            <div class="menu-list--dropdown-content menu-list--dropdown-content-mobile">
                                <div class="col-lg-4">

                                    <a href="https://karir.itb.ac.id" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:kariritb'); ?></a>
                                    <a href="https://tracer.itb.ac.id" target="_blank" class="dropdown-content--list">Tracer Study</a>
                                     <!-- <a href="<?= base_url('simaskar') ?>" target="_blank" class="dropdown-content--list">Simaskar</a>
                                    <a href="<?= base_url('siprima') ?>" target="_blank" class="dropdown-content--list">Siprima</a> -->
                                    <a href="<?= base_url('bk') ?>" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:bimbingankonseling'); ?></a>
                                    <!--  <a href="https://asrama.itb.ac.id" target="_blank" class="dropdown-content--list">Asrama</a> -->
                                    
                                </div>
                                <div class="col-lg-4">

                                     <a href="https://www.itb.ac.id/sarjana" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:sarjana'); ?></a>
                                    <a href="https://www.itb.ac.id/pascasarjana" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:pascasarjana'); ?></a>
                                    <a href="https://www.itb.ac.id/profesi" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:profesi'); ?></a>
                                    <a href="https://www.itb.ac.id/pertukaran-mahasiswa" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:pertukaranmahasiswa'); ?></a>
                                    <a href="https://www.itb.ac.id/kelas-internasional" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:kelasinternasional'); ?></a>
                                     <a href="https://www.itb.ac.id/fakultas-dan-sekolah" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:fakultassekolah'); ?></a>
                                    <a href="https://www.itb.ac.id/program-study" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:programstudi'); ?></a>
                                        
                                </div>

                                <div class="col-lg-4">
                                    <a href="https://kemahasiswaan.itb.ac.id/beasiswa" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:beasiswa'); ?></a>
                                    <a href="https://www.itb.ac.id/staf" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:staf'); ?></a>
                                    <a href="https://www.itb.ac.id/aktivitas-mahasiswa" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:aktivitasmahasiswa'); ?></a>
                                    <a href="https://www.itb.ac.id/jelajah" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:jelajahunit'); ?></a>
                                    <a href="https://www.itb.ac.id/multikampus" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:multikampus'); ?></a>
                                    <a href="https://www.itb.ac.id/senat-akademik" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:senatakademik'); ?></a>
                                    <a href="https://www.itb.ac.id/majelis-wali-amanat" target="_blank" class="dropdown-content--list"><?= $this->lang->line('utama:majeliswaliamanat'); ?></a>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block w-100">
                    <button
                        class="btn text-left btn-block w-100"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        aria-label="Toggle Books menu">
                        <div class="d-flex align-items-center justify-content-between">
                            <span>Buku</span>
                            <img src="<?= base_url('assets/new_version') ?>/images/chevron-down.svg" width="12" alt="">
                        </div>
                    </button>
                    <div id="collapseThree" class="collapse">
                            <div class="d-block bg-white pt-2 pb-2 border-bottom">
                                <div class="menu-list--dropdown-content menu-list--dropdown-content-mobile">
                                    <a href="<?php echo base_url('beranda/buku/beasiswa');?>" class="dropdown-content--list"><?= $this->lang->line('utama:beasiswa'); ?></a>
                                    <a href="<?php echo base_url('beranda/buku/enj');?>" class="dropdown-content--list">ENJ</a>
                                    <a href="<?php echo base_url('beranda/buku/kkn');?>" class="dropdown-content--list">KKN</a>
                                    <a href="<?php echo base_url('assets/buku/lkm/2020');?>" class="dropdown-content--list">LKM</a>
                                    <a href="<?php echo base_url('assets/buku/self_love');?>" class="dropdown-content--list">Self Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
             
                <div class="d-block w-100">
                    <button class="btn text-left btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true">
                        <div class="d-flex align-items-center justify-content-between">
                            <span>Panduan</span>
                            <img src="<?= base_url('assets/new_version') ?>/images/chevron-down.svg" width="12" alt="">
                        </div>
                    </button>
                    <div id="collapseFour" class="collapse">
                        <div class="d-block bg-white pt-2 pb-2 border-bottom">
                            <div class="menu-list--dropdown-content menu-list--dropdown-content-mobile">
                                <a href="<?=base_url().'assets/Panduan/Panduan_SI_Prestasi.pdf'?>" target="_blank" class="dropdown-content--list">Panduan Input Prestasi</a>
                               <!--  <a href="<?=base_url().'assets/Panduan/Panduan_Program_Pengmas.docx'?>" class="dropdown-content--list">Panduan Program Pengmas</a> -->
                                <hr>
                                <a href="#" class="dropdown-content--list"><strong>SOP</strong></a>
                                 <a href="<?=base_url().'/sop/SOP 011_I1.B01.4_SOP_2014.pdf'?>" target="_blank" class="dropdown-content--list">Beasiswa Online</a>
                                  <a href="<?=base_url().'/sop/SOP 008_I1.B01.4_SOP_2014.pdf'?>" target="_blank" class="dropdown-content--list">Pelayanan Kompetisi</a>
                                   <a href="<?=base_url().'/sop/SOP 007_I1.B01.4_SOP_2014.pdf'?>" target="_blank" class="dropdown-content--list">Peminjaman Fasilitas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="menu-lists">
            <div class="d-block w-100">
                <a href="<?= base_url('beranda/kontak') ?>" class="btn text-left btn-block w-100">
                    <?= $this->lang->line('utama:kontak'); ?>
                </a>
            </div>
        </div> 

        <div class="menu-lists">
            <div class="d-block w-100">
                <a href="<?= base_url('beranda/faq') ?>" class="btn text-left btn-block w-100">
                    FAQ
                </a>
            </div>
        </div> 


        <div class="d-block pt-3">
            <a href="<?= base_url('beranda/login') ?>" class="btn btn-block btn-primary">Login</a>
        </div>

        <!--<div class="d-block pt-3">-->
        <!--    <a href="<?= base_url('regis') ?>" class="btn btn-block btn-primary" style="background-color: red; color: white;">> Pengajuan UKM Baru <</a>-->
        <!--</div>  -->

       
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.main-nav--menu-list.menu-list--dropdown');

        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('.menu-list--btn');
            const content = dropdown.querySelector('.menu-list--dropdown-content');

            button.addEventListener('focus', () => {
                dropdown.classList.add('open');
                content.style.display = 'block';
            });

            button.addEventListener('blur', () => {
                setTimeout(() => {
                    if (!dropdown.contains(document.activeElement)) {
                        dropdown.classList.remove('open');
                        content.style.display = 'none';
                    }
                }, 100);
            });

            content.querySelectorAll('.dropdown-content--list').forEach(link => {
                link.addEventListener('focus', () => {
                    dropdown.classList.add('open');
                    content.style.display = 'block';
                });

                link.addEventListener('blur', () => {
                    setTimeout(() => {
                        if (!dropdown.contains(document.activeElement)) {
                            dropdown.classList.remove('open');
                            content.style.display = 'none';
                        }
                    }, 100);
                });
            });
        });
    });
    // NOTES: re-check this
    // document.querySelectorAll('.menu-lists button[data-toggle="collapse"]').forEach(btn => {
    //     const targetId = btn.getAttribute('data-target');
    //     const target = document.querySelector(targetId);

    //     btn.addEventListener('click', () => {
    //         const expanded = btn.getAttribute('aria-expanded') === 'true';
    //         btn.setAttribute('aria-expanded', String(!expanded));
    //     });
    // });
</script>
