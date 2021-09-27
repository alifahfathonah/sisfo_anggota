<?php

class Pembiayaan extends CI_Controller
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

        $data['title'] = "Pembiayaan";
        $data['konten_pembiayaan'] = $this->Data_user_m->get_data('konten_pembiayaan')
            ->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/pembiayaan', $data);
        $this->load->view('templates_admin/footer');
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

    public function update_pembiayaan($id)
    {

        $where = array('id_pembiayaan' => $id);
        $data['title'] = "Edit Konten Pembiayaan";
        $data['konten_pembiayaan'] = $this->db->query("SELECT * FROM konten_pembiayaan WHERE id_pembiayaan = '$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_pembiayaan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_pembiayaan_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->update_pembiayaan('');
        } else {
            $id                      = $this->input->post('id_pembiayaan');
            $desc_pembiayaan           = $this->input->post('desc_pembiayaan');
            $photo                   = $_FILES['photo']['name'];

            if($photo) {
                $config ['upload_path']     = './assets/photo';
                $config ['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config ['max_size']    = '2048';

                $this->load->library('upload',$config);
                if($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo',$photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $data = array(
                'desc_pembiayaan'          => $desc_pembiayaan,

            );

            $where = array(
                'id_pembiayaan'          => $id
            );

            $this->Data_user_m->update_data('konten_pembiayaan', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>pembiayaan berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/pembiayaan');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('desc_pembiayaan', 'desc_pembiayaan', 'required');
    }

}
