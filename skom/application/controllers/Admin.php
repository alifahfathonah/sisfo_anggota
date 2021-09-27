<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_inAdmin();
        is_logged_inMAX();
        is_logged_in();
        $data['user'] = $this->db->get_where('user_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
    }

    public function index()
    {
        $title['title'] = 'Dasboard Admin';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['jabataN'] = $this->db->get_where('data_jabatan', ['jabatan' => $this->session->userdata('jabatan')])->row_array();
        $sadmin = $this->db->query("SELECT * FROM user_superadmin");
        $admin = $this->db->query("SELECT * FROM user_admin");
        $anggota = $this->db->query("SELECT * FROM user");
        $akses = $this->db->query("SELECT * FROM data_akses");
        $data['sadmin'] = $sadmin->num_rows();
        $data['admin'] = $admin->num_rows();
        $data['anggota'] = $anggota->num_rows();
        $data['akses'] = $akses->num_rows();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $title['title'] = 'Profile Admin';
        $id = $this->session->userdata('id_anggota');
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_admin($id);
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profile()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_profile()
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
        redirect('Admin/profile');
    }

    public function edit_foto()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_foto()
    {
        $id             = $this->input->post('id_anggota');
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
        redirect('Admin/edit_foto');
    }

    public function list_anggota()
    {
        $title['title'] = 'Daftar Anggota';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['admin2'] = $this->adminModel->get_role_userAdmin2()->result();
        $data['dewanp'] = $this->adminModel->get_role_userAgtb();
        $data['dewanu'] = $this->adminModel->get_role_userAgtc();
        $data['dewanc'] = $this->adminModel->get_role_userAgtd();
        $data['anggota'] = $this->adminModel->get_role_userAgt0();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/list_anggota', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $title['title'] = 'Detail Informasi Anggota';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/detail_agt', $data);
        $this->load->view('templates/footer');
    }

    public function updateData($id)
    {
        $title['title'] = "Update Data Anggota";
        $where = array('id_user' => $id);
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data2['admin2'] = $this->adminModel->edit_data($where, 'user')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/update_data', $data2);
        $this->load->view('templates/footer');
    }
    public function update_aksi()
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
        $status         = $this->input->post('status');
        $email          = $this->input->post('email');
        $jabatan        = $this->input->post('jabatan');

        $data = array(
            'nik'           => $nik,
            'nama'          => $nama,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'status_kawin'  => $status_kawin,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'status'        => $status,
            'email'         => $email,
            'jabatan'       => $jabatan,
        );

        $where = array(
            'id_user' => $id
        );
        $this->adminModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('admin/list_anggota');
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
            $title['title'] = 'Form Tambah Data';
            $data['user'] = $this->db->get_where('user_admin', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $this->load->view('templates/header', $title);
            $this->load->view('temp_Admin/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('admin/form_add_data', $data);
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
                "pendaftar"       => 'Admin Komunitas Koperasi',
            ];
            $this->db->insert('user', $data);
            //$this->_sendEmail();
            $this->session->set_flashdata('message', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Anggota Baru Berhasil Didaftarkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
            redirect('admin/list_anggota');
        }
    }


    // Hak Akses //
    public function data_hakakses()
    {
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/admin/data_hakakses';
        $config['total_rows'] = $this->aksesModel->countAllAkses();
        $config['per_page'] = 6;

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
        $data['semua'] = $this->aksesModel->getAkses($config['per_page'], $data['start'])->result();

        $title['title'] = 'Hak Akses';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_hakakses', $data);
        $this->load->view('templates/footer');
    }

    // //Tambah Hak Akses //
    // public function tambahAkses()
    // {
    //     $title['title']        = "Tambah Hak Akses";
    //     $data['user'] = $this->db->get_where('user_admin', ['nik' =>
    //     $this->session->userdata('nik')])->row_array();
    //     $data['akses']     = $this->aksesModel->hakakses_listzz();
    //     $data['anggota']     = $this->aksesModel->nmakses_listaa();
    //     $this->load->view('templates/header', $title);
    //     $this->load->view('temp_Admin/sidebar');
    //     $this->load->view('templates/navbar', $data);
    //     $this->load->view('admin/form_add_akses', $data);
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
    //         $id_sa      = '2';
    //         $kode_list  = '3';
    //         $kode_list_II  = '3';
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
    //         redirect('admin/data_hakakses');
    //     }
    // }

    // public function _rulesAkses()
    // {
    //     $this->form_validation->set_rules('nama_agt', 'Nama', 'required', ['required' => 'Nama Admin Wajib Diisi!']);
    //     $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required', ['required' => 'Hak Akses Wajib Diisi!']);
    //     $this->form_validation->set_rules('status', 'status');
    // }
    //End Tambah Hak Akses//

    public function updateAkses($id)
    {
        $title['title']         = "Update Akses";
        $where = array('id_user' => $id);
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['akses']     = $this->aksesModel->hakakses_listzz();
        $data2['akses2'] = $this->aksesModel->edit_data($where, 'user')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/update_akses', $data2);
        $this->load->view('templates/footer');
    }

    public function updateAkses_aksi()
    {
        $id = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $hak_akses = $this->input->post('hak_akses');
        $kode_list = $this->input->post('kode_list');

        $data = array(
            'nama' => $nama,
            'hak_akses' => $hak_akses,
            'kode_list' => $kode_list
        );

        $where = array(
            'id_user' => $id
        );

        $this->aksesModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
				alert-dismissible fade show font-italic" role="alert"> 
				Data Berhasil Diedit! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('admin/data_hakakses');
    }

    //-- Posisi Admin --//
    public function posisiAgt()
    {

        $title['title'] = 'Posisi Pengurus Komunitas';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['jabatan'] = $this->adminModel->allDataJb()->result();
        $data['role3'] = $this->jabatanModel->get_list_posisiAgt();
        $data['role4'] = $this->jabatanModel->get_list_posisiAgt4();
        $data['role5'] = $this->jabatanModel->get_list_posisiAgt5();
        $data['role6'] = $this->jabatanModel->get_list_posisiAgt6();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_posisi', $data);
        $this->load->view('templates/footer');
    }


    //Update Posisi//
    public function update_posisiAgt($id)
    {
        $title['title'] = "Update Posisi Pengurus Komunitas";
        $where = array('id_jabatan' => $id);
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data2['jabatan2'] = $this->jabatanModel->edit_data($where, 'data_jabatan')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/update_posisi', $data2);
        $this->load->view('templates/footer');
    }

    public function updatePosisi_Aksi()
    {
        $id             = $this->input->post('id_jabatan');
        $jabatan      = $this->input->post('jabatan');
        $status       = $this->input->post('status');
        $kode_list      = $this->input->post('kode_list');

        $data = array(
            'jabatan'   => $jabatan,
            'status'        => $status,
            'kode_list'     => $kode_list

        );

        $where = array(
            'id_jabatan' => $id
        );

        $this->jabatanModel->update_data($where, $data, 'data_jabatan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('admin/posisiAgt');
    }

    //Tambah Posisi//
    public function addPosisiAgt()
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('kode_list', 'Kode List', 'required');

        if ($this->form_validation->run() == false) {
            $title['title']        = "Tambah Posisi Pengurus";
            $data['user'] = $this->db->get_where('user_admin', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $this->load->view('templates/header', $title);
            $this->load->view('temp_Admin/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('admin/form_add_posisi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                "jabatan"  => htmlspecialchars($this->input->post('jabatan', true)),
                "status"    => htmlspecialchars($this->input->post('status', true)),
                "kode_list"    => htmlspecialchars($this->input->post('kode_list', true)),
            ];
            $this->db->insert('data_jabatan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
            redirect('admin/posisiAgt');
        }
    }

    // Admin -> mengatur Anggota //
    public function print_Agt()
    {
        $data['semua'] = $this->adminModel->get_Alldata()->result();
        $this->load->view('admin/cetak/print_data', $data);
    }

    public function pdf_Agt()
    {
        $this->load->library('dompdf_gen');
        $data['admin'] = $this->adminModel->get_list_saldoAgt();
        $data['admin2'] = $this->adminModel->get_list_saldoAgtaa();
        $data['admin3'] = $this->adminModel->get_list_saldoAgtab();
        $data['admin4'] = $this->adminModel->get_list_saldoAgtac();
        $this->load->view('admin/cetak/ex_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_admin.pdf", array('Attachment' => 0));
    }

    public function excel_Agt()
    {
        $data['semua'] = $this->adminModel->get_Alldata()->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Komunitas-Baitul Ummah");
        $object->getProperties()->setLastModifiedBy("Komunitas-Baitul Ummah");
        $object->getProperties()->setTitle("Daftar Anggota Pengurus Komunitas");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Lengkap');
        $object->getActiveSheet()->setCellValue('C1', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('D1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('E1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('F1', 'Alamat');
        $object->getActiveSheet()->setCellValue('G1', 'No HP');
        $object->getActiveSheet()->setCellValue('H1', 'Status');
        $object->getActiveSheet()->setCellValue('I1', 'Pendaftar');
        $object->getActiveSheet()->setCellValue('J1', 'Jabatan');
        $object->getActiveSheet()->setCellValue('K1', 'Saldo Titipan Uang');
        $object->getActiveSheet()->setCellValue('L1', 'Saldo Titipan Emas');

        $baris = 2;
        $no = 1;

        foreach ($data['semua'] as $ad) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $ad->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $ad->tempat_lahir);
            $object->getActiveSheet()->setCellValue('D' . $baris, $ad->tgl_lahir);
            $object->getActiveSheet()->setCellValue('E' . $baris, $ad->jk);
            $object->getActiveSheet()->setCellValue('F' . $baris, $ad->alamat);
            $object->getActiveSheet()->setCellValue('G' . $baris, $ad->no_hp);
            $object->getActiveSheet()->setCellValue('H' . $baris, $ad->status);
            $object->getActiveSheet()->setCellValue('I' . $baris, $ad->pendaftar);
            $object->getActiveSheet()->setCellValue('J' . $baris, $ad->jabatan);
            $object->getActiveSheet()->setCellValue('K' . $baris, $ad->saldo_uang);
            $object->getActiveSheet()->setCellValue('L' . $baris, $ad->saldo_emas);

            $baris++;
        }

        $filename = "Data_Anggota_Komunitas_Koperasi" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Anggota");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function saldoUang_Agt()
    {
        $title['title'] = 'Informasi Saldo Titipan Uang';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['dewanp'] = $this->adminModel->get_list_saldoAgt();
        $data['dewanu'] = $this->adminModel->get_list_saldoAgtaa();
        $data['dewanc'] = $this->adminModel->get_list_saldoAgtab();
        $data['anggota'] = $this->adminModel->get_list_saldoAgtac();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/cetak/saldo_uang', $data);
        $this->load->view('templates/footer');
    }

    public function saldoEmas_Agt()
    {
        $title['title'] = 'Informasi Saldo Titipan Emas';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['dewanp'] = $this->adminModel->get_list_saldoAgt();
        $data['dewanu'] = $this->adminModel->get_list_saldoAgtaa();
        $data['dewanc'] = $this->adminModel->get_list_saldoAgtab();
        $data['anggota'] = $this->adminModel->get_list_saldoAgtac();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/cetak/saldo_emas', $data);
        $this->load->view('templates/footer');
    }
    //End.... Admin -> mengatur Anggota //

    public function change_password()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user_admin', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_pass()
    {
        $passBaru  = $this->input->post('passBaru');
        $ulangPass = $this->input->post('ulangPass');

        $this->form_validation->set_rules('passBaru', 'Password Baru', 'required|matches[ulangPass]', ['required' => 'Password Baru Wajib Diisi!']);
        $this->form_validation->set_rules('ulangPass', 'Ulangi Password', 'required', ['required' => 'Ulangi Password Wajib Diisi!']);

        if ($this->form_validation->run() != FALSE) {
            $data  = array('sandi'  => md5($passBaru));
            $id    = array('nik' => $this->session->userdata('nik'));

            $this->passModel->updateData('user_admin', $data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Password berhasil diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
            redirect('Auth/indexAdmin');
        } else {
            $title['title'] = 'Ubah Password';
            $data['user'] = $this->db->get_where('user_admin', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $this->load->view('templates/header', $title);
            $this->load->view('temp_Admin/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('admin/ubah_pass');
            $this->load->view('templates/footer');
        }



        // $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        // $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        // $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        // if ($this->form_validation->run() == false) {
        //     $this->load->view('templates/header', $title);
        //     $this->load->view('temp_Admin/sidebar');
        //     $this->load->view('templates/navbar', $data);
        //     $this->load->view('admin/ubah_pass');
        //     $this->load->view('templates/footer');
        // } else {
        //     $current = $this->input->post('current_pass');
        //     $new     = $this->input->post('new_pass');
        //     if (!password_verify($current, $data['user_admin']['password'])) {
        //         $this->session->set_flashdata('message', '<div class="alert
        // 	alert-danger mt-1 font-italic" role="alert"> Password Salah.! <button type="button" class="close"
        // 				data-dismiss="alert" aria-label="close"
        // 				<span aria-hidden="true">&times;</span>
        // 				</button></div>');
        //         redirect('admin/change_pass');
        //     } else {
        //         if ($current == $new) {
        //             $this->session->set_flashdata('message', '<div class="alert
        // 	alert-danger mt-1 font-italic" role="alert"> Password baru tidak boleh sama dengan password lama! <button type="button" class="close"
        // 				data-dismiss="alert" aria-label="close"
        // 				<span aria-hidden="true">&times;</span>
        // 				</button></div>');
        //             redirect('admin/change_pass');
        //         } else {
        //             $data  = array('password'  => md5($new));
        //             $id    = array('id_user' => $this->session->userdata('id_user'));

        //             $this->passModel->updateData('user_admin', $data, $id);
        //             $this->session->set_flashdata('message', '<div class="alert
        // 	alert-success mt-1 font-italic" role="alert"> Password berhasil diubah! <button type="button" class="close"
        // 				data-dismiss="alert" aria-label="close"
        // 				<span aria-hidden="true">&times;</span>
        // 				</button></div>');
        //             redirect('admin/change_pass');
        //         }
        //     }
        // }
    }
}