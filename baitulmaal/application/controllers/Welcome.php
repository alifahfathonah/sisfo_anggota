<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Form Login Admin";
			$this->load->view('temp_admin/header', $data);
			$this->load->view('form_login');
		}else{
			$nik   = $this->input->post('nik');
			$sandi = $this->input->post('sandi');

			$cek = $this->adminModel->cek_login($nik,$sandi);

			if($cek == FALSE)
			{
		        $this->session->set_flashdata('pesan','<div class="alert alert-danger 
		    	alert-dismissible fade show" role="alert"> 
						Username atau Password Salah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('welcome');
			}else{
				$this->session->set_userdata('role_id', $cek->role_id);
				$this->session->set_userdata('nama',$cek->nama);
				$this->session->set_userdata('pangkat',$cek->pangkat);
				$this->session->set_userdata('id_anggota',$cek->id_anggota);
				$this->session->set_userdata('foto',$cek->foto);
				switch ($cek->role_id) {
					case 0: redirect('erorr_page/block_sa');
							break;
					case 1: redirect('erorr_page/block');
							break;
					case 2: redirect('erorr_page/block');
							break;
					case 3: redirect('user_tabarru/admin_k_tab');
							break;
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
		redirect('welcome');
	}
}