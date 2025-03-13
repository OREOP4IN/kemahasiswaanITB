

<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Prestasi Mahasiswa</a></li>
                        <li class="breadcrumb-item page active" aria-current="page">Daftar Prestasi</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">Daftar Prestasi 
                          <?php if (!empty($penghargaan_detail)) { ?>
                      <?php echo $penghargaan_detail[0]->nama_fakultas;?> Tingkat
                       <?php if($penghargaan_detail[0]->level ==1){ ?>
                              <?php echo 'Internasional'; } else if ($penghargaan_detail[0]->level ==2) { ?>
                              <?php echo 'Regional'; } else if ($penghargaan_detail[0]->level ==3) { ?>
                              <?php echo 'Nasional'; }  else if ($penghargaan_detail[0]->level ==4) { ?>
                              <?php echo 'Provinsi'; } else { ?>
                              <?php echo 'Lain-lain'; } ?>
                       
                      <?php if($penghargaan_detail[0]->juara ==1){ ?>
                              <?php echo 'Juara 1'; } else if ($penghargaan_detail[0]->juara ==2) { ?>
                              <?php echo 'Juara 2'; } else if ($penghargaan_detail[0]->juara ==3) { ?>
                              <?php echo 'Juara 3'; }  else if ($penghargaan_detail[0]->juara ==4) { ?>
                              <?php echo 'Juara Harapan 1'; } else if ($penghargaan_detail[0]->juara ==5) { ?>
                              <?php echo 'Juara Harapan 2'; } ?>
                       <?php } ?>
                    </h1>
                </div>
                <!-- Content -->
                <div class="d-block">
                    <table id="table_id" class="display table table-hover table-bordered">
                        <thead class="thead-light text-sm">
                            <tr>
                                <th class="text-center">No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Nama Event</th>
                                <th>Penyelenggara</th>
                                <th>Tempat</th>
                                <th>Tgl. Mulai</th>
                                <th>Tgl. Akhir</th>
                                <th>Nama Penghargaan</th>
                                <th>Foto Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">

                           <?php $no=0; foreach($penghargaan_detail as $p) { $no++ ?>
                              <tr>
                              <td><?php echo $no;?></td>
                              <td><?php echo $p->nim; ?></td>
                              <td><?php echo $p->nama; ?></td>
                              <td><?php echo $p->nama_event; ?></td>
                              <td><?php echo $p->penyelenggara;?></td>
                              <td><?php echo $p->tempat; ?></td>
                              <td><?php echo $p->tanggal_awal; ?></td>
                              <td><?php echo $p->tanggal_akhir; ?> </td>
                              <td><?php echo $p->nama_penghargaan; ?> </td>
                              <td><a href="https://aps.kemahasiswaan.itb.ac.id/assets/berkas_penghargaan/<?php echo $p->id.'/'.$p->foto?>" target="_blank" class="btn btn-sm btn-primary"><span class="icofont icofont-ui-image mr-2"></span>Lihat&nbsp;Foto</a></td>
                            </tr>

                                       <!-- Modal -->
                            <div class="modal fade" id="myPhoto<?php echo $no;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title">Foto Kegiatan</h4>
                                        </div>
                                       <?php if (empty($p->foto)){ ?>
                                       <div class="modal-body modal-lg">
                                       <section class="content">
                                          <div class="error-page">
                                            <h2 class="headline text-red">007</h2>
                                            <div class="error-content">
                                              <h3><i class="fa fa-warning text-red"></i> Oops! Foto tidak ditemukan.</h3>
                                            </div>
                                          </div>
                                          <!-- /.error-page -->
                                        </section>
                                        </div>
                                        <!-- /.content -->
                                       <?php }else{ ?>
                                       <div class="modal-body modal-lg"><img src="https://aps.kemahasiswaan.itb.ac.id/assets/berkas_penghargaan/<?php echo $p->id.'/'.$p->foto?>" style="width:800px; height:500px; align:center;" frameborder="0"></img></div>
                                       <?php } ?>
                                      
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span aria-hidden="true"></span> Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                 <?php } ?> 
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

