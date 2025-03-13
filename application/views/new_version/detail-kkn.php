
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/pengabdian') ?>">Pengabdian</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/daftar_kkn') ?>">KKN</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Detail KKN</li>
                    </ol>
                </nav>
                <!-- Content -->
                <div class="d-block mt-4 mb-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-block pb-3 mb-3 border-bottom">
                                <h1 class="m-0"><?php echo 'KKN Tematik '.$kkn[0]->tahun; ?></h1>
                            </div>
                            <div class="d-block p-content">
                                <p><img src="https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg" onerror="this.src='https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg';" class="w-100"></p>
                                <br>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                          <tr>
                                              <th>Deskripsi</th>
                                                <td style="text-align: justify;"><?php echo nl2br($kkn[0]->deskripsi) ?></td>
                                            </tr>
                                            <tr>
                                              <th>Tujuan</th>
                                                <td style="text-align: justify;"><?php echo nl2br($kkn[0]->tujuan) ?></td>
                                            </tr>
                                            <tr>
                                              <th>Sasaran</th>
                                                <td style="text-align: justify;"><?php echo nl2br($kkn[0]->sasaran) ?></td>
                                            </tr>
                                            <tr>
                                              <th>Jumlah Peserta</th>
                                                <td><?php echo $kkn[0]->peserta." (mahasiswa)" ?></td>
                                            </tr>
                                            <tr>
                                              <th>Waktu</th>
                                                <td><?php echo date('d/m/Y', strtotime($kkn[0]->waktu_mulai))." - ".date('d/m/Y', strtotime($kkn[0]->waktu_selesai)) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-block">
                                <h5>KKN Lainnya</h5>
                            </div>
                            <div class="d-block">
                                 <?php foreach ($other as $o) { ?>
                                <a href="<?php echo base_url().'beranda/detail_kkn/'.$o->id_pengmas_kkn ?>" class="article-clean article-sidebar">
                                    <div class="images" src="https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg" onerror="this.src='https://kemahasiswaan.itb.ac.id/assets/img/img_header_default.jpg';" style="background-image:url('../../assets/img/img_header_default.jpg');"></div>
                                    <div>
                                        <div class="article-title"><?php echo 'KKN Tematik '.$o->tahun ?></div>
                                        <small><?php echo date('d/m/Y', strtotime($kkn[0]->waktu_mulai))." - ".date('d/m/Y', strtotime($kkn[0]->waktu_selesai)) ?></small>
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
