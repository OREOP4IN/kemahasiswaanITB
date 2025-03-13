
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Pengabdian</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">Pengabdian Masyarakat Institut Teknologi Bandung</h1>
                </div>
                <!-- Content -->
                <div class="d-block mt-4 mb-5">
                    <div class="d-flex align-items-center">
                        <a href="<?= base_url('beranda/daftar_kegiatan') ?>" class="btn btn-outline-primary mr-3"><span class="icofont icofont-holding-hands mr-2"></span>Daftar Kegiatan</a>
                        <a href="<?= base_url('beranda/kkn') ?>" class="btn btn-outline-primary"><span class="icofont icofont-travelling mr-2"></span>KKN Tematik</a>
                    </div>
                </div>
                <div class="d-block">
                     <!-- Maps -->
                    <div style="height: 700px" id="map-home"></div>
                    <!-- / Maps -->
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-TWS2zGTMiFPQDNuYPmMEFtXjJSAitsg"></script>
                    <script type="text/javascript" src="https://kemahasiswaan.itb.ac.id/pengmas/js/googlemap_new.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>
