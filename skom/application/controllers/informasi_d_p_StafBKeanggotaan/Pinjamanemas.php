<?php

class Pinjamanemas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if ($this->session->userdata('hak_akses') != '6') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hak Akses ditolak !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "Pinjaman Emas";
        $data['konten_pinjamanemas'] = $this->Data_user_m->get_data('konten_pinjamanemas')
            ->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('informasi_d_p_StafBKeanggotaan/pinjamanemas', $data);
        $this->load->view('templates/footer');
    }

    // public function add_info()
    // {

    //     $data['title'] = "Tambah Data Informasi";
    //     $this->load->view('templates_admin/header', $data);
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/add_info_kom', $data);
    //     $this->load->view('templates_admin/footer');
    // }

    // public function add_info_aksi()
    // {

    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {

    //         $this->add_info();
    //     } else {

    //         $judul                  = $this->input->post('judul');
    //         $desc_kom               = $this->input->post('desc_kom');

    //         $data = array(
    //             'judul'                => $judul,
    //             'desc_kom'             => $desc_kom,

    //         );

    //         $this->Data_user_m->insert_data($data, 'info_kom');
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Informasi berhasil ditambahkan !</strong>
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>

    //         </div>');

    //         redirect('admin/informasi_kom');
    //     }
    // }

    public function update_pinjamanemas($id)
    {

        $where = array('id_pinjamanemas' => $id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = "Edit Konten Toko Emas";
        $data['konten_pinjamanemas'] = $this->db->query("SELECT * FROM konten_pinjamanemas WHERE id_pinjamanemas = '$id'")->result();
        $this->load->view('templates/header', $data);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('informasi_d_p_StafBKeanggotaan/update_pinjamanemas', $data);
        $this->load->view('templates/footer');
    }

    public function update_pinjamanemas_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->update_pinjamanemas('');
        } else {
            $id                      = $this->input->post('id_pinjamanemas');
            $desc_pinjamanemas           = $this->input->post('desc_pinjamanemas');
            $photo                   = $_FILES['photo']['name'];

            if ($photo) {
                $config['upload_path']     = './assets/photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config['max_size']    = '2048';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $data = array(
                'desc_pinjamanemas'          => $desc_pinjamanemas,

            );

            $where = array(
                'id_pinjamanemas'          => $id
            );

            $this->Data_user_m->update_data('konten_pinjamanemas', $data, $where);
            $this->session->set_flashdata('notif', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Pinjaman Emas berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('informasi_d_p_StafBKeanggotaan/pinjamanemas');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('desc_pinjamanemas', 'desc_pinjamanemas', 'required');
    }
}