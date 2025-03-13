
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/pengabdian') ?>">Pengabdian</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">KKN</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">KKN Tematik ITB</h1>
                </div>
                <!-- Content -->
                <div class="d-block">
                    <div class="d-block mb-lg-5 mb-4">
                       <p>
                            KKN Tematik ITB merupakan kegiatan yang berlandaskan Tri Dharma Perguruan Tinggi. KKN Tematik ITB merupakan suatu proses satu kesatuan yang dihasilkan dari kegiatan pendidikan dan penelitian. Ilmu yang diperoleh melalui pembelajaran dan penelitian di kampus, diimplementasikan untuk menjadi suatu solusi atas permasalahan yang ada di masyarakat. Sehingga nilai kebermanfaatan sebagai kaum intelektual dapat langsung dirasakan oleh masyarakat.

                            Kegiatan KKN Tematik ITB sebenarnya telah ada sejak tahun 1980-an. Namun kegiatan ini sempat terhenti tanpa sebab yang tidak diketahui. Akhirnya di bawah bimbingan Lembaga Kemahasiswaan ITB pada tahun 2011, kegiatan KKN Tematik ITB kembali dilaksanakan menjadi salah satu mata kuliah unggulan. Melalui konsep yang terus berubah tiap tahunnya serta dengan program yang bermacam-macam ini, diharapkan mahasiswa ITB mampu mengembangkan potensinya dan menjadi problem solver di masyarakat.
                       </p>
                    </div>
                    <!-- Tab Header -->
                    <div class="tab-header">
                        <div class="tab-header--menu">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-toggle="tab" href="#development" role="tab" aria-selected="true">KKN Tematik</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="development" role="tabpanel">
                            <div class="d-block">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-light text-sm">
                                            <tr>
                                                  <th>No</th>
                                                  <th>Nama Kegiatan</th>
                                                  <th>Tempat</th>
                                                  <th>Waktu Mulai</th>
                                                  <th>Waktu Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm">
                                          <?php
                                              $no = $this->uri->segment('3') + 1;
                                              foreach($kkn as $k) {
                                            ?>
                                            <tr>
                                              <td><?php echo $no++ ?></td>
                                              <td>
                                                <a href="<?php echo base_url().'beranda/detail_kkn/'.$k->id_pengmas_kkn ?>"><?php echo 'KKN Tematik '.$k->tahun ?></a>
                                              </td>
                                              <td><?php echo $k->tempat ?></td>
                                              <td><?php echo $k->waktu_mulai ?></td>
                                              <td><?php echo $k->waktu_selesai ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
