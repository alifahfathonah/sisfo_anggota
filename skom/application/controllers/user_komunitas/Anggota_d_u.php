<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_d_u extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '11') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = "KOMUNITAS";
        $data['sub_judul'] = "ANGGOTA KOMUNITAS";

        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);

        $this->load->view('templates_website/header');
        $this->load->view('user_komunitas/anggota_d_u', $data);
        $this->load->view('templates_website/contact');
        $this->load->view('templates_website/footer');
    }
}