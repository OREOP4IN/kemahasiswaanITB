<style type="text/css">
    .embed-responsive-item:hover {
            width: 100%;
            height: 300px;
            transition: 1.5s;
    }
</style>
<div class="d-block" data-aos="fade-up">
    <div class="main-nav--line-graphic gold"></div>
    <div class="section section-bg section-xxlg" style="padding: 0; padding-top: 1%; padding-bottom: 2%; /*background-image: url('./assets/new_version/images/image-cta-1.png')*/;" >
        <div class="container" style="max-width: 95%;">
            <br>
            <h4 class="section-title" style="color:white">Video </h4>
            <div class="row justify-content-center" style="padding: 0px">
              <?php foreach ($videoall as $key): ?>
                <div class="col-md-3 text-center">
                    <hr class="blue">
                     <iframe width="100%" height="180px" class="embed-responsive-item" src="<?= $key->video_url.($key->auto_play == '1' ?'?rel=0&amp;autoplay=1&mute=1':'' ) ?>" allowfullscreen title="Youtube Video"></iframe>
                </div>
                <?php endforeach ?> 


             
              

               
            </div>
        </div>
    </div>
</div>