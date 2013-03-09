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
	}
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		if (!empty($cek)) {
			$status = $this->session->userdata('level');
			if ($status=="user") {
				$this->load->view('Admin/global/header');
				$this->load->view('Admin/global/footer');
			}else{
				redirect('admin');
			}
		}else{
			redirect('admin');
		}
		
	}
	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)) {
			redirect('admin');
		}else{
			$this->session->sess_destroy();
			redirect('admin');
		}

	}
}

 ?>