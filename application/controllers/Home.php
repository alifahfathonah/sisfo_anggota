<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();

		$data['title'] = "Home";
		$this->load->view('templates_home/header');
		$this->load->view('home',$data);
		$this->load->view('templates_home/footer');
	}
}
