<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 	
 */

class Admin_home extends CI_Controller{

	public function __construct()
	{
		session_start();
		parent::__construct();

		if (!isset($_SESSION['username']) AND !isset($_SESSION['password'])) {
			redirect('admin');
		}
		if ($_SESSION['level']!== "admin") {
			redirect('admin');
		}
	}

	public function index()
	{
		
		$this->load->view('Admin/global/header');
		$this->load->view('Admin/index');
		$this->load->view('Admin/global/footer');
	}

	public function manageUser()
	{

		$data['record'] = $this->admin_model->showUsers();
		$this->load->view('Admin/global/header');
		$this->load->view('Admin/users/users', $data);
		$this->load->view('Admin/global/footer');	
	}

	

	public function addUsers()
	{

		/*$config = array(
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'required|min_length[4]|maxlength[15]',
					),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required|min_length[4]|maxlength[15]|matches[passwordConf]',
					),
				array(
					'field' => 'passwordConf',
					'label' => 'Password Confirmation',
					'rules' => 'required',
					),
				array(
					'field' => 'namalengkap',
					'label' => 'Nama Lengkap',
					'rules' => 'required|min_length[4]',
					)
				);*/

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