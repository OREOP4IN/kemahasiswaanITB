
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda/pengabdian') ?>">Pengabdian</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Daftar Kegiatan</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">Community Development & Community Service</h1>
                </div>
                <!-- Content -->
                <div class="d-block">
                    <div class="d-block mb-lg-5 mb-4">
                        <p>Menurut Hayden (1979 : 175) community development adalah suatu proses yang merupakan usaha masyarakat sendiri yang diintegrasikan dengan otoritas pemerintah guna memperbaiki kondisi sosial ekonomi dan kultural komunitas, mengintegrasikan komunitas ke dalam kehidupan nasional dan mendorong kontribusi komunitas yang lebih optimal bagi kemajuan nasional. Sedangkan community service adalah kegiatan sosial yang dicirikan dengan jangka waktu yang singkat dan tidak berkelanjutan.</p>
                        <p>Berikut ini merupakan kegiatan pengabdian masyarakat ITB yang bersifat community development dan community service.</p>
                    </div>
                    <!-- Tab Header -->
                    <div class="tab-header">
                        <div class="tab-header--menu">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-toggle="tab" href="#development" role="tab" aria-selected="true">Community Development</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab" href="#service" role="tab" aria-selected="true">Community Service</a>
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
                                                <th class="text-center">No</th>
                                                <th>Nama Kegiatan</th>
                                                <th>Nama Ormawa</th>
                                                <th>Waktu Mulai</th>
                                                <th>Waktu Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm">
                                            <?php $no = $this->uri->segment('3') + 1; ?>
                                            <?php  foreach($kegiatan as $k){
                                              if($this->kategori_model->get_name($k->id_kategori) == 'Community Development'){
                                             ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                  <a href="<?php echo base_url().'beranda/detail/'.$k->id_kegiatan ?>"><?php echo $k->nama_kegiatan ?></a>
                                                </td>
                                                <td><?php echo $this->ormawa_model->get_name($k->id_ormawa) ?></td>
                                                <td><?php echo date('d/m/Y', strtotime($k->waktu_mulai)) ?></td>
                                                <td><?php echo date('d/m/Y', strtotime($k->waktu_selesai)) ?></td>
                                            </tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                </div>

                                   <div class="d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <?php echo $pagination; ?>
                                        </nav>
                                    </div>
                            </div>
                        </div>

                          <div class="tab-pane fade show" id="service" role="tabpanel">
                            <div class="d-block">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-light text-sm">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama Kegiatan</th>
                                                <th>Nama Ormawa</th>
                                                <th>Waktu Mulai</th>
                                                <th>Waktu Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm">
                                            <?php
                                                $no = $this->uri->segment('3') + 1;
                                                foreach($kegiatan as $k){
                                                  if($this->kategori_model->get_name($k->id_kategori) == 'Community Service') {
                                                ?>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                  <a href="<?php echo base_url().'/beranda/detail_kegiatan/'.$k->id_kegiatan ?>"><?php echo $k->nama_kegiatan ?></a>
                                                </td>
                                                <td><?php echo $this->ormawa_model->get_name($k->id_ormawa) ?></td>
                                                <td><?php echo date('d/m/Y', strtotime($k->waktu_mulai)) ?></td>
                                                <td><?php echo date('d/m/Y', strtotime($k->waktu_selesai)) ?></td>
                                              </tr>
                                              <?php }} ?>
                                        </tbody>
                                    </table>
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
            </div>
        </div>
    </div>
</div>
