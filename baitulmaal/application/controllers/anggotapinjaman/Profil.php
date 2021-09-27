<?php 

 	class Profil extends CI_Controller{

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
		$data['title'] = "My Profile";
		$id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabm WHERE id_anggota='$id'")->result();
		$this->load->view('temp_anggotapinjaman/header', $data);
		$this->load->view('temp_anggotapinjaman/sidebar');
		$this->load->view('anggotapinjaman/profil',$data);
		$this->load->view('temp_anggotapinjaman/footer');
	}


 	}


 ?>