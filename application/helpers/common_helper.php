<?php

define('ASSETS_DIR', 'assets/');
define('ADMIN_LTE', 'AdminLTE-2.3.0');

if(!function_exists('assets_lte'))
{
	function assets_lte($strPath = '')
	{
		echo base_url(ASSETS_DIR.ADMIN_LTE.'/'.$strPath);
	}
}
if(!function_exists('is_url_exist'))
{
	function is_url_exist($url){
		$ch = curl_init($url);    
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if($code == 200){
		   $status = true;
		}else{
		  $status = false;
		}
		curl_close($ch);
	   return $status;
	}
}
if(!function_exists('get_youtube_videoid'))
{
	function get_youtube_videoid($url)
	{
		$pattern = 
			'%^# Match any youtube URL
			(?:https?://)?  # Optional scheme. Either http or https
			(?:www\.)?      # Optional www subdomain
			(?:             # Group host alternatives
			  youtu\.be/    # Either youtu.be,
			| youtube\.com  # or youtube.com
			  (?:           # Group path alternatives
				/embed/     # Either /embed/
			  | /v/         # or /v/
			  | /watch\?v=  # or /watch\?v=
			  )             # End path alternatives.
			)               # End host alternatives.
			([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
			$%x'
			;
		$result = preg_match($pattern, $url, $matches);
		if ($result) {
			return $matches[1];
		}
		return '';
	}
}

if (!function_exists('slugify'))
{
	function list_bulan()
	{
		return array(
			'1' => 'Januari',
			'2' => 'Pebruari',
			'3' => 'Maret',
			'4' => 'April',
			'5' => 'Mei',
			'6' => 'Juni',
			'7' => 'Juli',
			'8' => 'Agustus',
			'9' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		);
	}
}
if (!function_exists('slugify'))
{
	function slugify($text)
	{ 
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

	  // trim
	  $text = trim($text, '-');

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // lowercase
	  $text = strtolower($text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  if (empty($text))
	  {
		return 'n-a';
	  }

	  return $text;
	}
}
if (!function_exists('image_toBase64'))
{
	function image_toBase64($path)
	{
		$base64data = '';
		if(file_exists($path)){
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64data = 'data:image/' . $type . ';base64,' . base64_encode($data);
		}else{
			$path = './assets/img/placeholder_img1.gif';
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64data = 'data:image/' . $type . ';base64,' . base64_encode($data);			
		}
		return $base64data;
	}
}

if (!function_exists('get_daynum'))
{
	function get_daynum($date)
	{
		return date('d', strtotime($date));
	}
}

if (!function_exists('get_month_s'))
{
	function get_month_s($date)
	{
		return date('M', strtotime($date));
	}
}

if (!function_exists('get_year'))
{
	function get_year($date)
	{
		return date('Y', strtotime($date));
	}
}

if(!function_exists('pagination_tpl'))
{
	function pagination_tpl($_conf){
			
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['last_link'] = 'Terakhir';
			$config['next_link'] = 'Selanjutnya';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = 'Sebelumnya';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_link'] = 'Awal';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['full_tag_close'] = '</ul>';
			$config = array_merge($_conf, $config);
			
			return $config;
	}
}

if(!function_exists('pagination_tpl_eng'))
{
	function pagination_tpl_eng($_conf){
			
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['last_link'] = 'Last';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['full_tag_close'] = '</ul>';
			$config = array_merge($_conf, $config);
			
			return $config;
	}
}

if(!function_exists('pagination_tpl_new'))
{
	function pagination_tpl_new($_conf){
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config = array_merge($_conf, $config);
			
			return $config;

	}
}




if (!function_exists('generate_hash'))
{
	function generate_hash($input, $rounds = 7)
	{
		$result['salt'] = "";
		$salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
		for($i=0; $i < 22; $i++) {
		  $result['salt'] .= $salt_chars[array_rand($salt_chars)];
		}
		$result['hash'] = crypt($input, sprintf('$2a$%02d$', $rounds) . $result['salt']);
		
		return (object) $result;
	}
}

if (!function_exists('verify_hash'))
{
	function verify_hash($password_entered, $password_hash)
	{
		return crypt($password_entered, $password_hash) == $password_hash;
	}
}

/*********************
*	ITB WEBSERVICES
**********************/
function parseITBLDAPAttribute($x)
{
	$z = new \StdClass;
	$x = explode(';',$x);
	for($n=0;$n<count($x);$n++){
		$y = explode('=>',$x[$n]);
		if(count($y) > 1){
			$z->{$y[0]} = isset($y[1]) ? $y[1] : '';
		}
	}
	return $z;
}

function call_service($service_url,$curl_data) 
{
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);

	$fields_string = "";
	if (is_array($curl_data)) foreach($curl_data as $key => $value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string,'&');
	curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

	$curl_response = curl_exec($curl);
	curl_close($curl);
	return $curl_response;
}

function streamFotoPegawai($nip)
{
	$service_url = 'http://webservice.itb.ac.id/service/rest/kepegawaian/getDataPegawaiByNipWithPass';
	$foto_src = 'http://www.sdm.itb.ac.id/admin/simpeg2011/simpegitb/protected/upload/personal/';
	$curl_data = array(
		'pass' => 'w2e3r4',
		'nip' => $nip
	);
	$data = call_service($service_url, $curl_data);
	$pegawai = json_decode($data);
	if(!isset($pegawai->foto)){
		return FALSE;
	}
	$ext = strtoupper(pathinfo($pegawai->foto, PATHINFO_EXTENSION));
	$ext = $ext == 'JPG' ? 'JPEG' : $ext;
	$file = str_ireplace(' ','%20',$foto_src.$pegawai->foto);
	
	return $file;
	// header('Content-Description: Foto Pegawai.');
	// header('Content-Type:'.image_type_to_mime_type(constant('IMAGETYPE_'.$ext)));
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate');
    // header('Pragma: public');	
	
	// return readfile($file);
}

function get_client_ip() 
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function statusByLte($identifier = 0)
{
	$status = 'warning';
	switch($identifier){
		case 1:
			$status = 'success';
		break;
		case 2:
			$status = 'warning';//'primary';
		break;
		case 3:
			$status = 'danger';
		break;
		case 4:
			$status = 'primary';//'default';
		break;		
	}
	
	return $status;
}

 function base64url_encode($data) { 
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 

    function base64url_decode($data) { 
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }