<?php if (!defined('BASEPATH')) die();

/**
 *
 * 
 * @author [Bayu Nugroho] <geeks.code@yahoo.com>
 *
 * 
 */


class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
	}

	public function index() {

		if (isset($_SESSION['username']) AND isset($_SESSION['password'])) {
			redirect('admin_home');
		}

		$this->form_validation->set_rules('username','Username','required|min_length[4]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]');
		if ($this->form_validation->run() !== FALSE) {			
			$hasil = $this
						->admin_model
						->getLoginData(
							$this->input->post('username'), 
							$this->input->post('password'));

			if ($hasil !== FALSE) {
				$_SESSION['username'] = $this->input->post('username');
				$_SESSION['password'] = $this->input->post('password');
				redirect('admin_home');
			}
		}

		$this->load->view('Admin/global/header');
		$this->load->view('Admin/login/index');
		$this->load->view('Admin/global/footer');
	}

	public function logout()
	{
		session_destroy();
		redirect('admin');

	}

}
?>