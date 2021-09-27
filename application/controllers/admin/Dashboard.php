<?php 

class Dashboard extends CI_Controller {

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

    public function index() {

        $data['title'] = "Dashboard";
        $user = $this->db->query("SELECT * FROM data_user_anggota");
        $data['user']=$user->num_rows();
        
        $info_kom = $this->db->query("SELECT * FROM info_kom");
        $data['info_kom']=$info_kom->num_rows();
        $info_tij = $this->db->query("SELECT * FROM info_tij");
        $data['info_tij']=$info_tij->num_rows();
        $info_tab = $this->db->query("SELECT * FROM info_tab");
        $data['info_tab']=$info_tab->num_rows();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');

    }
}

