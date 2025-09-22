<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="UfvhlMc_d6QjA6R1mdWJjz4yvA0aR7nId6DgGIFo04k" />
       
        <?php $site_lang = $this->session->userdata('site_lang'); ?>

        <?php if (isset($head)): ?>

                <?php if ($head == 'konten'){ ?>

                      <?php if ($site_lang == 'english' || $lang == 'en'){ ?>

                            <meta name="author" content="<?= (isset($konten[0]['nama_admin'])?$konten[0]['nama_admin']:'Tim Media DITMAWA ITB')?>">
                            <meta name="title" content="<?= (isset($konten[0]['judul_eng'])?$konten[0]['judul_eng']:'Direktorat Kemahasiswaan ITB')?>">
                            <meta property="og:title" content="<?= (isset($konten[0]['judul_eng'])?$konten[0]['judul_eng']:'Direktorat Kemahasiswaan ITB')?>">

                        <?php }else{ ?>

                            <meta name="author" content="<?= (isset($konten[0]['nama_admin'])?$konten[0]['nama_admin']:'Tim Media DITMAWA ITB')?>">
                            <meta name="title" content="<?= (isset($konten[0]['judul'])?$konten[0]['judul']:'Direktorat Kemahasiswaan ITB')?>">
                            <meta property="og:title" content="<?= (isset($konten[0]['judul'])?$konten[0]['judul']:'Direktorat Kemahasiswaan ITB')?>">
                            
                        <?php } ?>

                        <meta name="keywords" content="<?= (isset($konten[0]['tags'])?$konten[0]['tags']:'Berita, ITB, Direktorat Kemahasiswaan, DITMAWA, Pengumuman')?>">

                        <?php if (isset($konten[0]['img'])){ ?>
                            
                            <?php if (file_exists('./assets/cms/uploads/berita/'.$berita[0]['img'])): ?>
                            <meta property="og:image" content="<?=base_url().'assets/cms/uploads/berita/'.$konten[0]['img']?>">
                            <meta name="image" content="<?=base_url().'assets/cms/uploads/berita/'.$konten[0]['img']?>">
                            <?php endif ?>
                            <?php if ($konten[0]['id_kategori_cms'] == 0){ ?>
                              <meta name="description" content="Berita DITMAWA ITB">  
                            <?php }else{ ?>
                              <meta name="description" content="Pengumuman DITMAWA ITB">
                            <?php } ?>
                            
                        <?php }else{ ?>
                            <meta name="description" content="Web Direktorat Kemahasiswaan ITB">
                        <?php } ?>
                                        
                <?php }else{ ?>

                    <meta name="description" content="Web Direktorat Kemahasiswaan ITB">
                    <meta name="author" content="Informasi & Komunikasi Direktorat Kemahasiswaan ITB">
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <meta property="og:image" content="<?=base_url().'assets/img/itb.png'?>">
                    <meta name="image" content="<?=base_url().'assets/img/itb.png'?>">

                <?php } ?>

        <?php else: ?>

        <meta name="description" content="Web Direktorat Kemahasiswaan ITB">
        <meta name="author" content="Informasi & Komunikasi Direktorat Kemahasiswaan ITB">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:image" content="<?=base_url().'assets/img/itb.png'?>">
        <meta name="image" content="<?=base_url().'assets/img/itb.png'?>">
            
        <?php endif ?>

         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-215533307-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-215533307-1');
        </script>

   
        <link rel="SHORCUT ICON" href="<?=base_url().'assets/img/icon.png'?>">

     



        <!-- Zabuto Calendar Css -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/zabuto_calendar.min.css">
        <!-- Icofont Css -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/icofont.min.css">
        <!-- DataTable Css -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/datatables.min.css">
        <!-- AOS Css -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/aos.css">
        <!-- Slick Css -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/slick.css">
        <!-- <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/slick-theme.css"> -->
        <!-- Bootstrap V.4 -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/bootstrap.min.css">
        <!-- Main Theme Styling -->
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/styles.css">
        <link rel="stylesheet" href="<?= base_url('assets/new_version')  ?>/css/style3d.css">
        <!-- Title -->
        <link rel="stylesheet" href="<?=base_url()?>assets/orgchart/css/jquery.orgchart.css">
        <link rel="stylesheet" href="<?= base_url('assets/js')  ?>/ambiance/jquery.ambiance.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/kalender/zabuto/zabuto_calendar.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('assets/kalender/css/custom.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/kalender/jPages-master/css/jPages.css')?>">
        <link rel="stylesheet" href="<?= base_url('assets/kalender/jPages-master/css/animate.css')?>">
        <!-- Jquery -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
        
        <title>Direktorat Kemahasiswaan | Institut Teknologi Bandung</title>

        <style type="text/css">
            @media screen and (max-width: 650px) {
              .extra-menu--item {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
              }

              #footweb{
                text-align: center;
              }
            }
          
          .orgchart .top-level .title {
            background-color: #006699;
            width: 200px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }
          .orgchart .top-level .content {
            border-color: #006699;
            width: 200px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }
          .orgchart .middle-level .title {
            background-color: #009933;
            width: 250px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }
          .orgchart .middle-level .content {
            border-color: #009933;
             width: 250px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }
          .orgchart .bottom-level .title {
            background-color: #4b9dd3;
             width: 250px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }
          .orgchart .bottom-level .content {
            border-color: #4b9dd3;
             width: 250px;
            height: 30px;
            font-size: 9px;
            padding: 3%;
          }


    .orgchart { background: white }

        .grade-1 {
                    background-color: #FA2601;
                }

                .grade-2 {
                    background-color: #FA8A00;
                }

                .grade-3 {
                    background-color: #FFEB00;
                }

                .grade-4 {
                    background-color: #27AB00;
                }

                .purple {
                    background-color: purple;
                }


               #ambiance-notification {
                    right: 10px;
                }

    </style>
    <!-- <script async data-watzapkey="YfEm698" src="https://cdn.watzap.id/widget-api.js"></script> -->
    </head>
    <body>