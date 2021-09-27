<?php

class Informasi_kom extends CI_Controller
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
        $this->load->model('adminModel', 'adModel');
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/skom/informasi_d_p_StafBKeanggotaan/Informasi_kom/index';
        $config['total_rows'] = $this->adModel->countAllInfokom();
        $config['per_page'] = 5;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['semua'] = $this->adModel->getInfokom($config['per_page'], $data['start'])->result();

        $data['title'] = "Informasi Komunitas ";
        $data['info'] = $this->Data_user_m->get_data('info_kom')
            ->result();
        $data['user'] = $this->db->get_where('user', ['email' =>

        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('informasi_d_p_StafBKeanggotaan/informasi_kom', $data);
        $this->load->view('templates/footer');
    }

    public function add_info()
    {

        $data['title'] = "Tambah Data Informasi";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('informasi_d_p_StafBKeanggotaan/add_info_kom', $data);
        $this->load->view('templates/footer');
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

            if ($photo = '') {
            } else {
                $config['upload_path']     = './assets/photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config['max_size']    = '2048';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
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
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil ditambahkan !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('informasi_d_p_StafBKeanggotaan/informasi_kom');
        }
    }

    public function update_info($id)
    {

        $where = array('id_info_kom' => $id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = "Edit Informasi Komunitas";
        $data['info'] = $this->db->query("SELECT * FROM info_kom WHERE id_info_kom = '$id'")->result();
        $this->load->view('templates/header', $data);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('informasi_d_p_StafBKeanggotaan/update_info_kom', $data);
        $this->load->view('templates/footer');
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
                'judul'             => $judul,
                'desc_kom'          => $desc_kom,

            );

            $where = array(
                'id_info_kom'          => $id
            );

            $this->Data_user_m->update_data('info_kom', $data, $where);
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('informasi_d_p_StafBKeanggotaan/informasi_kom');
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
        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Informasi berhasil dihapus !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

        redirect('informasi_d_p_StafBKeanggotaan/informasi_kom');
    }
}