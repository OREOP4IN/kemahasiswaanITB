<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'beranda';
// $route['404_override'] 		= 'default';
//$route['404_override'] 			= 'beranda';
$route['new_portal'] 			= 'beranda';
$route['new_portal2'] 			= 'beranda/ver2';
$route['tiktok'] 				= 'beranda';
$route['tkt-2021'] 				= 'beranda/tkt2021';
$route['pmbitb-2021'] 			= 'assets/buku/pmbitb2021';
#$route['sirajin'] 				= 'sirajin/public';

$route['translate_uri_dashes'] 	= FALSE;

$route['admin'] 				= 'beranda';
$route['kuesioner'] 			= 'welcome/kuesioner';
$route['admin/events/(:num)'] 	= 'beranda';
$route['event/(:num)'] 			= 'event/$1';
$route['status'] 				= 'welcome/status';
$route['siprima'] 				= 'welcome/siprima';
$route['cerita_inspiratif'] 	= 'beranda';
$route['enj'] 					= 'beranda';
$route['buku_beasiswa'] 		= 'beranda';
$route['kkn'] 					= 'beranda';
$route['beasiswa'] 				= 'beasiswa';
$route['login']					= 'beranda/login';
$route['link/(:any)']			= 'link/address/$1';
$route['psikotes']				= 'link/address/psikotes';
$route['en']					= 'LanguageSwitcher/switchLang/english';
$route['id']					= 'LanguageSwitcher/switchLang/indonesian';


//$route['admin/prestasi/tampil_workshop/(:num)/(:num)'] = 'admin/prestasi/tampil_workshop/$1/$2';
//$route['admin/profil/(:num)'] = 'admin/profil/$1';
