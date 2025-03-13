<!-- Jquery -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>


<!-- Bootstrap V.4 -->
<script type="text/javascript" src="<?= base_url('assets/new_version') ?>/js/bootstrap.bundle.min.js"></script>
<!-- Script Open Mobile Nav -->
<script type="text/javascript" src="<?= base_url('assets/js')  ?>/ambiance/jquery.ambiance.js"></script>

<script type="text/javascript">
   
</script>
<script>
    $('#mobileNavigation').hide();
    $('#btnOpen').click(function(){
        $('#mobileNavigation').show();
    });
    $('#btnClose').click(function(){
        $('#mobileNavigation').hide();
    });
</script>
<!-- Tooltip -->
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Slick Slier -->
<script type="text/javascript" src="<?= base_url('assets/new_version') ?>/js/slick.min.js"></script>
<script type="text/javascript">
    // $(document).ready(function(){

    //      $.ambiance({message: "dengan predikat unggul dalam Sistem Pemeringkatan Kemahasiswaan Kategori 2 Tahun 2021 !",
    //         type: "success",
    //         timeout: 5,
    //         title: "ITB Mendapatkan Peringkat Terbaik 1!",
    //         link: "https://www.instagram.com/p/CXNkgh8FHzL/",
    //         linkName: "Selengkapnya",
    //         linkBlank: true,
    //         linkColor: "white"});


    //     // Slide for Banner
    //     $('#slideBanner').slick({
    //         prevArrow: $('#prevBanner'),
    //         nextArrow: $('#nextBanner'),
    //         autoplay: true,
    //         autoplaySpeed: 2000
    //     });
    //     // Slide for Testimonial
    //     $('#slideQuotes').slick({
    //         prevArrow: $('#prevQuotes'),
    //         nextArrow: $('#nextQuotes'),
    //         autoplay: true,
    //         autoplaySpeed: 2000
    //     });
    // });

    function eksekusi() {

        setInterval(send_message, 3000);
        $('#kirimbtn').prop('disabled', true);
        //1000 = 1 detik;
    }

    function eksekusiemail() {

        setInterval(send_email, 3000);
        $('#kirimbtn').prop('disabled', true);
        //1000 = 1 detik;
    }


    function send_message() {

         $.ajax({
                    type: "POST",
                    url:"<?= site_url('Whatsapp2/send_message') ?>",
                    dataType: 'text',
                    data: {kirim: 1 },
                    beforeSend: function(){
                     
                    },
                    complete: function(){
                      //  $('#image').hide();
                    },
                    success:function(response){
                         $('#logs').append(response);
                    }
                });
    }


    function send_email() {

         $.ajax({
                    type: "POST",
                    url:"<?= site_url('Email/send_message') ?>",
                    dataType: 'text',
                    data: {kirim: 1 },
                    beforeSend: function(){
                     
                    },
                    complete: function(){
                      //  $('#image').hide();
                    },
                    success:function(response){
                         $('#logs').append(response);
                    }
                });
    }

    

</script>
<!-- AOS Js -->
<script type="text/javascript" src="<?= base_url('assets/new_version') ?>/js/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>
<!-- DataTables Js -->
<script type="text/javascript" src="<?= base_url('assets/new_version') ?>/js/datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
        $('#table_id_ukm').DataTable();
        $('#table_id_km').DataTable();
    } );
</script>
<!-- Zabuto Calendar -->
<script type="text/javascript" src="<?= base_url('assets/new_version') ?>/js/zabuto_calendar.min.js"></script>


<script src="<?= base_url('assets/kalender/jPages-master/js/jPages.js')?>"></script>

<script type="application/javascript">
    $(document).ready(function () {


         myDateFunction('', '',true); 

      


            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                language: 'id',
                cell_border: true,
                  today: true,
                  show_days: true,
                  weekstartson: 0,
                  nav_icon: {
                    prev: '<i class="fa fa-angle-left"></i>',
                    next: '<i class="fa fa-angle-right"></i>'
                  },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "<?= base_url('beranda/kegiatan_list') ?>",
                    modal: true
                },
                legend: [
                    {type: "block",     label: " < 25 Kegiatan",    classname: "grade-3"},
                    {type: "block",     label: " 25-50 Kegiatan",   classname: "grade-2"},
                    {type: "block",     label: " > 50 Kegiatan",    classname: "grade-1"}
                ]
            });


        });



        function bootstrapPagination(element) {
                                element.find('a,span').each(function() {
                                    if ($(this).parent('li').length) {
                                        $(this).parent('li').removeAttr('class');
                                    } else {
                                        $(this).wrap('<li class="page-item"></li>');
                                    }

                                    if ($(this).is('a')) {
                                        $(this).attr('href', '#');
                                        $(this).addClass('page-link');
                                    }
                                    if ($(this).is('span')) {
                                        $(this).parent('li').addClass('spacer');
                                    }


                                    if ($(this).hasClass('jp-current')) {
                                        $(this).parent('li').addClass('active');
                                    }
                                    if ($(this).hasClass('jp-disabled')) {
                                        $(this).parent('li').addClass('disabled');
                                    }
                                });
                            }

   
  

    function myDateFunction(id, fromModal,today = false) {
        
    
        if (fromModal) {
            $("#" + id + "_modal").modal("hide");
        }
        var date = $("#" + id).data("date");
        var hasEvent = $("#" + id).data("hasEvent");
       

        if(today == true){
            var utc = new Date().toJSON().slice(0,10).replace(/-/g,'-');
            date = utc;
        }
     
        $.ajax({
                    type: "POST",
                    url:"<?= site_url('beranda/getKegiatanByTgl') ?>",
                    dataType: 'html',
                    data: {tgl: date },
                    beforeSend: function(){
                        $('#image').show();
                    },
                    complete: function(){
                        $('#image').hide();
                    },
                    success:function(response){
                            $('#media-list').html(response);
                            $('#detailkegiatantable').html("");
                            // $("#date-popover").fadeOut(3000);
                            $('.pagination').jPages({
                                containerID: 'media-list',
                                first: false,
                                previous: 'Previous',
                                next: 'Next',
                                last: false,
                                perPage: 5,
                                startRange: 1,
                                midRange: 5,
                                endRange: 1,
                                delay: 0,
                                minHeight: false,
                                callback: function(pages, items) {
                                    bootstrapPagination($('.pagination'));
                                }
                            });

                        
                    }
                });

        return true;
    }

    function myNavFunction(id) {
        // $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
    }


  $('#mymodal').on('show', function () {
      $('.modal-body',this).css({width:'auto',height:'auto', 'max-height':'100%'});
});



</script>

<script type="text/javascript">
 

      function showModal(datas) {

               $.ajax({
                    type: "POST",
                    url: "<?= base_url('beranda/getKegiatanByid') ?>",
                    dataType: 'html',
                    data: {id_kegiatan_param: datas },
                    cache: false,
                    beforeSend: function(){
                        $('#image2').show();
                    },
                    complete: function(){
                        $('#image2').hide();
                    },
                    success:function(response){
                            $('#detailkegiatantable').html(response);
                            $("#myModal .modal-title").html('<center style="color:white">DETAIL KEGIATAN</center>')
                            $("#myModal").modal();
                    }
                });
               //you can do anything with data, or pass more data to this function. i set this data to modal header for example
              
            }


</script>




   




