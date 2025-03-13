<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>"><?= $this->lang->line('utama:beranda'); ?></a></li>
                        <li class="breadcrumb-item page active" aria-current="page"><?= $this->lang->line('utama:ormawa'); ?></li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3" style="margin-bottom: 0px!important;"><?= $this->lang->line('utama:ormawa'); ?></h1>
                    <small>Berdasarkan No <a href="<?= base_url('sk/SK Penetapan UKM dan KM 2024.pdf') ?>" target="_blank">SK 23/IT1.A/SK-KM/2024 </a> berikut daftar UKM & KM yang terdaftar pada tahun 2024</small>
                    <br>
                    <br>

                </div>
                <!-- Tab Header -->
                <div class="tab-header">
                    <div class="tab-header--menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-toggle="tab" href="#himpunan" role="tab" aria-selected="true">HIMPUNAN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#ukm" role="tab" aria-selected="true">UKM</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#km" role="tab" aria-selected="true">KM</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="himpunan" role="tabpanel">
                        <div class="d-block">
                            <table id="table_id" class="display table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Logo</th>
                                        <th>Nama Organisasi</th>
                                        <th>Singkatan</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php $no=0; foreach($himpunan as $d){ $no++; ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no; ?></td>
                                        <td>
                                              <?php if ($d->logo!="") { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/'.$d->logo;?>" style="width:90px;"  />
                                              <?php } else { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/itb_default.png';?>" style="width:90px;" />
                                              <?php } ?>
                                        </td>
                                        <td><?php echo $d->nama_organisasi;?></td>
                                        <td><?php echo $d->singkatan;?></td>
                                        <td><?php echo $d->visi;?></td>
                                        <td align="justify"><?php echo $d->misi_unit;?></td>
                                         <td><?php if($d->status_aktif==1){ echo "Aktif";} else{echo "Non Aktif";}?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ukm" role="tabpanel">
                        <div class="d-block">
                            <table id="table_id_ukm" class="display table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Logo</th>
                                        <th>Nama Organisasi</th>
                                        <th>Singkatan</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php $no=0; foreach($ukm as $d){ $no++; ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no; ?></td>
                                        <td>
                                              <?php if ($d->logo!="") { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/'.$d->logo;?>" style="width:90px;"  />
                                              <?php } else { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/itb_default.png';?>" style="width:90px;" />
                                              <?php } ?>
                                        </td>
                                        <td><?php echo $d->nama_organisasi;?></td>
                                        <td><?php echo $d->singkatan;?></td>
                                        <td><?php echo $d->visi;?></td>
                                        <td align="justify"><?php echo $d->misi_unit;?></td>
                                         <td><?php if($d->status_aktif==1){ echo "Aktif";} else{echo "Non Aktif";}?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="km" role="tabpanel">
                        <div class="d-block">
                            <table id="table_id_km" class="display table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Logo</th>
                                        <th>Nama Organisasi</th>
                                        <th>Singkatan</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($km as $d){ $no++; ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no; ?></td>
                                        <td>
                                              <?php if ($d->logo!="") { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/'.$d->logo;?>" style="width:90px;"  />
                                              <?php } else { ?>
                                                <img src="<?=base_url().'assets/berkas_kegiatan/itb_default.png';?>" style="width:90px;" />
                                              <?php } ?>
                                        </td>
                                        <td><?php echo $d->nama_organisasi;?></td>
                                        <td><?php echo $d->singkatan;?></td>
                                        <td><?php echo $d->visi;?></td>
                                        <td align="justify"><?php echo $d->misi_unit;?></td>
                                         <td><?php if($d->status_aktif==1){ echo "Aktif";} else{echo "Non Aktif";}?></td>
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
