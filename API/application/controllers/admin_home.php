<?php

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
	}

	public function index()
	{
		echo "Bayu Nufroho";
	}
}