<?php 

class UbahPassword extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='7'){
		   $this->session->set_flashdata('pesan','<div class="alert alert-danger 
		    	alert-dismissible fade show" role="alert"> 
						Anda belum login! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('login');
	}
}

	public function index()

	{
		$data['title'] = "Ubah Password";
		$this->load->view('temp_anggotapinjaman/header', $data);
		$this->load->view('temp_anggotapinjaman/sidebar');
		$this->load->view('anggotapinjaman/formUbahPassword', $data);
		$this->load->view('temp_anggotapinjaman/footer');
	}

	public function ubahPasswordAksi()

	{
		$passBaru  = $this->input->post('passBaru');
		$ulangPass = $this->input->post('ulangPass');

		$this->form_validation->set_rules('passBaru','Password Baru', 'required|matches[ulangPass]',['required' => 'Password Baru Wajib Diisi!']);
		$this->form_validation->set_rules('ulangPass','Ulangi Password', 'required',['required' => 'Ulangi Password Wajib Diisi!']);

		if($this->form_validation->run() != FALSE){
			$data  = array('sandi'  => md5($passBaru));
			$id    = array('id_anggota' => $this->session->userdata('id_anggota'));

			$this->sandiModel->updateData( 'data_anggotabm', $data, $id);
			$this->session->set_flashdata('pesan','<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Password berhasil diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('login');
		}else{
				$data['title'] = "Ubah Password";
				$this->load->view('temp_anggotapinjaman/header', $data);
				$this->load->view('temp_anggotapinjaman/sidebar');
				$this->load->view('anggotapinjaman/formUbahPassword', $data);
				$this->load->view('temp_anggotapinjaman/footer');
		}
	}	
}

 ?>