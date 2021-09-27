<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DewanPimpinan_Ketua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        is_logged_in();
        is_logged_inAdmin();
        is_logged_inMAX();
    }
    //Zona Ketua Dewan Pimpinan
    public function index()
    {
        $title['title'] = 'Dasboard Ketua Dewan Pimpinan';
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
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/indexKetua', $data);
        $this->load->view('templates/footer');
    }

    public function profile_ketua()
    {
        $title['title'] = 'Profile Ketua';
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['detail'] = $this->adminModel->ambil_id_user($id);
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/profile_ketua', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profile()
    {
        $title['title'] = "Update Akses";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/edit_profile', $data);
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

        $this->aksesModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Data Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_Ketua/profile_ketua');
    }

    public function edit_foto()
    {
        $title['title'] = "Ganti Foto";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/edit_foto', $data);
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

        $this->adminModel->update_data($where, $data, 'user');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Foto Berhasil Diganti! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_Ketua/edit_foto');
    }

    public function change_password()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/ubah_pass');
        $this->load->view('templates/footer');
    }

    public function change_pass()
    {
        $title['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->form_validation->set_rules('current_pass', 'Current_pass', 'required|trim');
        $this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|min_length[3]|matches[repeat_pass]');
        $this->form_validation->set_rules('repeat_pass', 'Repeat_pass', 'required|trim|min_length[3]|matches[new_pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $title);
            $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
            $this->load->view('templates/navbar', $data);
            $this->load->view('dewanPimpinan/box_ketua/ubah_pass');
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
                redirect('DewanPimpinan_Ketua/change_pass');
            } else {
                if ($current == $new) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-warning 
						alert-dismissible fade show font-italic" role="alert"> 
						Password baru tidak sama dengan password lama! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
                    redirect('DewanPimpinan_Ketua/change_pass');
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

    public function dokumenKetua()
    {

        $this->load->model('adminModel');
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/DewanPimpinan_Ketua/dokumenKetua';
        $config['total_rows'] = $this->adminModel->countAllDokumen();
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

        $data['pdfs'] = $this->adminModel->getDokumen($config['per_page'], $data['start'])->result();

        $data['semua1'] = $this->adminModel->allDataDokumen()->result();
        $data['dketua'] = $this->adminModel->dokumenfilterKetua();
        $title['title'] = 'Dokumen Dewan Pimpinan';
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/dokKetua/dokumen_ketua', $data);
        $this->load->view('templates/footer');
    }
    public function downloadPDF()
    {
        if ($this->input->post('pdf')) {
            $this->load->library('zip');
            $pdfs = $this->input->post('pdf');
            foreach ($pdfs as $pdf) {
                $this->zip->read_file($pdf);
            }
            $this->zip->download(time() . '.zip');
        }
    }

    //CRUD
    public function tambah_Dokumen_dketua()
    {
        $title['title']        = "Tambah Dokumen Baru";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/form_add_doc', $data);
        $this->load->view('templates/footer');
    }

    public function add_DokumenAksi_dketua()
    {
        $nm_dokumen       = $this->input->post('nm_dokumen');
        $pengunggah       = 'Ketua';
        $dokumen        = $_FILES['dokumen'];
        if ($dokumen = '') {
        } else {
            $config['upload_path'] = './assets/file';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dokumen')) {
                echo "Upload Gagal";
                die();
            } else {
                $dokumen = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nm_dokumen' => $nm_dokumen,
            'pengunggah' => $pengunggah,
            'dokumen' => $dokumen
        );

        $this->db->insert('file_dokumen', $data);
        //$this->_sendEmail();
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Dokumen Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_Ketua/dokumenKetua');
    }


    public function hapus_dketua($id)
    {
        $where = array('id_dokumen' => $id);
        $this->adminModel->hapus_dketua($where, 'file_dokumen');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Dokumen Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_Ketua/dokumenKetua');
    }

    public function edit_dketua($id)
    {
        $title['title'] = "Edit Dokumen";
        $where = array('id_dokumen' => $id);
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['semua'] = $this->adminModel->allDataDokumen()->result();
        $data['edit'] = $this->adminModel->edit_data($where, 'file_dokumen')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_ketua/update_doc', $data);
        $this->load->view('templates/footer');
    }

    public function updateDokumen_dketua_aksi()
    {
        $id             = $this->input->post('id_dokumen');
        $nm_dokumen     = $this->input->post('nm_dokumen');
        $dokumen     = $_FILES['dokumen'];
        if ($dokumen = '') {
        } else {
            $config['upload_path'] = './assets/file';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dokumen')) {
                echo "Upload Gagal";
                die();
            } else {
                $dokumen = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nm_dokumen'     => $nm_dokumen,
            'dokumen'        => $dokumen,
        );

        $where = array(
            'id_dokumen' => $id
        );

        $this->adminModel->update_data($where, $data, 'file_dokumen');
        $this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Dokumen Berhasil Diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
        redirect('DewanPimpinan_Ketua/dokumenKetua');
    }
    // End CRUD

    // filter Sekretaris
    public function filterSekretaris()
    {
        $title['title'] = "Dokumen Dewan Pimpinan";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['dsekretaris'] = $this->adminModel->dokumenfilterSekretaris();
        $data['dketua'] = $this->adminModel->dokumenfilterKetua();
        $this->load->view('templates/header', $title);
        $this->load->view('DewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('DewanPimpinan/dokKetua/doc2', $data);
        $this->load->view('templates/footer');
    }
    // Filter Bendahara
    public function filterBendahara()
    {
        $title['title'] = "Dokumen Dewan Pimpinan";
        $data['user'] = $this->db->get_where('user', ['nik' =>
        $this->session->userdata('nik')])->row_array();
        $data['dbendahara'] = $this->adminModel->dokumenfilterBendahara();
        $data['dketua'] = $this->adminModel->dokumenfilterKetua();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/dokKetua/doc3', $data);
        $this->load->view('templates/footer');
    }
    //End Ketua//


}