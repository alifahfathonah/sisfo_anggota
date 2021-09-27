<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Admin_K extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
        	</button>
            </div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['user1'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();

        $data['title'] = "Transaksi";
        $data['jurnalbq'] = $this->Data_user_m->get_data('jurnalbq')
            ->result();
        $data['jurnalbm'] = $this->Data_user_m->get_data('jurnalbm')
            ->result();
        $this->load->view('templates_website/header');
        $this->load->view('user_transaksi/transaksi_admin_k', $data);
        $this->load->view('templates_website/footer');
    }
}