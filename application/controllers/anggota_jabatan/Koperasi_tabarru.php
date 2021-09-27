<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koperasi_tabarru extends CI_Controller {

	public function index()
	{
		$data['title'] = "Koperasi Tabarru";

		$this->load->view('templates_website/header');
		$this->load->view('anggota_jabatan/koperasi_tabarru',$data);
		$this->load->view('templates_website/footer_content');
	}
}
