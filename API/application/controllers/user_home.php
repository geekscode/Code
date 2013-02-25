<?php if(!DEFINED('BASEPATH')) exit('No Direct Script Allowed');



/**
*
*
* 
*/


class User_home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		if (!isset($_SESSION['username']) AND !isset($_SESSION['password'])) {
			redirect('admin');
		}
		if ($_SESSION['level']!=="user") {
			redirect('admin');
		}
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