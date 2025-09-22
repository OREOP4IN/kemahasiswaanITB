<!-- Jquery -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
//     NOTES: disabled qismo 
//     document.addEventListener('DOMContentLoaded', function() {
//         var s,t; s = document.createElement('script'); s.type = 'text/javascript';
//         s.src = 'https://s3-ap-southeast-1.amazonaws.com/qiscus-sdk/public/qismo/qismo-v4.js'; s.async = true;
//         s.onload = s.onreadystatechange = function() { new Qismo('xheop-u1kttqcvsim2wtl', {
//                         options: {
//                             channel_id: 126708,  
//                             extra_fields: [], 
//                         }
//                     }); }
//         t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(s, t);
//     });
</script>



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
    $(document).ready(function(){

         // $.ambiance({message: "dengan predikat unggul dalam Sistem Pemeringkatan Kemahasiswaan Kategori 2 Tahun 2021 !",
         //    type: "success",
         //    timeout: 5,
         //    title: "ITB Mendapatkan Peringkat Terbaik 1!",
         //    link: "https://www.instagram.com/p/CXNkgh8FHzL/",
         //    linkName: "Selengkapnya",
         //    linkBlank: true,
         //    linkColor: "white"});


        // Slide for Banner
        $('#slideBanner').slick({
            prevArrow: $('#prevBanner'),
            nextArrow: $('#nextBanner'),
            autoplay: true,
            autoplaySpeed: 2000
        });
        // Slide for Testimonial
        $('#slideQuotes').slick({
            prevArrow: $('#prevQuotes'),
            nextArrow: $('#nextQuotes'),
            autoplay: true,
            autoplaySpeed: 2000
        });
    });

    function searchVideo(id_tema){
        $.ajax({
            url: "<?php echo base_url()?>coba/detail_video/"+id_tema,
            success: 
            function(result){
                location.reload(true);
                // $('#links').text(result); //insert text of test.php into your div
                // setTimeout(function(){
                //     sendRequest(); //this will send request again and again;
                // }, 5000);
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


<!--<script src="<?= base_url('assets/kalender/jPages-master/js/jPages.js')?>"></script>-->

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

    
    function filterListActivity(items) {
        
        var date = $('#tgl_filter').val();
        var kampus = items.value;


        
        $.ajax({
                    type: "POST",
                    url:"<?= site_url('beranda/getKegiatanByTglFilter') ?>",
                    dataType: 'html',
                    data: {tgl: date, kampus:kampus },
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
  

    function myDateFunction(id, fromModal,today = false) {
        

        
        if (fromModal) {
            $("#" + id + "_modal").modal("hide");
        }
        var date = $("#" + id).data("date");
        var hasEvent = $("#" + id).data("hasEvent");
        
        $('#tgl_filter').val(date);

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


 <script type="text/javascript" src="<?= base_url('assets/js') ?>/instafeed.min.js"></script>
    <script type="text/javascript">
        
        var feed = new Instafeed({
            resolution: 'thumbnail',
            limit : 6,
            // accessToken: '' DI ISI TOKEN IG
        });

        feed.run();


    </script>


    <script src="<?=base_url()?>assets/orgchart/js/jquery.orgchart.js"></script>

       <script type="text/javascript">
        
        // Dr. G. Prasetyo Adhitama S.Sn,. M.Sn.
        var datascource = {


            'name': 'Prof. Reini Wirahadikusumah Ph.D ','title': 'Rektor ITB','className': 'top-level',
            'children': [
                {'name': 'Prof. Dr. Jaka Sembiring ','title': 'Wakil Rektor Akademik & Kemahasiswaan','className': 'top-level',
            'children': [
                {
                    'name': 'D. Arch. G. Prasetyo Adhitama S.Sn., M.Sn.','title': 'Direktur','className': 'top-level',
                    'children': 
                                [
                                  { 'name': 'Nenden Rina Ratnakomala ST., MT.', 'title': 'Kasubdit Beasiswa','className': 'middle-level', 
                                    'children': [
                                      { 'name': 'Mayda Purwanti, A.Md., S.IP', 'title': 'Kepala Seksi Beasiswa Pemerintah','className': 'bottom-level' },
                                      { 'name': 'Yanti Sukmawati, A.Md., S.Kom., M.M.', 'title': 'Kepala Seksi Beasiswa Non Pemerintah','className': 'bottom-level'}
                                    ]
                                  },
                                  { 'name': 'Dr. Epin Saepudin, M.Pd', 'title': 'Kasubdit Organisasi Mahasiswa <br> dan Pengembangan Prestasi Mahasiswa','className': 'middle-level', 
                                    'children': [
                                      { 'name': 'Eka Kurniawan S.A.P', 'title': 'Kepala Seksi Organisasi Mahasiswa','className': 'bottom-level'},
                                      { 'name': 'Ade Suherwan, S.S.', 'title': 'Kepala Seksi Pengembangan Prestasi Mahasiswa','className': 'bottom-level' },
                                    ] 
                                  },
                                   { 'name': 'Hafiz Aziz Ahmad, S.Sn., M.Des., Ph.D.', 'title': 'Kasubdit Pengembangan Profesi <br> dan Kewirausahaan Mahasiswa','className': 'middle-level',
                                    'children': [
                                      { 'name': 'Elinda Febriana, S.E., MBA.', 'title': 'Kepala Seksi Profesi dan Kewirausahaan','className': 'bottom-level' },
                                      { 'name': 'Danial, S.Si., M.T.', 'title': 'Kepala Seksi Tracer Study','className': 'bottom-level' }
                                    ]
                                  },
                                  { 'name': 'Ir. Hendri Syamsudin M.Sc., Ph.D', 'title': 'Kasubdit Kesejahteraan Mahasiswa','className': 'middle-level', 
                                    'children': [
                                      { 'name': 'Nanan Hendayana, A.Md., S.A.P.', 'title': 'Kepala Seksi Pendidikan Karakter','className': 'bottom-level'},
                                      { 'name': 'Ratih Ratnawati A.Md.', 'title': 'Kepala Seksi Bimbingan dan Konseling','className': 'bottom-level'}
                                    ] 
                                  },
                                  { 'name': 'Riki Iskandar, A.Md., S.E., M.Ak.', 'title': 'Kasubdit Administrasi, Keuangan <br> dan Sistem Informasi Kemahasiswaan','className': 'middle-level', 
                                    'children': [
                                      { 'name': 'Ita Shinta, S.A.B M.A.B', 'title': 'Kepala Seksi Administrasi dan Keuangan','className': 'bottom-level' },
                                      { 'name': 'Wowo Warsono, A.Md, S.Kom.', 'title': 'Kepala Seksi Sistem & Teknologi Informasi','className': 'bottom-level'},
                                    ]
                                  },
                                   { 'name': 'Asep Ahadi, S.A.B.', 'title': 'Kepala Sekretariat dan ULT','className': 'middle-level',},
                                 ]
                        }           
                    ]   
                }           
            ]  


          }
          $('#chart-container').orgchart({
            'data' : datascource,
            'depth': 3,
            'nodeTitle':'name',
            'nodeContent':'title',
            'nodeID': 'id',
            'pan': true,
            'createNode': function(node, data) {
              let secondMenuIcon = document.createElement('i'),
                secondMenu = document.createElement('div');

              secondMenuIcon.setAttribute('class', 'fa fa-user-circle second-menu-icon');
              secondMenuIcon.addEventListener('click', (event) => {
                event.target.nextElementSibling.classList.toggle('hidden');
              });
              secondMenu.setAttribute('class', 'second-menu');
              secondMenu.innerHTML = '<img class="avatar rounded-circle" width="100px" src="<?= base_url('assets/pejabat')?>/'+data.title+'.jpg ">';
              node.append(secondMenuIcon)
              node.append(secondMenu);
            }
          });

          $(document).ready(function() {
              $('#chart-container').css('overflow-x','auto');   
              $('#chart-container').css('overflow-y','auto');    
          });

            



    </script>




