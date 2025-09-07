<div class="section section-xlg mb-md-5 mb-3" data-aos="fade-up">
    <div class="container">
        <div class="section-title">QUOTES MAHASISWA ITB</div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="slide-quotes--container">
                    <button id="prevQuotes" class="prev-slider" aria-label="Previous Quote"><img src="<?= base_url() ?>/assets/new_version/images/next-arrow-quotes.svg" alt="Previous Quoute"></button>
                    <button id="nextQuotes" class="next-slider" aria-label="Next Quote"><img src="<?= base_url() ?>/assets/new_version/images/prev-arrow-quotes.svg" alt="Next Quoute"></button>
                    <div id="slideQuotes" class="quotes-list">

                         <?php $page; $i = 1;foreach($quotes->result() as $q){ ?>
                        <div class="quotes-list--item">
                            <div class="inner">

                                <?php if(check_file_remote(PIC_MHS.$q->nim.'/'.$q->photo)){ ?>
                                    <div class="photo-user photo-user--xlg" style="background-image:url('<?= PIC_MHS. $q->nim.'/'.$q->photo ?>')"></div>
                                <?php }else{ ?>
                                    <div class="photo-user photo-user--xlg" style="background-image:url('<?= DEV_PIC_MHS ?>')"></div>
                                <?php } ?>
                                <div class="quotes-list--content">
                                    <div class="text mb-2"><?php echo $q->quotes;?></div>
                                    <div class="name"><?php echo $q->display_name;?></div>
                                    <div class="name"><?='xxxxx'. (isset($q->nim) ? substr($q->nim, -3): substr($q->nim, -3) );?></div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>