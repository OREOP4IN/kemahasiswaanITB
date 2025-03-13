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

<div class="col-lg-4">  
        <div class="widget-sidebar">
                     <h2 class="title-widget-sidebar">Pengumuman Lainnya</h2>
                       <div class="content-widget-sidebar">
                        <ul style="padding-left:0px">
                             <?php 
                                $berita = $this->M_cms->get_pengumuman_limit(); 
                                foreach ($berita as $news): ?>
                         <li class="recent-post">
                            <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> <?php echo tgl_indo($news->tanggal_awal);?> - <?php echo tgl_indo($news->tanggal_akhir);?></small></p>
                             <a href="<?=base_url().'welcome/pengumuman/'.$news->id_cms.'/'.strtolower(str_replace(" ", "-", $news->judul))?>"><h5><?php echo substr($news->judul, 0,60).'..'; ?></h5></a>
                            </li>
                            <hr>
                            <?php endforeach ?>
                        </ul>
                        </div>
            </div>
    </div>