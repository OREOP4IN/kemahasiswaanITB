<style type="text/css">
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    padding-left: 20px;
    margin-top: 30px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;    
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #f1c40f;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}

.recent-post{width: 100%;height: 80px;list-style-type: none;}
.post-img img {
    width: 100px;
    height: 70px;
    float: left;
    margin-right: 15px;
    border: 2px solid deepskyblue;
    transition: 0.5s;
}

.recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}


</style>
 <?php $site_lang = $this->session->userdata('site_lang'); ?>

<div class="col-lg-4">  
        <div class="widget-sidebar">
            <?php if ($site_lang == 'english' || $lang == 'en' ): ?>
                     <h2 class="title-widget-sidebar">Lastest News</h2>
            <?php else: ?>
                    <h2 class="title-widget-sidebar">Berita Lainnya</h2>
            <?php endif ?>
                       <div class="content-widget-sidebar">
                        <ul style="padding-left:0px">
                             <?php 
                                $berita = $this->M_cms->GetAllBerita(); 
                                foreach ($berita as $news): 
                                    list($date, $time) = explode(' ', $news['tgl_kirim']);
                                    $tgl = tgl_indo($date);
                                    $d = $news['isi'];
                                    $isi = substr($d, 0, 200);

                                ?>
                         <li class="recent-post">
                             <?php if (($site_lang == 'english' || $lang == 'en' ) && $news['judul_eng'] != ''){ ?>
                            <div class="post-img">
                                <img src="<?=base_url().'assets/cms/uploads/berita/'.$news['img']; ?>" class="img-responsive" alt="Thumbnail 1" />
                              <a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/en/'.strtolower(str_replace(" ", "-", $news['judul_eng'])); ?>" title="<?php echo $news['judul_eng'];?>"></a>
                             </div>
                             <a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/en/'.strtolower(str_replace(" ", "-", $news['judul_eng']))?>"><h5><?php echo substr($news['judul_eng'], 0,60).'..'; ?></h5></a>
                             <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> <?php echo $tgl;?></small></p>
                            </li>
                            <hr>
                            <?php }else{ ?>

                                <div class="post-img">
                                <img src="<?=base_url().'assets/cms/uploads/berita/'.$news['img']; ?>" class="img-responsive" alt="Thumbnail 1" />
                              <a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/id/'.strtolower(str_replace(" ", "-", $news['judul'])); ?>" title="<?php echo $news['judul'];?>"></a>
                             </div>
                             <a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/id/'.strtolower(str_replace(" ", "-", $news['judul']))?>"><h5><?php echo substr($news['judul'], 0,60).'..'; ?></h5></a>
                             <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> <?php echo $tgl;?></small></p>
                            </li>
                            <hr>
                            
                            <?php } ?>
                            <?php endforeach ?>
                        </ul>
                        </div>
            </div>
    </div>