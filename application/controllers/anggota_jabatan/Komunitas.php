<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komunitas extends CI_Controller {

	public function index()
	{
		$data['title'] = "Komunitas";

		$this->load->view('templates_website/header');
		$this->load->view('anggota_jabatan/komunitas',$data);
		$this->load->view('templates_website/footer_content');
	}
}
