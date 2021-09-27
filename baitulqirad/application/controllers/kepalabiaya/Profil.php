<?php 

 	class Profil extends CI_Controller{

  		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='6'){
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
		$data['title'] = "Profil Kepala Divisi Pembiayaan";
		$id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabq WHERE id_anggota='$id'")->result();
		$this->load->view('temp_kepalabiaya/header', $data);
		$this->load->view('temp_kepalabiaya/sidebar');
		$this->load->view('kepalabiaya/profil',$data);
		$this->load->view('temp_kepalabiaya/footer');
	}


 	}


 ?>