<?php  if (!defined('BASEPATH')) die();

/**
* 
*/
class Frontpage extends CI_Controller
{

	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('global/footer');
	}
}

?>