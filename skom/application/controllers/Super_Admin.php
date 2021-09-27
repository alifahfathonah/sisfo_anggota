<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Super_Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        is_logged_inAdmin();
        is_logged_inMAX();
    }

    public function index()
    {
        $title['title'] = 'Dasboard Super Admin';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
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
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $title['title'] = 'Profile';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profile()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_profile()
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

        $this->aksesModel->update_data($where, $data, 'user_superadmin');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('Super_Admin/profile');
    }

    public function edit_foto()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_foto()
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

        $this->adminModel->update_data($where, $data, 'user_superadmin');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('Super_Admin/profile');
    }

    public function list_admin()
    {
        $title['title'] = 'Daftar Admin';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['admin'] = $this->adminModel->allAdmin()->result();

        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/super_admin/list_admin';
        $config['total_rows'] = $this->adminModel->countAllAdmin();
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

        $data['semua'] = $this->adminModel->getAdmin($config['per_page'], $data['start'])->result();

        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/list_admin', $data);
        $this->load->view('templates/footer');
    }

    public function tambahData()
    {
        $title['title']        = "Tambah Data";
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['jabatan']   = $this->jabatanModel->get_data('data_jabatan')->result();
        $data['admin']     = $this->adminModel->get_data('user_admin')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/form_add_data', $data);
        $this->load->view('templates/footer');
    }

    public function add_data()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nik            = $this->input->post('nik');
            $nama           = $this->input->post('nama');
            $tgl_lahir      = $this->input->post('tgl_lahir');
            $tempat_lahir   = $this->input->post('tempat_lahir');
            $jk             = $this->input->post('jk');
            $no_hp          = $this->input->post('no_hp');
            $sandi          = md5($this->input->post('inpass'));
            $id_sa          = '1';
            $email          = 'default@ex.com';
            $nama_sa        = 'Super Admin';
            $status_aktif   = 'Non-Aktif';
            $pangkat        = 'Hidden User';
            $foto           = 'default.jpg';
            $hak_akses      = '0';

            $data = array(
                'nik'           => $nik,
                'nama'          => $nama,
                'tgl_lahir'     => $tgl_lahir,
                'tempat_lahir'  => $tempat_lahir,
                'jk'            => $jk,
                'no_hp'         => $no_hp,
                'sandi'         => $sandi,
                'id_sa'         => $id_sa,
                'email'         => $email,
                'nama_sa'       => $nama_sa,
                'pangkat'       => $pangkat,
                'status_aktif'  => $status_aktif,
                'foto'          => $foto,
                'hak_akses'     => $hak_akses,
            );

            $this->adminModel->insertData($data, 'user_admin');
            $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Anggota Baru Berhasil DiDaftartkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
            redirect('super_admin/list_admin');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => 'NIK Wajib Diisi!']);
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required', ['required' => 'Nama Anggota Wajib Diisi!']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Wajib Diisi!']);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib Diisi!']);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required', ['required' => 'Nomor HP Wajib Diisi!']);
        $this->form_validation->set_rules('inpass', 'Inpass', 'required|trim|min_length[3]|matches[repass]');
        $this->form_validation->set_rules('repass', 'Repass', 'required|trim|matches[inpass]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    }

    public function detail($id)
    {
        $title['title'] = 'Detail Informasi Admin';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_admin($id);
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/detail_admin', $data);
        $this->load->view('templates/footer');
    }

    public function updateData($id)
    {
        $title['title']         = "Update Data Admin";
        $where = array('id_anggota' => $id);
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data2['admin'] = $this->adminModel->allDataX($where, 'user_admin')->result();
        $data2['jabatan'] = $this->jabatanModel->allData($where, 'data_jabatan')->result();
        $data2['admin2'] = $this->adminModel->edit_data($where, 'user_admin')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/update_data', $data2);
        $this->load->view('templates/footer');
    }

    public function update_aksi()
    {
        $id             = $this->input->post('id_anggota');
        $nik            = $this->input->post('nik');
        $nama           = $this->input->post('nama');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $jk             = $this->input->post('jk');
        $status_kawin   = $this->input->post('status_kawin');
        $alamat         = $this->input->post('alamat');
        $no_hp          = $this->input->post('no_hp');
        $status_aktif   = $this->input->post('status_aktif');
        $pangkat        = $this->input->post('pangkat');
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
            'status_aktif'  => $status_aktif,
            'pangkat'       => $pangkat,
            'email'         => $email,
        );

        $where = array(
            'id_anggota' => $id
        );

        $this->adminModel->update_data($where, $data, 'user_admin');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('super_admin/list_admin');
    }

    public function data_hakakses()
    {
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/super_admin/data_hakakses';
        $config['total_rows'] = $this->adminModel->countAllAdmin();
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
        $data['semua'] = $this->adminModel->getAdmin($config['per_page'], $data['start'])->result();

        $title['title'] = 'Hak Akses';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/data_hakakses', $data);
        $this->load->view('templates/footer');
    }

    // public function tambahAkses()
    // {
    //     $title['title']        = "Tambah Hak Akses";
    //     $data['user'] = $this->db->get_where('user_superadmin', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['akses']     = $this->aksesModel->hakakses_list();
    //     $data['admin']     = $this->aksesModel->allAkses()->result();
    //     $this->load->view('templates/header', $title);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/navbar', $data);
    //     $this->load->view('super_admin/form_add_akses', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function add_akses()
    // {
    //     $this->_rulesAkses();
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->tambahAkses();
    //     } else {
    //         $nama_agt       = $this->input->post('nama_agt');
    //         $hak_akses  = $this->input->post('hak_akses');
    //         $id_sa      = '1';
    //         $kode_list  = '2';
    //         $kode_list_II  = '2';
    //         $status  = $this->input->post('status');


    //         $data = array(
    //             'nama_agt'       => $nama_agt,
    //             'hak_akses'  => $hak_akses,
    //             'id_sa'      => $id_sa,
    //             'kode_list'      => $kode_list,
    //             'kode_list_II'      => $kode_list_II,
    //             'status'      => $status,

    //         );

    //         $this->aksesModel->insertData($data, 'data_akses');
    //         $this->session->set_flashdata('notif', '<div class="alert alert-success 
    // 					alert-dismissible fade show font-italic" role="alert"> 
    // 					Data Akses Baru Berhasil Ditambahkan! <button type="button" class="close"
    // 					data-dismiss="alert" aria-label="close"
    // 					<span aria-hidden="true">&times;</span>
    // 					</button>
    // 					</div>');
    //         redirect('super_admin/data_hakakses');
    //     }
    // }

    // public function _rulesAkses()
    // {
    //     $this->form_validation->set_rules('nama_agt', 'Nama', 'required', ['required' => 'Nama Admin Wajib Diisi!']);
    //     $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required', ['required' => 'Hak Akses Wajib Diisi!']);
    //     $this->form_validation->set_rules('status', 'status');
    // }

    public function updateAkses($id)
    {
        $title['title']         = "Update Akses";
        $where = array('id_anggota' => $id);
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['akses']     = $this->aksesModel->hakakses_list();
        $data2['jabatan'] = $this->jabatanModel->allData($where, 'data_jabatan')->result();
        $data2['akses2'] = $this->aksesModel->edit_data($where, 'user_admin')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/update_akses', $data2);
        $this->load->view('templates/footer');
    }

    public function updateAkses_aksi()
    {
        $id = $this->input->post('id_anggota');
        $nama = $this->input->post('nama');
        $hak_akses = $this->input->post('hak_akses');

        $data = array(
            'nama' => $nama,
            'hak_akses' => $hak_akses
        );

        $where = array(
            'id_anggota' => $id
        );

        $this->aksesModel->update_data($where, $data, 'user_admin');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
				alert-dismissible fade show font-italic" role="alert"> 
				Data Berhasil Diedit! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('super_admin/data_hakakses');
    }

    //-- Posisi Admin --//
    public function posisiAdmin()
    {
        $title['title'] = 'Posisi Admin';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['jabatan'] = $this->adminModel->allData_posisiAdmin();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/data_jabatan', $data);
        $this->load->view('templates/footer');
    }

    public function addPosisiAdmin()
    {
        $title['title'] = 'Tambah Posisi Admin';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['jabatan']   = $this->jabatanModel->get_data('data_jabatan')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/form_add_jabatan', $data);
        $this->load->view('templates/footer');
    }

    public function tambahDataPosisi_Admin()
    {
        $this->_rulesPosisi();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahDataPosisi_Admin();
        } else {

            $jabatan      = $this->input->post('jabatan');
            $status       = $this->input->post('status');
            $kode_list       = '2';

            $data = array(
                'jabatan'     => $jabatan,
                'status'      => $status,
                'kode_list'      => $kode_list,
            );

            $this->jabatanModel->insertData($data, 'data_jabatan');
            $this->session->set_flashdata('notif', '<div class="alert alert-success 
				alert-dismissible fade show font-italic" role="alert"> 
				Data Posisi Baru Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('super_admin/posisiAdmin');
        }
    }

    public function _rulesPosisi()
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('status', 'Status Aktif', 'required');
    }

    public function update_posisiAdmin($id)
    {
        $title['title']         = "Update Posisi Admin";
        $where = array('id_jabatan' => $id);
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data2['jabatan'] = $this->adminModel->allData_posisiAdmin();
        $data2['jabatan2'] = $this->jabatanModel->edit_data($where, 'data_jabatan')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/update_jabatan', $data2);
        $this->load->view('templates/footer');
    }

    public function updatePosisi_Aksi()
    {
        $id           = $this->input->post('id_jabatan');
        $jabatan      = $this->input->post('jabatan');
        $status       = $this->input->post('status');

        $data = array(
            'jabatan'     => $jabatan,
            'status'      => $status,
        );

        $where = array(
            'id_jabatan' => $id
        );

        $this->jabatanModel->update_data($where, $data, 'data_jabatan');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('super_admin/posisiAdmin');
    }

    public function change_password()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('super_admin/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_pass()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user_superadmin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('super_admin/ubah_pass');
            $this->load->view('templates/footer');
        } else {
            $current = $this->input->post('current_pass');
            $new     = $this->input->post('new_pass');
            if (!password_verify($current, $data['user']['password'])) {
                $this->session->set_flashdata('notif', '<div class="alert
			alert-danger mt-1 font-italic" role="alert"> Password Salah.! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button></div>');
                redirect('Super_Admin/change_pass');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert
			alert-danger mt-1 font-italic" role="alert"> Password baru tidak boleh sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button></div>');
                    redirect('Super_Admin/change_pass');
                } else {
                    $password_hash = password_hash($new, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('nik', $this->session->userdata('nik'));
                    $this->db->update('user_superadmin');
                    $this->session->set_flashdata('notif', '<div class="alert
			alert-success mt-1 font-italic" role="alert"> Password berhasil diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button></div>');
                    redirect('Auth/indexSAdmin');
                }
            }
        }
    }
}