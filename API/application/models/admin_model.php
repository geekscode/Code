<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	/**
	 *	
	 *	@author [Bayu Nugroho] <[geeks.code@yahoo.com]>
	 * 
	 */
	
	
	public function getLoginData($username, $password){	
		$pass = sha1($password);
		$query = $this->db->query("SELECT * from users where username = '$username' AND password ='$pass' ");	
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data['id'] = $row->iduser;
				$data['user'] = $row->username;
				$data['pass'] = $row->password;
				$data['namalengkap'] = $row->namalengkap;
				$data['level'] = $row->level;
			}						 
			 return $data;
			
		}else{
			$this->session->set_flashdata('result_login','Username Atau Password yang anda masukan salah !!');
			header('location:'. base_url().'index.php/admin');
			return false;
			
		}

	}

	public function getRecord($data)
	{
		$this->db->insert('users', $data);
		return ;
	}
	
	public function showUsers()
	{
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	

}

/* End OF File admin_model.php */
/* Location: ./application/model/admin_model.php */