<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DewanPimpinan_StafBKeanggotaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        is_logged_inAdmin();
        is_logged_inMAX();
    }

    // Zona Bendahara Dewan Pimpinan
    public function index()
    {
        $title['title'] = 'Dasboard Staf Bidang Keanggotaan';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $admin = $this->db->query("SELECT * FROM user_superadmin");
        $anggota = $this->db->query("SELECT * FROM user_admin");
        $anggota2 = $this->db->query("SELECT * FROM user");
        $akses = $this->db->query("SELECT * FROM data_akses");
        $data['admin'] = $admin->num_rows();
        $data['anggota'] = $anggota->num_rows();
        $data['anggota2'] = $anggota2->num_rows();
        $data['akses'] = $akses->num_rows();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/indexstafBKeanggotaan', $data);
        $this->load->view('templates/footer');
    }

    public function profile_bkeanggotaan()
    {
        $title['title'] = 'Profile Staf Bidang Keanggotaan';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profileBKeanggotaan()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksiBKeanggotaan()
    {
        $id             = $this->input->post('id_user');
        $nik            = $this->input->post('nik');
        $nama           = $this->input->post('nama');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $jk             = $this->input->post('jk');
        $status_kawin   = $this->input->post('status_kawin');
        $alamat         = $this->input->post('alamat');
        $no_hp          = $this->input->post('no_hp');
        $email          = $this->input->post('email');

        $data = array(
            'nik'           => $nik,
            'nama'          => $nama,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'status_kawin'  => $status_kawin,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'email'         => $email,
        );

        $where = array(
            'id_user' => $id
        );

        $this->adminModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBKeanggotaan/profile_bkeanggotaan');
    }

    public function edit_fotoBKeanggotaan()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_fotoBKeanggotaan()
    {
        $id             = $this->input->post('id_user');
        $foto           = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']  = './assets/img';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal!";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'foto'         => $foto,
        );

        $where = array(
            'id_user' => $id
        );

        $this->adminModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Foto Berhasil Diganti! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBKeanggotaan/edit_fotoBPendidikan');
    }

    public function change_passwordBKeanggotaan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_passBKeanggotaan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_bkeanggotaan/ubah_pass');
            $this->load->view('templates/footer');
        } else {
            $current = $this->input->post('current_pass');
            $new     = $this->input->post('new_pass');
            if (!password_verify($current, $data['user']['password'])) {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger 
						alert-dismissible fade show font-italic" role="alert"> 
						Password Salah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                redirect('DewanPimpinan_StafBKeanggotaan/change_passBKeanggotaan');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-warning 
						alert-dismissible fade show font-italic" role="alert"> 
						Password baru tidak sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('DewanPimpinan_StafBKeanggotaan/change_passBKeanggotaan');
                } else {
                    $password_hash = password_hash($new, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('nik', $this->session->userdata('nik'));
                    $this->db->update('user');
                    $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Password Berhasil Diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('Auth');
                }
            }
        }
    }
    public function list_anggota()
    {
        $this->load->model('adminModel');
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/DewanPimpinan_StafBKeanggotaan/list_anggota';
        $config['total_rows'] = $this->adminModel->countAllKeanggotaan();
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

        $data['anggota'] = $this->adminModel->getKeanggotaan($config['per_page'], $data['start'])->result();

        $title['title'] = 'Daftar Anggota';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['filter'] = $this->adminModel->filterAgt();
        $data['admin'] = $this->adminModel->get_role_userAgtA();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/list_anggota', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $title['title'] = 'Detail Informasi Anggota';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_anggota($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/detail_agt', $data);
        $this->load->view('templates/footer');
    }

    public function updateData($id)
    {
        $title['title'] = "Update Data Anggota";
        $where = array('id_user' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data2['admin2'] = $this->adminModel->edit_data($where, 'user')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/update_data', $data2);
        $this->load->view('templates/footer');
    }
    public function update_aksi_Agt()
    {
        $id             = $this->input->post('id_user');
        $nik            = $this->input->post('nik');
        $nama           = $this->input->post('nama');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $jk             = $this->input->post('jk');
        $status_kawin   = $this->input->post('status_kawin');
        $alamat         = $this->input->post('alamat');
        $no_hp          = $this->input->post('no_hp');
        $rt         = $this->input->post('rt');
        $rw         = $this->input->post('rw');
        $kel_desa         = $this->input->post('kel_desa');
        $kecamatan         = $this->input->post('kecamatan');
        $agama         = $this->input->post('agama');
        $pekerjaan         = $this->input->post('pekerjaan');
        $kewarganegaraan         = $this->input->post('kewarganegaraan');
        $status         = $this->input->post('status');

        $data = array(
            'nik'           => $nik,
            'nama'          => $nama,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'status_kawin'  => $status_kawin,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'rt'        => $rt,
            'rw'        => $rw,
            'kel_desa'        => $kel_desa,
            'kecamatan'        => $kecamatan,
            'agama'        => $agama,
            'pekerjaan'        => $pekerjaan,
            'kewarganegaraan'        => $kewarganegaraan,
            'status'        => $status,
        );

        $where = array(
            'id_user' => $id
        );
        $this->adminModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBKeanggotaan/list_anggota');
    }

    // Tambah Data Anggota Baru //

    public function tambahData_Agt()
    {
        $this->form_validation->set_rules(
            'nik',
            'Nik',
            'required|trim|is_unique[user.nik]',
            [
                'is_unique' => 'This NIK has already registered!'
            ],
            ['required' => 'NIK Wajib Diisi!']
        );
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required', ['required' => 'Nama Anggota Wajib Diisi!']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('saldo_uang', 'Saldo Uang', 'required');
        $this->form_validation->set_rules('saldo_emas', 'Saldo Emas', 'required');
        $this->form_validation->set_rules('inpass', 'Inpass', 'required|trim|min_length[3]|matches[repass]');
        $this->form_validation->set_rules('repass', 'Repass', 'required|trim|matches[inpass]');

        if ($this->form_validation->run() == false) {
            $title['title'] = 'Form Tambah Anggota';
            $data['user'] = $this->db->get_where('user', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_bkeanggotaan/form_add_data', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                "nik"             => htmlspecialchars($this->input->post('nik', true)),
                "nama"            => htmlspecialchars($this->input->post('nama', true)),
                "password"        => password_hash($this->input->post('inpass'), PASSWORD_DEFAULT),
                "tempat_lahir"    => htmlspecialchars($this->input->post('tempat_lahir'), true),
                "tgl_lahir"       => htmlspecialchars($this->input->post('tgl_lahir'), true),
                "jk"              => htmlspecialchars($this->input->post('jk'), true),
                "no_hp"              => htmlspecialchars($this->input->post('no_hp'), true),
                "status"          => '1',
                "jabatan"         => 'Anggota',
                "kode_list"       => '0',
                "filter"          => '2',
                "email"           => 'default@gmail.com',
                "hak_akses"       => '0',
                "saldo_uang"      =>  htmlspecialchars($this->input->post('saldo_uang'), true),
                "saldo_emas"      =>  htmlspecialchars($this->input->post('saldo_emas'), true),
                "foto"            => 'default.jpg',
                "pendaftar"       => 'Staf Bidang Keanggotaan',
            ];
            $this->db->insert('user', $data);
            //$this->_sendEmail();
            $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Anggota Baru Berhasil Didaftarkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
            redirect('DewanPimpinan_StafBKeanggotaan/list_anggota');
        }
    }
}