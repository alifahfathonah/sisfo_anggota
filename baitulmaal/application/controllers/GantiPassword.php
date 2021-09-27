<?php 

class GantiPassword extends CI_Controller{

	public function index()

	{
		$data['title'] = "Ubah Password";
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('formGantiPassword', $data);
		$this->load->view('temp_admin/footer');
	}

	public function gantiPasswordAksi()

	{
		$passBaru  = $this->input->post('passBaru');
		$ulangPass = $this->input->post('ulangPass');

		$this->form_validation->set_rules('passBaru','Password Baru', 'required|matches[ulangPass]',['required' => 'Password Baru Wajib Diisi!']);
		$this->form_validation->set_rules('ulangPass','Ulangi Password', 'required',['required' => 'Ulangi Password Wajib Diisi!']);

		if($this->form_validation->run() != FALSE){
			$data  = array('sandi'  => md5($passBaru));
			$id    = array('id_anggota' => $this->session->userdata('id_anggota'));

			$this->sandiModel->updateData( 'user_admin', $data, $id);
			$this->session->set_flashdata('pesan','<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Password berhasil diubah! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('welcome');
		}else{
				$data['title'] = "Ubah Password";
				$this->load->view('temp_admin/header', $data);
				$this->load->view('temp_admin/sidebar');
				$this->load->view('formGantiPassword', $data);
				$this->load->view('temp_admin/footer');
		}
	}	
}

 ?>