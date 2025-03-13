<div id="k-sidebar" class="col-lg-3 col-md-3 newsdetail"><!-- sidebar wrapper -->
                	
    <div class="col-padded col-shaded"><!-- inner custom column -->

        <ul class="list-unstyled clear-margins"><!-- widgets -->
            
            <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                <h3 class="title-widget">Berita Lainnya</h3>

                <ul class="list-unstyled">
                    <?php $berita = $this->M_cms->GetAllBerita(); 
                    foreach($berita as $news) {
                    list($date, $time) = explode(' ', $news['tgl_kirim']);
                    $tgl = tgl_indo($date);

                    $d = $news['isi'];
                    $isi = substr($d, 0, 200);
                    ?>
                    <li class="recent-news-wrap news-no-summary">

                        <div class="recent-news-content clearfix">
                            <figure class="recent-news-thumb">
                                <a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/'.strtolower(str_replace(" ", "-", $news['judul'])); ?>" title="<?php echo $news['judul'];?>"><img src="<?=base_url().'assets/cms/uploads/berita/'.$news['img']; ?>" class="attachment-thumbnail wp-post-image img-responsive" alt="Thumbnail 1" /></a>
                            </figure>
                                <span class="date"><?php echo $tgl;?></span>
                                <h4><a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/'.strtolower(str_replace(" ", "-", $news['judul']));?>"><?php echo $news['judul'];?></a></h4>
                                <?=$isi; ?>...<br /><a href="<?=base_url().'welcome/tampil_berita/'.$news['id_cms'].'/'.strtolower(str_replace(" ", "-", $news['judul'])); ?>">Selengkapnya</a>
                            
                                
                        </div>
                    </li>
                    <?php } ?>

                </ul>

            </li><!-- widgets list end -->

        </ul><!-- widgets end -->

    </div><!-- inner custom column end -->

</div><!-- sidebar wrapper end -->