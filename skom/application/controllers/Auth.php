<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
			$data['user'] = $this->db->get_where('user_admin', ['nik' =>
			$this->session->userdata('nik')])->row_array();
			$this->load->view('templates/hlogin', $data1);
			$this->load->view('login/index');
			$this->load->view('templates/flogin');
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
					if ($user['hak_akses'] == '1') {
						redirect('user_komunitas/ketua_d_p');
					} else if ($user['hak_akses'] == '2') {
						redirect('user_komunitas/sekretaris_d_p');
					} else if ($user['hak_akses'] == '3') {
						redirect('user_komunitas/bendahara_d_p');
					} else if ($user['hak_akses'] == '4') {
						redirect('user_komunitas/staf_b_pendidikan');
					} else if ($user['hak_akses'] == '5') {
						redirect('user_komunitas/staf_b_pelatihan');
					} else if ($user['hak_akses'] == '6') {
						redirect('user_komunitas/staf_b_keanggotaan');
					} else if ($user['hak_akses'] == '7') {
						redirect('user_komunitas/staf_br_pengembangan');
					} else if ($user['hak_akses'] == '8') {
						redirect('user_komunitas/ketua_d_u');
					} else if ($user['hak_akses'] == '9') {
						redirect('user_komunitas/sekretaris_d_u');
					} else if ($user['hak_akses'] == '10') {
						redirect('user_komunitas/bendahara_d_u');
					} else if ($user['hak_akses'] == '11') {
						redirect('user_komunitas/anggota_d_u');
					} else if ($user['hak_akses'] == '12') {
						redirect('user_komunitas/ketua_d_c');
					} else if ($user['hak_akses'] == '13') {
						redirect('user_komunitas/sekretaris_d_c');
					} else if ($user['hak_akses'] == '14') {
						redirect('user_komunitas/bendahara_d_c');
					} else if ($user['hak_akses'] == '15') {
						redirect('user_komunitas/anggota_d_c');
					} else if ($user['hak_akses'] == '0') {
						redirect('erorr_page/index_x');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password ! </div>');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This Email is not been activated ! </div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered !</div>');
			redirect('Auth');
		}
	}

	public function indexAdmin()
	{

		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('sandi', 'Sandi', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data1['title'] = 'Form Login';
			$this->load->view('templates/hlogin', $data1);
			$this->load->view('login/indexAdmin');
			$this->load->view('templates/flogin');
		} else {
			//validasi success
			$this->_loginA();
		}
	}

	private function _loginA()
	{
		$nik 		= $this->input->post('nik');
		$sandi 		= $this->input->post('sandi');

		$cek = $this->adminModel->cek_login($nik, $sandi);

		if ($cek == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>NIK atau password salah !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
			redirect('Auth/indexAdmin');
		} else {
			$this->session->set_userdata('nik', $cek->nik);
			$this->session->set_userdata('nama', $cek->nama);
			$this->session->set_userdata('hak_akses', $cek->hak_akses);
			$this->session->set_userdata('email', $cek->email);
			switch ($cek->hak_akses) {

					// user komunitas
				case 0:
					redirect('erorr_page');
					break;

				case 1:
					redirect('user_komunitas/Admin_k');
					break;

				case 2:
					redirect('erorr_page/block');
					break;

				case 3:
					redirect('erorr_page/block');
					break;

				default:
					break;
			}
		}
	}

	public function indexSAdmin()
	{

		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data1['title'] = 'Form Login';
			$this->load->view('templates/hlogin', $data1);
			$this->load->view('login/indexSAdmin');
			$this->load->view('templates/flogin');
		} else {
			//validasi success
			$this->_loginSA();
		}
	}

	private function _loginSA()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user_superadmin', ['nik' => $nik])->row_array();

		//usernya ada
		if ($user) {
			//jika usernya aktif
			if ($user['status'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'nik' => $user['nik'],
						'email' => $user['email'],
						'hak_akses' => $user['hak_akses']
					];
					$this->session->set_userdata($data);
					if ($user['hak_akses'] == '1S') {
						redirect('Super_Admin');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password ! </div>');
					redirect('Auth/indexSAdmin');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This Email is not been activated ! </div>');
				redirect('Auth/indexSAdmin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered !</div>');
			redirect('Auth/indexSAdmin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert
			alert-success" role="alert">Anda Telah Berhasil Logout </div>');
		redirect('Auth');
	}
	public function logoutAdmin()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert
			alert-success" role="alert">Anda Telah Berhasil Logout </div>');
		redirect('Auth/indexAdmin');
	}
	public function logoutSAdmin()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert
			alert-success" role="alert">Anda Telah Berhasil Logout </div>');
		redirect('Auth/indexSAdmin');
	}

	// public function registration()
	// {
	// 	$this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[user.nik]', [
	// 		'is_unique' => 'This NIK has already registered!'
	// 	]);
	// 	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
	// 		'is_unique' => 'This Email has already registered!'
	// 	]);
	// 	$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
	// 	$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
	// 	$this->form_validation->set_rules('inpass', 'Inpass', 'required|trim|min_length[3]|matches[repass]');
	// 	$this->form_validation->set_rules('repass', 'Repass', 'required|trim|matches[inpass]');

	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'Form Registration';
	// 		$data['jabatan']   = $this->jabatanModel->get_data('data_jabatan')->result();
	// 		$this->load->view('templates/hlogin', $data);
	// 		$this->load->view('login/registration', $data);
	// 		$this->load->view('templates/flogin');
	// 	} else {
	// 		$data = [
	// 			"nik"  		 => htmlspecialchars($this->input->post('nik', true)),
	// 			"email"  	 => htmlspecialchars($this->input->post('email', true)),
	// 			"nama"       => htmlspecialchars($this->input->post('nama'), true),
	// 			"jabatan"    => htmlspecialchars($this->input->post('jabatan'), true),
	// 			"password" 	 => password_hash($this->input->post('inpass'), PASSWORD_DEFAULT),
	// 			"role_id" 	 => 2,
	// 			"is_active"  => 0
	// 		];
	// 		$this->db->insert('user', $data);
	// 		//$this->_sendEmail();
	// 		$this->session->set_flashdata('message', '<div class="alert
	// 		alert-success" role="alert">Congratulation! Your account has been created. Please Login! </div>');
	// 		redirect('Auth');
	// 	}
	// }

	public function blocked()
	{
		echo 'access blocked';
	}
}