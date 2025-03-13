<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <html lang="en" dir="ltr"> -->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
     <?php $site_lang = $this->session->userdata('site_lang'); ?>
    
     <?php if (!isset($lang)): ?>
         <?php $lang = 'id'; ?>
     <?php endif ?>

    <?php if ($site_lang == 'english' || $lang == 'en'): ?>


        <meta name="author" content="<?= (isset($berita[0]['nama_admin'])?$berita[0]['nama_admin']:'Tim Media DITMAWA ITB')?>">
        <meta name="title" content="<?= (isset($berita[0]['judul_eng'])?$berita[0]['judul_eng']:'Direktorat Kemahasiswaan ITB')?>">
        <meta property="og:title" content="<?= (isset($berita[0]['judul_eng'])?$berita[0]['judul_eng']:'Direktorat Kemahasiswaan ITB')?>">

    <?php else: ?>

        <meta name="author" content="<?= (isset($berita[0]['nama_admin'])?$berita[0]['nama_admin']:'Tim Media DITMAWA ITB')?>">
        <meta name="title" content="<?= (isset($berita[0]['judul'])?$berita[0]['judul']:'Direktorat Kemahasiswaan ITB')?>">
        <meta property="og:title" content="<?= (isset($berita[0]['judul'])?$berita[0]['judul']:'Direktorat Kemahasiswaan ITB')?>">
        
    <?php endif ?>

    <meta name="keywords" content="<?= (isset($berita[0]['tags'])?$berita[0]['tags']:'Berita, ITB, Direktorat Kemahasiswaan, DITMAWA, Pengumuman')?>">

    <?php if (isset($berita[0]['img'])){ ?>
        
        <?php if (file_exists('./assets/cms/uploads/berita/'.$berita[0]['img'])): ?>
        <meta property="og:image" content="<?=base_url().'assets/cms/uploads/berita/'.$berita[0]['img']?>">
        <meta name="image" content="<?=base_url().'assets/cms/uploads/berita/'.$berita[0]['img']?>">
        <?php endif ?>
        <?php if ($berita[0]['id_kategori_cms'] == 0){ ?>
          <meta name="description" content="Berita DITMAWA ITB">  
        <?php }else{ ?>
          <meta name="description" content="Pengumuman DITMAWA ITB">
        <?php } ?>
        
    <?php }else{ ?>
        <meta name="description" content="Web Direktorat Kemahasiswaan ITB">
    <?php } ?>

     <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
   
    <link rel="SHORCUT ICON" href="<?=base_url().'assets/img/icon.png'?>">
    <title>Direktorat Kemahasiswaan | Institut Teknologi Bandung</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://kemahasiswaan.itb.ac.id/assets/dashboard/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://kemahasiswaan.itb.ac.id/assets/dashboard/css/carousel.css" rel="stylesheet">
    <link href="https://kemahasiswaan.itb.ac.id/assets/dashboard/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://kemahasiswaan.itb.ac.id/assets/kalender/jPages-master/css/jPages.css">
    <link rel="stylesheet" href="https://kemahasiswaan.itb.ac.id/assets/kalender/jPages-master/css/animate.css">

    <!-- Custom javascript -->
    <script src="https://kemahasiswaan.itb.ac.id/assets/kalender/jPages-master/js/jPages.js"></script>
    <script src="https://kemahasiswaan.itb.ac.id/assets/dashboard/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
   <?= $this->load->view('partials/nav') ?>
  