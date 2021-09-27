<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekretaris_k_tij extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if($this->session->userdata('hak_akses') !='2') {
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
		$data['title'] = "TIJARAH";
		$data['sub_judul'] = "ANGGOTA KOPERASI TIJARAH";

        $id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabq WHERE id_anggota='$id'")->result();

		$this->load->view('templates_website/header');
		$this->load->view('user_tijarah/sekretaris_k_tij',$data);
        $this->load->view('templates_website/contact');
		$this->load->view('templates_website/footer');
	}
}
