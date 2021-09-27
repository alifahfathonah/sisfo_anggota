<?php

class Informasi_tij extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '2') {
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

        $data['title'] = "Informasi Koperasi Tijarah ";
        $data['info'] = $this->Data_user_m->get_data('info_tij')
            ->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/informasi_tij', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_info()
    {

        $data['title'] = "Tambah Data Informasi";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/add_info_tij', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_info_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->add_info();
        } else {

            $judul                  = $this->input->post('judul');
            $desc_tij                = $this->input->post('desc_tij');

            $data = array(
                'judul'                => $judul,
                'desc_tij'              => $desc_tij,

            );

            $this->Data_user_m->insert_data($data, 'info_tij');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil ditambahkan !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/informasi_tij');
        }
    }

    public function update_info($id)
    {

        $where = array('id_info_tij' => $id);
        $data['title'] = "Edit Informasi Koperasi Tijarah";
        $data['info'] = $this->db->query("SELECT * FROM info_tij WHERE id_info_tij = '$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_info_tij', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_info_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->update_info('');
        } else {
            $id                     = $this->input->post('id_info_tij');
            $judul                  = $this->input->post('judul');
            $desc_tij               = $this->input->post('desc_tij');

            $data = array(
                'judul'                => $judul,
                'desc_tij'          => $desc_tij,

            );

            $where = array(
                'id_info_tij'          => $id
            );

            $this->Data_user_m->update_data('info_tij', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/informasi_tij');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('desc_tij', 'desc_tij', 'required');
    }

    public function delete_info($id)
    {

        $where = array('id_info_tij' => $id);
        $this->Data_user_m->delete_data($where, 'info_tij');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil dihapus !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

        redirect('admin/informasi_tij');
    }
}
