
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/pengabdian') ?>">Pengabdian</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/daftar_kegiatan') ?>">Daftar Kegiatan</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Detail Kegiatan</li>
                    </ol>
                </nav>
                <!-- Content -->
                <div class="d-block mt-4 mb-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-block pb-3 mb-3 border-bottom">
                                <h1 class="m-0"><?php echo $kegiatan[0]->nama_kegiatan; ?></h1>
                            </div>
                            <div class="d-block p-content">
                                <p><img src="<?php echo base_url().'pengmas/assets/pengmas/'.$kegiatan[0]->photo ?>" onerror="this.src='https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg';" class="w-100"></p>
                                <br>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bolder">Kategori</td>
                                                <td><?php echo $this->kategori_model->get_name($kegiatan[0]->id_kategori) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Ormawa</td>
                                                <td><?php echo $this->ormawa_model->get_name($kegiatan[0]->id_ormawa) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Provinsi</td>
                                                <td><?php echo $kegiatan[0]->provinsi ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Deskripsi</td>
                                                <td><?php echo nl2br($kegiatan[0]->deskripsi) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Tujuan</td>
                                                <td><?php echo nl2br($kegiatan[0]->tujuan) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Sasaran</td>
                                                <td><?php echo nl2br($kegiatan[0]->sasaran) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Waktu</td>
                                                <td><?php echo date('d/m/Y', strtotime($kegiatan[0]->waktu_mulai))." - ".date('d/m/Y', strtotime($kegiatan[0]->waktu_selesai)) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bolder">Berita</td>
                                                <td><a href="<?php echo $kegiatan[0]->link_berita ?>"><?php echo $kegiatan[0]->link_berita ?></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-block">
                                <h5>Kegiatan Lainnya</h5>
                            </div>
                            <div class="d-block">
                                 <?php foreach ($other as $o) { ?>
                                <a href="<?php echo base_url().'/beranda/detail/'.$o->id_kegiatan ?>" class="article-clean article-sidebar">
                                    <div class="images" src="https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg" onerror="this.src='https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg';" style="background-image:url('../../assets/img/img_header_default.jpg');"></div>
                                    <div>
                                        <div class="article-title"><?php echo $o->nama_kegiatan ?></div>
                                        <small><?php echo $kegiatan[0]->provinsi ?></small>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
