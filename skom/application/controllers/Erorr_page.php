<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Erorr_page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('hak_akses') != '0') {
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     <strong>Akun Anda Aktif !</strong>
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
        // 	</button>
        //     </div>');
        //     redirect('Auth/indexAdmin');
        // }
    }

    public function index()
    {
        $this->session->sess_destroy();

        $data['title'] = "403-Non-Aktif";
        $this->load->view('erorr_page', $data);
    }
    public function index_x()
    {
        $this->session->sess_destroy();

        $data['title'] = "403-Non-Aktif";
        $this->load->view('erorr_page_x', $data);
    }

    public function block()
    {
        $this->session->sess_destroy();

        $data['title'] = "403-Akses Anda Di Block";
        $this->load->view('erorr_block', $data);
    }
}