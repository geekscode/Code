<?php if (!defined('BASEPATH')) die();

/**
 * @author [Bayu Nugroho] <geeks.code@yahoo.com>
 * @category [Blog]
 * @link [http://localhost/~hacks/API/] [description]
 * 
 */

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		session_start();
	}
/**
 * 
 * @package [index Login Page]
 * @access [Admin]
 * 
 *
 */
	public function index() {		
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)) {
			$this->form_validation->set_rules('username','Username','required|min_length[4]');
			$this->form_validation->set_rules('password','Password','required|min_length[4]');
			if ($this->form_validation->run() !== FALSE) {			
				$hasil = $this
							->admin_model
							->getLoginData(
								$this->input->post('username'), 
								$this->input->post('password'));				
				$_SESSION['username'] = $this->input->post('username');
				$_SESSION['password'] = $this->input->post('password');
				$_SESSION['namalengkap'] = $hasil['namalengkap'];
				$_SESSION['level'] =$hasil['level'];
				if ($_SESSION['level']=="admin") {
					redirect('admin/home');	
				}elseif ($_SESSION['level']=="user") {
					redirect('user_home');
				}
			}
		}else{
			$status = $this->session->userdata('level');
			if ($status=="admin") {
				redirect('admin/home');
			}else{
				redirect('user_home');
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
	 * @access [Admin]
	 * 
	 */

	public function home()
	{
		$cek = $this->session->userdata('logged_in');
		if (!empty($cek)) {
			$status = $this->session->userdata('level');
			if ($status=="admin") {
				$this->load->view('Admin/global/header');
				$this->load->view('Admin/index');
				$this->load->view('Admin/global/footer');
			}else{
				redirect('user_home');
			}
		}else{
			redirect('admin');
		}
			
	}

	/**
	 *
	 * 
	 *@package [Admin]=>[Show Users]
	 * @access [Admin]
	 * 
	 */
	

	public function showUser()
	{
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}
			$cek = $this->session->userdata('logged_in');
			if (!empty($cek)) {
				$page = $this->uri->segment(3);
				$limit = $this->config->item('limit_data');
				if (!$page) {
					$offset=0;
				}else{
					$offset = $page;
				}
				$total 					= $this->admin_model->showTable('users');
				$config['base_url'] 	= base_url() . 'index.php/admin/showUser';
				$config['total_rows']	= $total->num_rows();
				$config['per_page']		= $limit;
				$config['uri_segment']	= 3;

				$this->pagination->initialize($config);

				$baca["paginator"] 		= $this->pagination->create_links();
				$baca['data_users'] 	= $this->admin_model->getAllDataLimited("users",$limit,$offset);
				$this->load->view('Admin/global/header');
				$this->load->view('Admin/users/users', $baca);
				$this->load->view('Admin/global/footer');	
			}else{
				redirect('admin');
			}
			
	}


	/**
	 *
	 * 
	 *@package [Admin]=>[Add Users]
	 * @access [Admin]
	 * 
	 */
	

	public function tambahUser()
	{
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}

		$cek = $this->session->userdata('logged_in');
		if (!empty($cek)) {
			$data['status'] = "tambah";
			$data['judul'] = "Add User";
			$data['iduser']= "";
			$data['username'] = "";
			$data['password'] = "";
			$data['namalengkap'] = "";
			$data['email'] = "";
			$data['telp'] = "";
			$data['alamat'] = "";

			$this->load->view('Admin/global/header');
			$this->load->view('Admin/users/act_users', $data);
			$this->load->view('Admin/global/footer');
		}else{
			redirect('admin');
		}
	}

	public function editUser()
	{
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}

		$cek = $this->session->userdata('logged_in');
		if (!empty($cek)) {
			$data['judul'] = "Update User";
			$index['iduser']= $this->uri->segment(3);
			$pilih = $this->admin_model->getSelectedData('users',$index);
			foreach ($pilih->result() as $row) {
				$pass = sha1($row->password);
				$data['iduser'] = $row->iduser;
				$data['username'] = $row->username;
				$data['password'] = $pass;
				$data['namalengkap'] = $row->namalengkap;
				$data['email'] = $row->Email;
				$data['telp'] = $row->Telepon;
				$data['alamat'] = $row->Alamat;
				$data['level'] = $row->level;
				$data['status'] = "edit";
		}
			$this->load->view('Admin/global/header');
			$this->load->view('Admin/users/act_users', $data);
			$this->load->view('Admin/global/footer');
		}
		

	}

	public function manageUsers()
	{
		$cek = $this->session->userdata('logged_in');
		$status = $this->input->post('status');
		if ($status == 'tambah') {
			$submit = $this->input->post('submit');
			if (isset($submit)) {
				$add['iduser']		= $this->input->post('iduser');
		 		$add['username']	= strtolower($this->input->post('username'));
			 	$add['password'] 	= sha1($this->input->post('password'));
			 	$add['namalengkap'] = ucwords($this->input->post('namalengkap'));
			 	$add['Email'] 		= strtolower($this->input->post('email'));
			 	$add['Telepon'] 	= $this->input->post('telp');
			 	$add['Alamat'] 		= ucwords($this->input->post('alamat'));
			 $this->admin_model->getRecord('users',$add);
			 redirect('admin/showUser');
			}
		}elseif ($status == "edit") {
			$submit = $this->input->post('submit');
			if (isset($submit)) {
		 		$upd['username'] = $this->input->post('username');
			 	$upd['password'] = sha1($this->input->post('password'));
			 	$upd['namalengkap'] = $this->input->post('namalengkap');
			 	$upd['Email'] = $this->input->post('email');
			 	$upd['Telepon'] = $this->input->post('telp');
			 	$upd['Alamat'] = $this->input->post('alamat');
			 	$upd['level'] = $this->input->post('level');
			 	$id['iduser'] = $this->input->post('iduser');
				$this->admin_model->updateRecord('users',$upd,$id);
			 	redirect('admin/showUser');
			}	
		}
		
	}

	public function hapusUsers()
	{
		$hapus['iduser'] = $this->uri->segment(3);
		$data = $this->admin_model->deleteData("users",$hapus);
		?>
		<script>
			window.location = "<?php echo base_url(); ?>index.php/admin/showUser"
		</script>
		<?
	}


	public function showKategori()
	{
		if ($_SESSION['level']!=="admin") {
			redirect('admin');
		}
		$cek = $this->session->userdata('logged_in');
		if (!empty($cek)) {
			$page = $this->uri->segment(3);
			$limit = $this->config->item('limit_data');
			if (!$page) {
				$offset = 0;
			}else{
				$offset = $page;
			}
			$total = $this->admin_model->showTable('kategori');
			$config['base_url'] = base_url() . "index.php/admin/showKategori";
			$config['total_rows'] = $total->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;

			$this->pagination->initialize($config);
			$baca['paginator'] = $this->pagination->create_links();
			$baca['data_kategori'] = $this->admin_model->getAllDataLimited('kategori',$limit,$offset);
			$this->load->view('Admin/global/header');
			$this->load->view('Admin/Kategori/kategori',$baca);
			$this->load->view('Admin/global/footer');	
		}else{
			redirect('admin');
		}
			
	}

	public function addKategori()
	{
		$data['judul'] = "Add Kategori";
		$data['status'] = "tambah";
		$data['idkategori'] = "";
		$data['namakategori'] = "";
		$data['kategori_seo'] = "";
		$data['keterangan'] = "";

		$this->load->view('Admin/global/header');
		$this->load->view('Admin/Kategori/act_kategori', $data);
		$this->load->view('Admin/global/footer');
	}

	public function editKategori()
	{
		$data['judul'] = "Update Kategori";
		$index['idkategori'] = $this->uri->segment(3);
		$pilih = $this->admin_model->getSelectedData("kategori", $index);
		foreach ($pilih->result() as $row) {
			$data['status'] = "edit";
			$data['idkategori'] = $row->idkategori;
			$data['namakategori'] = $row->namakategori;
			$data['keterangan'] = $row->keterangan;
		}
		$this->load->view('Admin/global/header');
		$this->load->view('Admin/Kategori/act_kategori', $data);
		$this->load->view('Admin/global/footer');
		
	}

	public function manageKategori()
	{
		$status = $this->input->post('status');
		if ($status=="tambah") {
			$submit = $this->input->post('submit');
			if (isset($submit)) {
				$add['idkategori'] = $this->input->post('idkategori');
				$add['namakategori'] = $this->input->post('namakategori');
				$add['keterangan'] = $this->input->post('keterangan');
				$this->admin_model->getRecord('kategori', $add);
				redirect('admin/showKategori');
			}
		}elseif ($status =="edit") {
			$submit = $this->input->post('submit');
			if (isset($submit)) {
				$id['idkategori'] = $this->input->post('idkategori');
				$upd['namakategori'] = $this->input->post('namakategori');
				$upd['keterangan'] = $this->input->post('keterangan');
				$this->admin_model->updateRecord('kategori', $upd,$id);
				redirect('admin/showKategori');
			}
		}
	}

	public function hapusKategori()
	{
		$hapus['idkategori'] = $this->uri->segment(3);
		$data = $this->admin_model->deleteData("kategori",$hapus);
		?>
		<script>
			window.location = "<?php echo base_url(); ?>index.php/admin/showKategori"
		</script>
		<?
	}


	/**
	 *
	 * 
	 *@package [Admin]=>[Logout]
	 * @access [Admin]
	 * 
	 */
	

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
/* End of File admin.php */
/* Location : application/controllers */