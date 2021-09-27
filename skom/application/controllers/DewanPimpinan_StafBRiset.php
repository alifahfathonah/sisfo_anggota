<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DewanPimpinan_StafBRiset extends CI_Controller
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
        $title['title'] = 'Dasboard Staf Bidang Riset & Pengembangan';
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
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/indexstafBR&P', $data);
        $this->load->view('templates/footer');
    }

    public function profile_briset()
    {
        $title['title'] = 'Profile Staf Bidang Riset & Pengembangan';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profileBRiset()
    {
        $title['title'] = "Update Profile";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksiBRiset()
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
        redirect('DewanPimpinan_StafBRiset/profile_briset');
    }

    public function edit_fotoBRiset()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/edit_foto', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi_fotoBRiset()
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
        redirect('DewanPimpinan_StafBRiset/edit_fotoBRiset');
    }

    public function change_passwordBRiset()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_passBRiset()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_briset/ubah_pass');
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
                redirect('DewanPimpinan_StafBRiset/change_passBRiset');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-warning 
						alert-dismissible fade show font-italic" role="alert"> 
						Password baru tidak sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('DewanPimpinan_StafBRiset/change_passBRiset');
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

    //Informasi
    public function portalKI()
    {
        $title['title'] = 'Portal Kelola Informasi';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoRiset'] = $this->infoModel->AllinfoRiset()->result();
        $data['infoPKTijarah'] = $this->infoModel->AllinfoPKTijarah()->result();
        $data['infoPKTabarru'] = $this->infoModel->AllinfoPKTabarru()->result();
        $data['infoPKomunitas'] = $this->infoModel->AllinfoPKomunitas()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/portal_KI', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoRiset()
    {
        $title['title'] = 'Informasi Pengembangan Riset';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoRiset'] = $this->infoModel->AllinfoRiset()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/index_infoRiset', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoPKTijarah()
    {
        $title['title'] = 'Informasi Pengembangan Koperasi Tijarah';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoPKTijarah'] = $this->infoModel->AllinfoPKTijarah()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/index_infoPKTijarah', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoPKTabarru()
    {
        $title['title'] = 'Informasi Pengembangan Koperasi Tabarru';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoPKTabarru'] = $this->infoModel->AllinfoPKTabarru()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/index_infoPKTabarru', $data);
        $this->load->view('templates/footer');
    }
    public function indexInfoPKomunitas()
    {
        $title['title'] = 'Informasi Pengembangan Komunitas';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['infoPKomunitas'] = $this->infoModel->AllinfoPKomunitas()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/index_infoPKomunitas', $data);
        $this->load->view('templates/footer');
    }
    //detail info P Riset
    public function detailInfoPRiset($id)
    {
        $title['title'] = 'Detail Informasi Pengembangan Riset';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoPRiset' => $id);
        $data['detail'] = $this->infoModel->data('info_riset', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/detail_infoPRiset', $data);
        $this->load->view('templates/footer');
    }
    //detail info PKTijarah
    public function detailInfoPKTijarah($id)
    {
        $title['title'] = 'Detail Informasi Pengembangan Koperasi Tijarah';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoPKTijarah' => $id);
        $data['detail'] = $this->infoModel->data('info_pktijarah', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/detail_infoPKTijarah', $data);
        $this->load->view('templates/footer');
    }
    //detail info PKTabarru
    public function detailInfoPKTabarru($id)
    {
        $title['title'] = 'Detail Informasi Pengembangan Koperasi Tabarru';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoPKTabarru' => $id);
        $data['detail'] = $this->infoModel->data('info_pktabarru', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/detail_infoPKTabarru', $data);
        $this->load->view('templates/footer');
    }
    //detail info PKomunitas
    public function detailInfoPKomunitas($id)
    {
        $title['title'] = 'Detail Informasi Pengembangan Komunitas';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $id = array('id_infoPK' => $id);
        $data['detail'] = $this->infoModel->data('info_pkomunitas', $id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/detail_infoPKomunitas', $data);
        $this->load->view('templates/footer');
    }
    //CRUD Info Riset
    public function tambah_infoPRiset()
    {
        $title['title']        = "Input Informasi Pengembangan Riset Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/form_add_infoPRiset', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoPRiset()
    {
        $lokasi             = 'Manokwari';
        $informasi          = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('info_riset', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Riset Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoRiset');
    }


    public function hapus_infoPRiset($id)
    {
        $where = array('id_infoPRiset' => $id);
        $this->infoModel->hapus_info($where, 'info_riset');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoRiset');
    }

    public function edit_infoPRiset($id)
    {
        $title['title'] = "Edit Informasi Pengembangan Riset";
        $where = array('id_infoPRiset' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->infoModel->edit_data($where, 'info_riset')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/update_infoPRiset', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoPRiset()
    {
        $id_infoPRiset               = $this->input->post('id_infoPRiset');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoPRiset' => $id_infoPRiset
        );

        $this->infoModel->update_data($where, $data, 'info_riset');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoRiset');
    }
    // End CRUD
    //CRUD Info P Koperasi Tijarah
    public function tambah_infoPKTijarah()
    {
        $title['title']        = "Input Informasi Pengembangan Koperasi Tijarah Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/form_add_infoPKTijarah', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoPKTijarah()
    {
        $lokasi             = 'Manokwari';
        $informasi          = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('info_pktijarah', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTijarah');
    }


    public function hapus_infoPKTijarah($id)
    {
        $where = array('id_infoPKTijarah' => $id);
        $this->infoModel->hapus_info($where, 'info_pktijarah');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTijarah');
    }

    public function edit_infoPKTijarah($id)
    {
        $title['title'] = "Edit Informasi Pengembangan Koperasi Tijarah";
        $where = array('id_infoPKTijarah' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->infoModel->edit_data($where, 'info_pktijarah')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/update_infoPKTijarah', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoPKTijarah()
    {
        $id_infoPKTijarah              = $this->input->post('id_infoPKTijarah');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoPKTijarah' => $id_infoPKTijarah
        );

        $this->infoModel->update_data($where, $data, 'info_pktijarah');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTijarah');
    }
    // End CRUD
    //CRUD Info P Koperasi Tabarru
    public function tambah_infoPKTabarru()
    {
        $title['title']        = "Input Informasi Pengembangan Koperasi Tabarru Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/form_add_infoPKTabarru', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoPKTabarru()
    {
        $lokasi             = 'Manokwari';
        $informasi          = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('info_pktabarru', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTabarru');
    }


    public function hapus_infoPKTabarru($id)
    {
        $where = array('id_infoPKTabarru' => $id);
        $this->infoModel->hapus_info($where, 'info_pktabarru');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTabarru');
    }

    public function edit_infoPKTabarru($id)
    {
        $title['title'] = "Edit Informasi Pengembangan Koperasi Tabarru";
        $where = array('id_infoPKTabarru' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->infoModel->edit_data($where, 'info_pktabarru')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/update_infoPKTabarru', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoPKTabarru()
    {
        $id_infoPKTabarru              = $this->input->post('id_infoPKTabarru');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoPKTabarru' => $id_infoPKTabarru
        );

        $this->infoModel->update_data($where, $data, 'info_pktabarru');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKTabarru');
    }
    // End CRUD
    //CRUD Info P Komunitas
    public function tambah_infoPKomunitas()
    {
        $title['title']        = "Input Informasi Pengembangan Komunitas Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/form_add_infoPKomunitas', $data);
        $this->load->view('templates/footer');
    }

    public function add_Aksi_infoPKomunitas()
    {
        $lokasi             = 'Manokwari';
        $informasi          = $this->input->post('informasi');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'lokasi'        => $lokasi,
            'informasi'        => $informasi,
            'keterangan'    => $keterangan
        );

        $this->db->insert('info_pkomunitas', $data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKomunitas');
    }


    public function hapus_infoPKomunitas($id)
    {
        $where = array('id_infoPK' => $id);
        $this->infoModel->hapus_info($where, 'info_pkomunitas');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKomunitas');
    }

    public function edit_infoPKomunitas($id)
    {
        $title['title'] = "Edit Informasi Pengembangan Komunitas";
        $where = array('id_infoPK' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['edit'] = $this->infoModel->edit_data($where, 'info_pkomunitas')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_briset/update_infoPKomunitas', $data);
        $this->load->view('templates/footer');
    }

    public function update_Aksi_infoPKomunitas()
    {
        $id_infoPK              = $this->input->post('id_infoPK');
        $waktu_post               = $this->input->post('waktu_post');
        $informasi              = $this->input->post('informasi');
        $keterangan             = $this->input->post('keterangan');

        $data = array(
            'waktu_post'         => $waktu_post,
            'informasi'         => $informasi,
            'keterangan'        => $keterangan
        );

        $where = array(
            'id_infoPK' => $id_infoPK
        );

        $this->infoModel->update_data($where, $data, 'info_pkomunitas');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Informasi Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_StafBRiset/indexInfoPKomunitas');
    }
    // End CRUD
}