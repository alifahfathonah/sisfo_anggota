<?php

class Informasi_kom extends CI_Controller
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

        $data['title'] = "Informasi Komunitas ";
        $data['info'] = $this->Data_user_m->get_data('info_kom')
            ->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/informasi_kom', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_info()
    {

        $data['title'] = "Tambah Data Informasi";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/add_info_kom', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_info_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->add_info();
        } else {

            $judul                  = $this->input->post('judul');
            $desc_kom               = $this->input->post('desc_kom');
            $photo              = $_FILES['photo']['name'];

            if($photo=''){}else{
                $config ['upload_path']     = './assets/photo';
                $config ['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config ['max_size']    = '2048';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal diupload";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'judul'                => $judul,
                'desc_kom'             => $desc_kom,
                'photo'            => $photo,

            );

            $this->Data_user_m->insert_data($data, 'info_kom');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil ditambahkan !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/informasi_kom');
        }
    }

    public function update_info($id)
    {

        $where = array('id_info_kom' => $id);
        $data['title'] = "Edit Informasi Komunitas";
        $data['info'] = $this->db->query("SELECT * FROM info_kom WHERE id_info_kom = '$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_info_kom', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_info_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {

            $this->update_info('');
        } else {
            $id                     = $this->input->post('id_info_kom');
            $judul                  = $this->input->post('judul');
            $desc_kom               = $this->input->post('desc_kom');
            $photo              = $_FILES['photo']['name'];

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
                'judul'             => $judul,
                'desc_kom'          => $desc_kom,

            );

            $where = array(
                'id_info_kom'          => $id
            );

            $this->Data_user_m->update_data('info_kom', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/informasi_kom');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('desc_kom', 'desc_kom', 'required');
    }

    public function delete_info($id)
    {

        $where = array('id_info_kom' => $id);
        $this->Data_user_m->delete_data($where, 'info_kom');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil dihapus !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

        redirect('admin/informasi_kom');
    }
}
