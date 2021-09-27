<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_tab extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if($this->session->userdata('hak_akses') == NULL) {
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
		$data['title'] = "Informasi Koperasi Tabarru";
		$data['info_tab'] = $this->Data_user_m->get_data('info_tab')
            ->result();
		$this->load->view('templates_website/header');
		$this->load->view('user_informasi/informasi_tab',$data);
	}
}
