<div class="section section-lg bg-lighter-grey">
    <div class="container" style="max-width: 97%;">
      
        <!-- Tab Header -->
        <div class="tab-header">
            <div class="tab-header--menu">
            <form action="<?php echo base_url()?>coba/detail_video" method="post">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="<?php echo base_url()?>coba/detail_video" onclick="reset()" role="tab" aria-selected="true"><?= $this->lang->line('utama:semua'); ?></a>
                        
                    </li>
                
                    <li> 
                        <div class="form-group col-lg-12"> 
                        
                        <select style="border-color:#C09451;" class="form-control" id="exampleFormControlSelect1"  name="idtema"> 
                            
                            <option value=""> Pilih Tema Kegiatan </option>
                            <?php foreach ($tema->result_array() as $key): ?>
                                <option <?php if(!empty($idtema)){ if($idtema == $key['id_tema']){ echo 'selected'; } }?> value="<?php echo $key['id_tema']; ?>"> <?php echo $key['Tema']; ?> </option>
                            <?php endforeach ?>
                        </select>
                         
                        </div>
                    </li>
                    <li> 
                        <div class="form-group col-lg-12"> 
                            <button  class="float-right btn btn-gold" name="cari">Search</button>
                        </div>
                    </li>
                
                </ul>
                </form>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <!-- dd -->
           
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row">
                   <?php $site_lang = $this->session->userdata('site_lang'); ?>
                   <?php $replace = array(" ", "'",";"); ?>
                    <?php foreach ($berita as $key): ?>
                        <!-- <?php echo $key['video_url'].'d'; ?> -->
                        <div class="col-lg-3 col-md-4 col-6 mb-4">
                            <iframe width="100%" height="180px" class="embed-responsive-item" src="<?= $key['video_url'].($key['auto_play'] == '1' ?'?rel=0&amp;autoplay=1&mute=1':'' ) ?>" allowfullscreen></iframe>
                            <!-- <div class="card-body"> -->
                                    <small class="font-weight-bold text-primary d-block mb-1"><?= tanggal_indo_lengkap_eng($key['tanggal_upload']);?>
                                         <span class="font-weight-bold text-primary pull-right" style="color:#8c8c8c;"></span>
                                    </small>
                                    <h6 class="font-weight-normal text-sm text-dark">
                                       <b> <?= substr($key['video_name'], 0,200).'' ?></b><br>
                                        <?= substr($key['Deskripsi'], 0,200).'' ?>
                                    </h6>
                                <!-- </div> -->
                        </div>
                        
                    <?php endforeach ?>
                  
                </div>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <input type="hidden" value="<?php echo $this->session->userdata('idtem');?>">
                        <?php echo $pagination; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>