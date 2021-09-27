<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_SA extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if($this->session->userdata('role_id') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
            redirect('welcome');
            
        }
    }

	public function index()
	{
		$data['title'] = "Transaksi";
		$data['jurnalbm'] = $this->Data_user_m->get_data('jurnalbm')
            ->result();
		$this->load->view('templates_website/header');
		$this->load->view('user_transaksi/transaksi_sa',$data);
		$this->load->view('templates_website/footer');
	}
}