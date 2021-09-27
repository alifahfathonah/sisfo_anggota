<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_k extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('KomunitasM');

		if ($this->session->userdata('hak_akses') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
			redirect('Auth/indexAdmin');
		}
	}

	public function index()
	{
		$data['title'] = "KOMUNITAS";
		$data['sub_judul'] = "ANGGOTA KOMUNITAS";
		$data['user'] = $this->db->get_where('user_admin', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$this->load->view('templates_website/header');
		$this->load->view('user_komunitas/admin_k', $data);
		$this->load->view('templates_website/contact');
		$this->load->view('templates_website/footer');
	}
}