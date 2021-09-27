<?php 

class Dashboard extends CI_Controller{

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
		$data['title'] = "Dashboard";
		$id = $this->session->userdata('id_anggota');
		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabm WHERE id_anggota='$id'")->result();

		$admin   = $this->db->query("SELECT * FROM user_admin where pangkat='Admin Koperasi Tabarru'");
		$anggota = $this->db->query("SELECT * FROM data_anggotabm");
		$jabatan = $this->db->query("SELECT * FROM data_jabatanbm");
		$akses   = $this->db->query("SELECT * FROM data_aksesbm");
		$umum   = $this->db->query("SELECT * FROM agendaumum");
		$khusus   = $this->db->query("SELECT * FROM agendaks");

		$data['admin']  = $admin->num_rows();	
		$data['anggota']= $anggota->num_rows();
		$data['jabatan']= $jabatan->num_rows();
		$data['akses']  = $akses->num_rows();
		$data['umum']  = $umum->num_rows();
		$data['khusus']  = $khusus->num_rows();
		
		$this->load->view('temp_kepalapinjaman/header', $data);
		$this->load->view('temp_kepalapinjaman/sidebar');
		$this->load->view('kepalapinjaman/dashboard',$data);
		$this->load->view('temp_kepalapinjaman/footer');
	}
}

 ?>