<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Form Login Pengurus";
			$this->load->view('temp_admin/header', $data);
			$this->load->view('login_form');
		}else{
			$nik   = $this->input->post('nik');
			$sandi = $this->input->post('sandi');

			$cek = $this->loginModel->cek_login($nik,$sandi);

			if($cek == FALSE)
			{
		        $this->session->set_flashdata('pesan','<div class="alert alert-danger 
		    	alert-dismissible fade show" role="alert"> 
						Username atau Password Salah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('login');
			}else{
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('nama_anggota',$cek->nama_anggota);
				$this->session->set_userdata('jabatan',$cek->jabatan);
				$this->session->set_userdata('foto',$cek->foto);
				$this->session->set_userdata('id_anggota',$cek->id_anggota);
				switch ($cek->hak_akses) {
					case 0: redirect('erorr_page');
							break;
					case 1: redirect('user_tabarru/ketua_k_tab');
							break;
					case 2: redirect('user_tabarru/sekretaris_k_tab');
							break;
					case 3: redirect('user_tabarru/bendahara_k_tab');
							break;
					case 4: redirect('user_tabarru/kepala_d_teller');
						break;
					case 5: redirect('user_tabarru/anggota_d_teller');
						break;
					case 6: redirect('user_tabarru/kepala_d_pinjaman');
						break;
					case 7: redirect('user_tabarru/anggota_d_pinjaman');
						break;
					case 8: redirect('user_tabarru/kepala_d_jaminan');
						break;
					case 9: redirect('user_tabarru/anggota_d_jaminan');
						break;
					case 10: redirect('user_tabarru/anggota_tab');
					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{
			$this->form_validation->set_rules('nik','Username','required',['required' => 'Username Wajib Diisi!']);
			$this->form_validation->set_rules('sandi','Password','required',['required' => 'Password Wajib Diisi!']);
	}

		public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}