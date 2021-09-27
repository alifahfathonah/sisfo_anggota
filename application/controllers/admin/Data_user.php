<?php

class Data_user extends CI_Controller
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

        $data['title'] = "Data User";
        $data['user'] = $this->Data_user_m->get_data('data_user_anggota')
            ->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_data()
    {

        $data['title'] = "Tambah Data User";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/add_data_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add_data_aksi()
    {

        $this->_rulesadd();

        if ($this->form_validation->run() == FALSE) {

            $this->add_data();
        } else {

            $nik                = $this->input->post('nik');
            $password           = md5($this->input->post('password'));
            $nama               = $this->input->post('nama');
            $email              = $this->input->post('email');
            $tanggal_lahir      = $this->input->post('tanggal_lahir');
            $tempat_lahir       = $this->input->post('tempat_lahir');
            $jk                 = $this->input->post('jk');
            $alamat             = $this->input->post('alamat');
            $rt                 = $this->input->post('rt');
            $rw                 = $this->input->post('rw');
            $kel_desa           = $this->input->post('kel_desa');
            $kecamatan          = $this->input->post('kecamatan');
            $agama              = $this->input->post('agama');
            $status_kawin       = $this->input->post('status_kawin');
            $pekerjaan          = $this->input->post('pekerjaan');
            $kewarganegaraan    = $this->input->post('kewarganegaraan');
            $jabatan            = 'Anggota Tanpa Jabatan';
            $saldo_uang         = $this->input->post('saldo_uang');
            $saldo_emas         = $this->input->post('saldo_emas');
            $no_hp              = $this->input->post('no_hp');
            $status             = 'Aktif';
            $pendaftar          = 'Admin Anggota';
            $hak_akses          = '1';
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
                'nik'              => $nik,
                'password'         => $password,
                'nama'             => $nama,
                'email'             => $email,
                'tanggal_lahir'    => $tanggal_lahir,
                'tempat_lahir'     => $tempat_lahir,
                'jk'               => $jk,
                'alamat'           => $alamat,
                'rt'               => $rt,
                'rw'               => $rw,
                'kel_desa'         => $kel_desa,
                'kecamatan'        => $kecamatan,
                'agama'            => $agama,
                'status_kawin'     => $status_kawin,
                'pekerjaan'        => $pekerjaan,
                'kewarganegaraan'  => $kewarganegaraan,
                'jabatan'          => $jabatan,
                'saldo_uang'       => $saldo_uang,
                'saldo_emas'       => $saldo_emas,
                'no_hp'            => $no_hp,
                'status'           => $status,
                'pendaftar'        => $pendaftar,
                'hak_akses'        => $hak_akses,
                'photo'            => $photo
            );

            $this->Data_user_m->insert_data($data, 'data_user_anggota');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/data_user');
        }
    }

    public function _rulesadd()
    {

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('rt', 'rt', 'required');
        $this->form_validation->set_rules('rw', 'rw', 'required');
        $this->form_validation->set_rules('kel_desa', 'kel_desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('agama', 'agama', 'required');
        $this->form_validation->set_rules('status_kawin', 'status_kawin', 'required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'required');
        $this->form_validation->set_rules('saldo_uang', 'saldo_uang', 'required');
        $this->form_validation->set_rules('saldo_emas', 'saldo_emas', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'numeric|required');

        $this->form_validation->set_message('required', '<div class="text-small text-danger">Masih kosong, silahkan isi</div>');
        $this->form_validation->set_message('valid_email', '<div class="text-small text-danger">Masukkan Email yang benar</div>');
    }

    public function update_data($id)
    {

        $where = array('id_user' => $id);
        $data['title'] = "Edit Data User";
        $data['user'] = $this->db->query("SELECT * FROM data_user_anggota WHERE id_user = '$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_data_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data_aksi()
    {

        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {

            $this->update_data('');
        } else {
            $id                 = $this->input->post('id_user');
            $nik                = $this->input->post('nik');
            $nama               = $this->input->post('nama');
            $email              = $this->input->post('email');
            // $password           = md5($this->input->post('password'));
            $tanggal_lahir      = $this->input->post('tanggal_lahir');
            $tempat_lahir       = $this->input->post('tempat_lahir');
            $jk                 = $this->input->post('jk');
            $alamat             = $this->input->post('alamat');
            $rt                 = $this->input->post('rt');
            $rw                 = $this->input->post('rw');
            $kel_desa           = $this->input->post('kel_desa');
            $kecamatan          = $this->input->post('kecamatan');
            $agama              = $this->input->post('agama');
            $status_kawin       = $this->input->post('status_kawin');
            $pekerjaan          = $this->input->post('pekerjaan');
            $kewarganegaraan    = $this->input->post('kewarganegaraan');
            $jabatan            = $this->input->post('jabatan');
            $saldo_uang         = $this->input->post('saldo_uang');
            $saldo_emas         = $this->input->post('saldo_emas');
            $no_hp              = $this->input->post('no_hp');
            $hak_akses          = $this->input->post('hak_akses');
            $photo              = $_FILES['photo']['name'];

            if ($photo) {
                $config['upload_path']     = './assets/photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nik'              => $nik,
                // 'password'         => $password,
                'nama'             => $nama,
                'email'            => $email,
                'tanggal_lahir'    => $tanggal_lahir,
                'tempat_lahir'     => $tempat_lahir,
                'jk'               => $jk,
                'alamat'           => $alamat,
                'rt'               => $rt,
                'rw'               => $rw,
                'kel_desa'         => $kel_desa,
                'kecamatan'        => $kecamatan,
                'agama'            => $agama,
                'status_kawin'     => $status_kawin,
                'pekerjaan'        => $pekerjaan,
                'kewarganegaraan'  => $kewarganegaraan,
                'jabatan'          => $jabatan,
                'saldo_uang'       => $saldo_uang,
                'saldo_emas'       => $saldo_emas,
                'no_hp'            => $no_hp,
                'hak_akses'        => $hak_akses,
            );

            $where = array(
                'id_user'          => $id
            );

            $this->Data_user_m->update_data('data_user_anggota', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

            redirect('admin/data_user');
        }
    }

    public function _rules1()
    {

        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        // $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('rt', 'rt', 'required');
        $this->form_validation->set_rules('rw', 'rw', 'required');
        $this->form_validation->set_rules('kel_desa', 'kel_desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('agama', 'agama', 'required');
        $this->form_validation->set_rules('status_kawin', 'status_kawin', 'required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'required');
        $this->form_validation->set_rules('saldo_uang', 'saldo_uang', 'required');
        $this->form_validation->set_rules('saldo_emas', 'saldo_emas', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'numeric|required');

        $this->form_validation->set_message('required', '<div class="text-small text-danger">Masih kosong, silahkan isi</div>');
        $this->form_validation->set_message('valid_email', '<div class="text-small text-danger">Masukkan Email yang benar</div>');
    }

    public function delete_user($id)
    {

        $where = array('id_user' => $id);
        $this->Data_user_m->delete_data($where, 'data_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');

        redirect('admin/data_user');
    }
}