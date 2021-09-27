<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data1['title'] = 'Form Login';
			$data['user'] = $this->db->get_where('user', ['nik' =>
			$this->session->userdata('nik')])->row_array();
			$this->load->view('templates_admin/header', $data1);
			$this->load->view('login/anggota_komunitas');
		} else {
			//validasi success
			$this->_login();
		}
	}

	private function _login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['nik' => $nik])->row_array();


		//usernya ada
		if ($user) {
			//jika usernya aktif
			if ($user['status'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_user' => $user['id_user'],
						'nik' => $user['nik'],
						'hak_akses' => $user['hak_akses'],
						'nama' => $user['nama'],
						'foto' => $user['foto']
					];
					$this->session->set_userdata($data);
					if ($user['hak_akses'] == '0') {
						redirect('anggota_t_j');
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Wrong Password ! </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> This Email is not been activated ! </div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Email is not registered !</div>');
			redirect('login');
		}
	}

	public function anggota_tijarah()
	{
		$this->_rules1();

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Form Login";
			$this->load->view('templates_admin/header', $data);
			$this->load->view('login/anggota_tijarah');
		} else {
			$nik 		= $this->input->post('nik');
			$sandi 	= $this->input->post('sandi');

			$cek = $this->Data_user_m->cek_login_tijarah($nik, $sandi);

			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>NIK atau password salah !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
				redirect('login/anggota_tijarah');
			} else {
				$data['data_anggotabq'] = $this->Data_user_m->data_anggotabq()->result();
		$data['simpananbq'] = $this->Data_user_m->simpananbq()->result();
		$data['join_anggota_simpanan'] = $this->Data_user_m->data_join2table()->result();
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('nik', $cek->nik);
				$this->session->set_userdata('nama_anggota', $cek->nama_anggota);
				$this->session->set_userdata('jabatan', $cek->jabatan);
				$this->session->set_userdata('foto', $cek->foto);
				$this->session->set_userdata('id_anggota', $cek->id_anggota);

				switch ($cek->hak_akses) {
						// user komunitas
					case 0:
						redirect('erorr_page');
						break;

					case 10:
						redirect('anggota_t_j_tij');
						break;

						// case 2:
						// 	redirect('admin/dashboard');
						// 	break;

					default:
						break;
				}
			}
		}
	}

	public function anggota_tabarru()
	{
		$this->_rules2();

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = "Form Login";
			$this->load->view('templates_admin/header', $data);
			$this->load->view('login/anggota_tabarru');
		} else {

			$nik 		= $this->input->post('nik');
			$sandi 		= $this->input->post('sandi');

			$cek = $this->Data_user_m->cek_login_tabarru($nik, $sandi);

			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>NIK atau password salah !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
				redirect('login/anggota_tabarru');
			} else {
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('nik', $cek->nik);
				$this->session->set_userdata('nama_anggota', $cek->nama_anggota);
				$this->session->set_userdata('jabatan', $cek->jabatan);
				$this->session->set_userdata('foto', $cek->foto);
				$this->session->set_userdata('id_anggota', $cek->id_anggota);
				// $this->session->set_userdata('tanggal_lahir', $cek->tanggal_lahir);
				// $this->session->set_userdata('tempat_lahir', $cek->tempat_lahir);
				// $this->session->set_userdata('jk', $cek->jk);
				// $this->session->set_userdata('alamat', $cek->alamat);
				// $this->session->set_userdata('rt', $cek->rt);
				// $this->session->set_userdata('rw', $cek->rw);
				// $this->session->set_userdata('kel_desa', $cek->kel_desa);
				// $this->session->set_userdata('kecamatan', $cek->kecamatan);
				// $this->session->set_userdata('agama', $cek->agama);
				// $this->session->set_userdata('status_kawin', $cek->status_kawin);
				// $this->session->set_userdata('pekerjaan', $cek->pekerjaan);
				// $this->session->set_userdata('kewarganegaraan', $cek->kewarganegaraan);
				// $this->session->set_userdata('id_user', $cek->id_user);
				// $this->session->set_userdata('photo', $cek->photo);
				switch ($cek->hak_akses) {

						// user tabarru
					case 0:
						redirect('erorr_page');
						break;

					case 10:
						redirect('anggota_t_j_tab');
						break;

						// case 2:
						// 	redirect('admin/dashboard');
						// 	break;

					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{

		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}
	public function _rules1()
	{

		$this->form_validation->set_rules('nik', 'Username', 'required', ['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('sandi', 'Password', 'required', ['required' => 'Password Wajib Diisi!']);
	}
	public function _rules2()
	{

		$this->form_validation->set_rules('nik', 'Username', 'required', ['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('sandi', 'Password', 'required', ['required' => 'Password Wajib Diisi!']);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
