<?php 

 	class DataProfil extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='2'){
		   $this->session->set_flashdata('pesan','<div class="alert alert-danger 
		    	alert-dismissible fade show" role="alert"> 
						Anda belum login! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('welcome');

		}
	}


 		public function index()
	{	
		$data['title'] = "Profil Admin";
		$id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM user_admin WHERE id_anggota='$id'")->result();
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/dataProfil', $data);
		$this->load->view('temp_admin/footer');
	
	}


 	}