<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nusoap_lib
{
	public $nusoap_dir = 'nusoap-0.9.5';

	function __construct()
	{
		require_once(str_replace("\\","/",APPPATH).'libraries/'.$this->nusoap_dir.'/lib/nusoap.php');
	}
	// function Nusoap_lib()
	// {
	// 	require_once(str_replace("\\","/",APPPATH).'libraries/'.$this->nusoap_dir.'/lib/nusoap.php');
	// }
}