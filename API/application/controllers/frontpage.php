<?php  if (!defined('BASEPATH')) die();

/**
* 
*/
class Frontpage extends CI_Controller
{
	function __construct(){
		parent::__construct();
		session_start();
	}
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('global/footer');
	}
	public function logout()
	{
		session_destroy();
		redirect('admin');

	}
}

?>