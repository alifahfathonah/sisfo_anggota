<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_d_teller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if($this->session->userdata('hak_akses') !='5') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
            redirect('login');
        }
    }
	
	public function index()
	{
		$data['title'] = "TABARRU";
		$data['sub_judul'] = "ANGGOTA KOPERASI TABARRU";

        $id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabm WHERE id_anggota='$id'")->result();

		$this->load->view('templates_website/header');
		$this->load->view('user_tabarru/anggota_d_teller',$data);
        $this->load->view('templates_website/contact');
		$this->load->view('templates_website/footer');
	}
}
