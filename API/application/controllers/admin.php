<?php if (!defined('BASEPATH')) die();

/**
 * @author [Bayu Nugroho] <geeks.code@yahoo.com>
 * @category [Blog]
 * @link [http://localhost/~hacks/API/] [description]
 */

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
	}


/**
 * 
 * @package [index Login Page]
 * @return  [array or object] [description]
 * 
 */


	public function index() {

		if (isset($_SESSION['username']) AND isset($_SESSION['password'])AND $_SESSION['level'] == "admin") {
		 	redirect('admin/home');
		 }
		 if (isset($_SESSION['username']) AND isset($_SESSION['password'])AND $_SESSION['level'] == "user") {
		 	redirect('user_home');
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
				$_SESSION['namalengkap'] = $hasil['namalengkap'];
				$_SESSION['level'] = $hasil['level'];

				if ($_SESSION['level'] == "admin") {
					redirect('admin/home');	
				}else{
					redirect('user_home');
				}
			}
		}

		$this->load->view('Admin/login/header');
		$this->load->view('Admin/login/index');
		$this->load->view('Admin/login/footer');
	}
	
	/**
	 *
	 * 
	 *@package [Dashboard Admin]
	 * 
	 */

	public function Home()
	{
		if (!isset($_SESSION['username']) AND !isset($_SESSION['password'])) {
			redirect('admin');
		}
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}
		$this->load->view('Admin/global/header');
		$this->load->view('Admin/index');
		$this->load->view('Admin/global/footer');
	}

	public function manageUser()
	{

		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}

		$data['record'] = $this->admin_model->showUsers();
		$this->load->view('Admin/global/header');
		$this->load->view('Admin/users/users', $data);
		$this->load->view('Admin/global/footer');	
	}

	public function addUsers()
	{
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}

		$this->form_validation->set_rules('username','Username','required|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]');

		if ($this->form_validation->run()!== FALSE) {

			$pass = sha1($this->input->post('password'));
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $pass,
				'namalengkap' => $this->input->post('namalengkap'),
				'Email' => $this->input->post('email'),
			);

			$this->admin_model->getRecord($data);
			redirect('admin_home/manageUser');
		}

		$this->load->view('Admin/global/header');
		$this->load->view('Admin/users/act_users');
		$this->load->view('Admin/global/footer');
	}

	public function logout()
	{
		session_destroy();
		redirect('admin');

	}

}
?>