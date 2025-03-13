<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    if ( ! function_exists('check_file_remote'))
{
    function check_file_remote($remoteFile)
    {
        // Open file
        $handle = @fopen($remoteFile, 'r');
        // Check if file exists
        if(!$handle){
            return false;
        }else{
            return true;
        }

    }
}

    if ( ! function_exists('alphabetduatingkat'))
{
    function alphabetduatingkat($num)
    {
        if ($num <= 26) {
           $alpha_final = alphabet($num);
        }else if($num > 26 && $num <= 52){
           $num = $num-26;
           $alpha_final = 'a'.alphabet($num);
        }else if($num > 52 && $num <= 78){
           $num = $num-52;
           $alpha_final = 'b'.alphabet($num);
        }else if($num > 78 && $num <=  104){
           $num = $num-78;
           $alpha_final = 'c'.alphabet($num);
        }else if($num > 104 && $num <= 130){
           $num = $num-104;
           $alpha_final = 'd'.alphabet($num);
        }else if($num > 130 && $num <= 156){
           $num = $num-130;
           $alpha_final = 'e'.alphabet($num);
        }else if($num > 156 && $num <= 182){
           $num = $num-156;
           $alpha_final = 'f'.alphabet($num);
        }else if($num > 182 && $num <= 208){
           $num = $num-182;
           $alpha_final = 'g'.alphabet($num);
        }else if($num > 208 && $num <= 234){
           $num = $num-208;
           $alpha_final = 'h'.alphabet($num);
        }else if($num > 234 && $num <= 260){
           $num = $num-234;
           $alpha_final = 'i'.alphabet($num);
        }else if($num > 260 && $num <= 286){
           $num = $num-260;
           $alpha_final = 'j'.alphabet($num);
        }else if($num > 286 && $num <= 312){
           $num = $num-286;
           $alpha_final = 'k'.alphabet($num);
        }else if($num > 312 && $num <= 338){
           $num = $num-312;
           $alpha_final = 'l'.alphabet($num);
        }else if($num > 338 && $num <= 364){
           $num = $num-338;
           $alpha_final = 'm'.alphabet($num);
        }else if($num > 364 && $num <= 390){
           $num = $num-364;
           $alpha_final = 'n'.alphabet($num);
        }else if($num > 390 && $num <= 416){
           $num = $num-390;
           $alpha_final = 'o'.alphabet($num);
        }else if($num > 416 && $num <= 442){
           $num = $num-416;
           $alpha_final = 'p'.alphabet($num);
        }else{
           $alpha_final = $this->alphabet($num);
        }
        
        return $alpha_final;
    }
}
 
    if ( ! function_exists('alphabet'))
        {
            function alphabet($number)
            {
                switch ($number)
                {   
                    case 0:
                        return "";
                        break;
                    case 1:
                        return "a";
                        break;
                    case 2:
                        return "b";
                        break;
                    case 3:
                        return "c";
                        break;
                    case 4:
                        return "d";
                        break;
                    case 5:
                        return "e";
                        break;
                    case 6:
                        return "f";
                        break;
                    case 7:
                        return "g";
                        break;
                    case 8:
                        return "h";
                        break;
                    case 9:
                        return "i";
                        break;
                    case 10:
                        return "j";
                        break;
                    case 11:
                        return "k";
                        break;
                    case 12:
                        return "l";
                        break;
                    case 13:
                        return "m";
                        break;
                    case 14:
                        return "n";
                        break;
                    case 15:
                        return "o";
                        break;
                    case 16:
                        return "p";
                        break;
                    case 17:
                        return "q";
                        break;
                    case 18:
                        return "r";
                        break;
                    case 19:
                        return "s";
                        break;
                    case 20:
                        return "t";
                        break;
                    case 21:
                        return "u";
                        break;
                    case 22:
                        return "v";
                        break;
                    case 23:
                        return "w";
                        break;
                    case 24:
                        return "x";
                        break;
                    case 25:
                        return "y";
                        break;
                    case 26:
                        return "z";
                        break;
                }
            }
        }
//untuk mengetahui bulan bulan
if ( ! function_exists('bulan'))
{
    function bulan($bln)
    {
        switch ($bln)
        {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
                return "Apr";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Agu";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Okt";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Des";
                break;
        }
    }
}
 
//format tanggal yyyy-mm-dd
if ( ! function_exists('tgl_indo'))
{
    function tgl_indo($tgl)
    {
        $ubah = gmdate($tgl, time()+60*60*8);
        $pecah = explode("-",$ubah);  //memecah variabel berdasarkan -
        $tanggal = $pecah[2];
        $bulan = bulan($pecah[1]);
        $tahun = $pecah[0];
        return $tanggal.' '.$bulan.' '.$tahun; //hasil akhir
    }
}
 
//format tanggal timestamp
if( ! function_exists('tgl_indo_timestamp')){
 
function tgl_indo_timestamp($tgl)
{
    $inttime=date('Y-m-d H:i:s',$tgl); //mengubah format menjadi tanggal biasa
    $tglBaru=explode(" ",$inttime); //memecah berdasarkan spaasi
     
    $tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd
    $tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss
    $tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -
 
    $tgl=$tglBarua[2];
    $bln=$tglBarua[1];
    $thn=$tglBarua[0];
 
    $bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
    $ubahTanggal="$tgl $bln $thn | $tglBaru2 "; //hasil akhir tanggal
 
    return $ubahTanggal;
}
}



if( ! function_exists('tgl_indo_timestamp2')){
 
function tgl_indo_timestamp2($tgl)
{
    $tglBaru=explode(" ",$tgl); //memecah berdasarkan spaasi
     
    $tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd
    $tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss
    $tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -
 
    $tgl=$tglBarua[2];
    $bln=$tglBarua[1];
    $thn=$tglBarua[0];
 
    //$bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
    $ubahTanggal="$tgl/$bln/$thn $tglBaru2 "; //hasil akhir tanggal
 
    return $ubahTanggal;
}
}

/**
 * trimTime
 *
 * Mengambil bagian tanggal saja dari tipe data DATETIME (bagian waktu dihapus)
 *
 * @access    public
 * @param     string    tgl (yyyy-mm-dd hhhh:mm:dd)
 * @return    integer
 */
if (!function_exists('trimTime')) {
    function trimTime($tgl) {
        $temp = explode(' ', $tgl);
        return $temp[0];
    }
}

if ( ! function_exists('tanggal_indo_lengkap')) {
    function tanggal_indo_lengkap($tanggal, $cetak_hari = false) {
        $hari = array ( 1 =>    'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $bulan = array (1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split 	  = explode('-', trimTime($tanggal));
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }

}
    if ( ! function_exists('tanggal_indo_lengkap_eng')) {
    function tanggal_indo_lengkap_eng($tanggal, $cetak_hari = false) {
        $hari = array ( 1 =>    'Monday',
            'Tuesday',
            'Wednesday',
            'Thrusday',
            'Friday',
            'Saturday',
            'Sunday'
        );

        $bulan = array (1 =>   'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        );
        $split    = explode('-', trimTime($tanggal));
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }

}
    if (!function_exists('removetag')) {
    function removetag($text) {
        $step1 = preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $text);
        $step2 = strip_tags($step2);
        return $step2;
    
    }
    
    }

    //format tanggal yyyy-mm-dd
if ( ! function_exists('format_date_db'))
{
    function format_date_db($tgl)
    {
        $pecah      = explode("/",$tgl);  //memecah variabel berdasarkan -
        $tanggal    = $pecah[0];
        $bulan      = $pecah[1];
        $tahun      = $pecah[2];
        return $tahun.'-'.$bulan.'-'.$tanggal; //hasil akhir
    }
}
 
 if ( ! function_exists('format_date_form'))
{
    function format_date_form($tgl)
    {
        $pecah      = explode("-",$tgl);  //memecah variabel berdasarkan -
        $tahun    = $pecah[0];
        $bulan      = $pecah[1];
        $tanggal      = $pecah[2];
        return $tanggal.'/'.$bulan.'/'.$tahun; //hasil akhir
    }

}

if ( ! function_exists('format_date_form2'))
{
    function format_date_form2($tgl)
    {
        $pecah      = explode("-",$tgl);  //memecah variabel berdasarkan -
        $tahun    = $pecah[0];
        $bulan      = $pecah[1];
        $tanggal      = $pecah[2];
        return $tanggal.'-'.$bulan.'-'.$tahun; //hasil akhir
    }

}


 if ( ! function_exists('is_img'))
{
     function is_img($link='')
    {
        $file = $link;
        $headers = get_headers($file, 1);
        if (strpos($headers['Content-Type'], 'image/') !== false) {
            return 1;
        } else {
            return 2;
        }
    }
}

 if ( ! function_exists('file_available'))
{
     function file_available($link='')
    {
        if (file_exists($link) && !is_dir($link)) {
            return true;
        }else{
            return false;
        }
    }
}

