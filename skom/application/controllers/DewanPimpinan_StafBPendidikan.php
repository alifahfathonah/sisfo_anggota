<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DewanPimpinan_StafBPendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        is_logged_inAdmin();
        is_logged_inMAX();
    }

    // Zona Staf Bidang Pendidikan
    public function index()
    {
        $title['title'] = 'Dasboard Staf Bidang Pendidikan';
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
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/indexstafBPendidikan', $data);
        $this->load->view('templates/footer');
    }
    public function profile_bpendidikan()
    {
        $title['title'] = 'Profile Staf Bidang Pendidikan';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profileBPendidikan()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksiBPendidikan()
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
        redirect('DewanPimpinan_StafBPendidikan/profile_bpendidikan');
    }

    public function edit_fotoBPendidikan()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_fotoBPendidikan()
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
        redirect('DewanPimpinan_StafBPendidikan/edit_fotoBPendidikan');
    }

    public function change_passwordBPendidikan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_passBPendidikan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_BPendidikanDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_bpendidikan/ubah_pass');
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
                redirect('DewanPimpinan_StafBPendidikan/change_passBPendidikan');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-warning 
						alert-dismissible fade show font-italic" role="alert"> 
						Password baru tidak sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('DewanPimpinan_StafBPendidikan/change_passBPendidikan');
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
    public function portalKuttab()
    {
        $title['title'] = 'Portal Kuttab';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['agendaK'] = $this->kuttabModel->AllagendaK()->result();
        $data['infoK'] = $this->kuttabModel->AllinfoK()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/portal_Kuttab', $data);
        $this->load->view('templates/footer');
    }
    public function indexAgendaK()
    {
        $title['title'] = 'Agenda Kuttab';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['agendaK'] = $this->kuttabModel->AllagendaK()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/index_agendaK', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoK()
    {
        $title['title'] = 'Informasi Kuttab';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoK'] = $this->kuttabModel->AllinfoK()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/index_infoK', $data);
        $this->load->view('templates/footer');
    }

    //detail agenda K
    public function detailAgenda_Kuttab($id)
    {
        $title['title'] = 'Detail Agenda Kuttab';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_agendaK' => $id);
        $data['detail'] = $this->kuttabModel->data('agenda_kuttab', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/detail_agendaK', $data);
        $this->load->view('templates/footer');
    }
    //detail info K
    public function detailInfo_Kuttab($id)
    {
        $title['title'] = 'Detail Informasi Kuttab';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoK' => $id);
        $data['detail'] = $this->kuttabModel->data('informasi_kuttab', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/detail_infoK', $data);
        $this->load->view('templates/footer');
    }
    //End Staf Bidang Pendidikan
    //CRUD AgendaK
    public function tambah_agendaK()
    {
        $title['title']        = "Input Agenda Kuttab Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/form_add_agendaK', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_agendaK()
    {
        $tgl_agenda       = $this->input->post('tgl_agenda');
        $waktu_agenda       = $this->input->post('waktu_agenda');
        $lokasi             = $this->input->post('lokasi');
        $agenda             = $this->input->post('agenda');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'tgl_agenda'  => $tgl_agenda,
            'waktu_agenda'  => $waktu_agenda,
            'lokasi'        => $lokasi,
            'agenda'        => $agenda,
            'keterangan'    => $keterangan
        );

        $this->db->insert('agenda_kuttab', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Kegiatan Kuttab Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexAgendaK');
    }


    public function hapus_agendaK($id)
    {
        $where = array('id_agendaK' => $id);
        $this->kuttabModel->hapus_agendaK($where, 'agenda_kuttab');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Kegiatan Kuttab Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexAgendaK');
    }

    public function edit_agendaK($id)
    {
        $title['title'] = "Edit Agenda Kuttab";
        $where = array('id_agendaK' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->kuttabModel->edit_data($where, 'agenda_kuttab')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/update_agendaK', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_agendaK()
    {
        $id_agendaK             = $this->input->post('id_agendaK');
        $waktu_agenda           = $this->input->post('waktu_agenda');
        $lokasi                 = $this->input->post('lokasi');
        $agenda                 = $this->input->post('agenda');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_agenda'  => $waktu_agenda,
            'lokasi'        => $lokasi,
            'agenda'        => $agenda,
            'keterangan'    => $keterangan
        );

        $where = array(
            'id_agendaK' => $id_agendaK
        );

        $this->kuttabModel->update_data($where, $data, 'agenda_kuttab');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Kegiatan Kuttab Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexAgendaK');
    }
    // End CRUD
    //CRUD InfoK
    public function tambah_infoK()
    {
        $title['title']        = "Input Informasi Kuttab Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/form_add_infoK', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoK()
    {
        $lokasi             = 'Manokwari';
        $informasi             = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('informasi_kuttab', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Kuttab Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexInfoK');
    }


    public function hapus_infoK($id)
    {
        $where = array('id_infoK' => $id);
        $this->kuttabModel->hapus_infoK($where, 'informasi_kuttab');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Kuttab Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexInfoK');
    }

    public function edit_infoK($id)
    {
        $title['title'] = "Edit Informasi Kuttab";
        $where = array('id_infoK' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->kuttabModel->edit_data($where, 'informasi_kuttab')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpendidikan/update_infoK', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoK()
    {
        $id_infoK               = $this->input->post('id_infoK');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoK' => $id_infoK
        );

        $this->kuttabModel->update_data($where, $data, 'informasi_kuttab');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Kuttab Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPendidikan/indexInfoK');
    }
    // End CRUD

}