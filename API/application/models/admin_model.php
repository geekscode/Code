<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	/**
	 *	
	 *	@author [Bayu Nugroho] <[geeks.code@yahoo.com]>
	 * 
	 */
	
	
	public function getLoginData($username, $password){
		$query = $this
					->db
					->where('username', $username)
					->where('password', sha1($password))
					->limit(1)
					->get('users');

		if ($query->num_rows() > 0) {			
			return $query->row();
			
		}else{
			$this->session->set_flashdata('result_login','Username Atau Password yang anda masukan salah !!');
			header('location:'. base_url().'index.php/admin');
			return false;
			
		}

	}
}

/* End OF File admin_model.php */
/* Location: ./application/model/admin_model.php */