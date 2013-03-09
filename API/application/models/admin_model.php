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
				$data['logged_in'] = 'yesGetMeLogin';
				$this->session->set_userdata($data);
			}
			return $data;
			
		}else{
			$this->session->set_flashdata('result_login','Username Atau Password yang anda masukan salah !!');
			header('location:'. base_url().'index.php/admin');
			
		}

	}

	public function showTable($table)
	{
		return $this->db->get($table);
	}

	public function getRecord($table,$data)
	{
		$this->db->insert($table, $data);
	}
	public function updateRecord($table,$data,$key)
	{
		$this->db->update($table,$data,$key);
	}

	public function getSelectedData($table,$data)
	{
		return $this->db->get_where($table,$data);
	}
	public function getAllDataLimited($table,$limit,$offset)
	{
		return $this->db->get($table, $limit, $offset);
	}
	public function deleteData($table,$id)
	{
		$this->db->delete($table,$id);
	}
	
	
	public function showkategori()
	{
		$query = $this->db->get('kategori');
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