<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasi_tijarah extends CI_Controller {

	public function index()
	{
		$data['title'] = "Koperasi Tijarah";

		$this->load->view('templates_website/header');
		$this->load->view('anggota_jabatan/Koperasi_tijarah',$data);
		$this->load->view('templates_website/footer_content');
	}
}
