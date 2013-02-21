<?php
	

	/**
	* 
	*/
	class Site extends CI_Controller
	{
		
		function index(){
			$this->load->model('site_model');
			$data['records'] = $this->site_model->getAll();

			//$this->load->view('templates/header');
			$this->load->view('index', $data);
			//$this->load-view('templates/footer');
		}

		function data(){
			$this->load->model('site_model');
			$data['hasil'] = $this->site_model->data();

			$this->load->view('site', $data);
		}
	}
