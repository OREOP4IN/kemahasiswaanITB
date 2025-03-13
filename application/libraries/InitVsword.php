<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class InitVsword
{
	public $dir = 'vsword';

	function __construct()
	{
		require_once(str_replace("\\","/",APPPATH).'libraries/'.$this->dir.'/VsWord.php');
	}
}