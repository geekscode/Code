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
		if (isset($_SESSION['username']) AND isset($_SESSION['password']) AND $_SESSION['level'] == "admin") {
			redirect('admin_home');
		}
		if (isset($_SESSION['username']) AND isset($_SESSION['password']) AND $_SESSION['level'] == "user") {
			redirect('user_home');
		}
	}

	public function index() {

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
				$_SESSION['namalengkap'] = $hasil['namalengkap'];
				$_SESSION['level'] = $hasil['level'];

				if ($_SESSION['level'] == "admin") {
					redirect('admin_home');	
				}else{
					redirect('user_home');
				}
			}
		}

		$this->load->view('Admin/login/header');
		$this->load->view('Admin/login/index');
		$this->load->view('Admin/login/footer');
	}

}
?>