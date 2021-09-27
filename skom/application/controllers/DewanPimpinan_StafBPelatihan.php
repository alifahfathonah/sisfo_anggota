<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DewanPimpinan_StafBPelatihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        is_logged_inAdmin();
        is_logged_inMAX();
    }

    // Zona Staf Bidang Pelatihan
    public function index()
    {
        $title['title'] = 'Dasboard Staf Bidang Pelatihan';
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
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/indexstafBPelatihan', $data);
        $this->load->view('templates/footer');
    }

    public function profile_bpelatihan()
    {
        $title['title'] = 'Profile Staf Bidang Pelatihan';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profileBPelatihan()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksiBPelatihan()
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
        redirect('DewanPimpinan_StafBPelatihan/profile_bpelatihan');
    }

    public function edit_fotoBPelatihan()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_fotoBPelatihan()
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
        redirect('DewanPimpinan_StafBPelatihan/edit_fotoBPelatihan');
    }

    public function change_passwordBPelatihan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_passBPelatihan()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_BPelatihanDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_bpelatihan/ubah_pass');
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
                redirect('DewanPimpinan_StafBPelatihan/change_passBPelatihan');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-warning 
						alert-dismissible fade show font-italic" role="alert"> 
						Password baru tidak sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('DewanPimpinan_StafBPelatihan/change_passBPelatihan');
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
    public function portalPelatihan()
    {
        $title['title'] = 'Portal Pelatihan Usaha';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['agendaP'] = $this->kuttabModel->AllagendaP()->result();
        $data['infoP'] = $this->kuttabModel->AllinfoP()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/portal_Pelatihan', $data);
        $this->load->view('templates/footer');
    }
    public function indexAgendaP()
    {
        $title['title'] = 'Agenda Pelatihan Usaha';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['agendaP'] = $this->kuttabModel->AllagendaP()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/index_agendaP', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoP()
    {
        $title['title'] = 'Informasi Pelatihan Usaha';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoP'] = $this->kuttabModel->AllinfoP()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/index_infoP', $data);
        $this->load->view('templates/footer');
    }

    //detail agenda K
    public function detailAgenda_Pelatihan($id)
    {
        $title['title'] = 'Detail Agenda Pelatihan Usaha';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_agendaP' => $id);
        $data['detail'] = $this->kuttabModel->data('agenda_pelatihan', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/detail_agendaP', $data);
        $this->load->view('templates/footer');
    }
    //detail info K
    public function detailInfo_Pelatihan($id)
    {
        $title['title'] = 'Detail Informasi Pelatihan Usaha';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoP' => $id);
        $data['detail'] = $this->kuttabModel->data('informasi_pelatihan', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/detail_infoP', $data);
        $this->load->view('templates/footer');
    }
    //End Staf Bidang Pendidikan
    //CRUD AgendaK
    public function tambah_agendaP()
    {
        $title['title']        = "Input Agenda Pelatihan Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/form_add_agendaP', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_agendaP()
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

        $this->db->insert('agenda_pelatihan', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Baru Pelatihan Usaha Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexAgendaP');
    }


    public function hapus_agendaP($id)
    {
        $where = array('id_agendaP' => $id);
        $this->kuttabModel->hapus_agendaP($where, 'agenda_pelatihan');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexAgendaP');
    }

    public function edit_agendaP($id)
    {
        $title['title'] = "Edit Agenda Pelatihan Usaha";
        $where = array('id_agendaP' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->kuttabModel->edit_data($where, 'agenda_pelatihan')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/update_agendaP', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_agendaP()
    {
        $id_agendaP             = $this->input->post('id_agendaP');
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
            'id_agendaP' => $id_agendaP
        );

        $this->kuttabModel->update_data($where, $data, 'agenda_pelatihan');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexAgendaP');
    }
    // End CRUD
    //CRUD InfoK
    public function tambah_infoP()
    {
        $title['title']        = "Input Informasi Pelatihan Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/form_add_infoP', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoP()
    {
        $lokasi             = 'Manokwari';
        $informasi             = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('informasi_pelatihan', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Baru Pelatihan Usaha Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexInfoP');
    }


    public function hapus_infoP($id)
    {
        $where = array('id_infoP' => $id);
        $this->kuttabModel->hapus_infoK($where, 'informasi_pelatihan');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexInfoP');
    }

    public function edit_infoP($id)
    {
        $title['title'] = "Edit Informasi Pelatihan Usaha";
        $where = array('id_infoP' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->kuttabModel->edit_data($where, 'informasi_pelatihan')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bpelatihan/update_infoP', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoP()
    {
        $id          = $this->input->post('id_infoP');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoP' => $id
        );

        $this->kuttabModel->update_data($where, $data, 'informasi_pelatihan');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBPelatihan/indexInfoP');
    }
    // End CRUD


}