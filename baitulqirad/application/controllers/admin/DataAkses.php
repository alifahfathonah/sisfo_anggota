<?php 

  class dataAkses extends CI_Controller{

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
		$data['title'] = "Data Hak Akses";
		$data['akses'] = $this->adminModel->get_data('data_aksesbq')->result();
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/dataAkses', $data);
		$this->load->view('temp_admin/footer');
	}

// Tambah Data
	public function tambahData()
	{
		$data['title'] = "Tambah Data Hak Akses";
		$data['jabatan'] = $this->adminModel->get_data('data_jabatanbq')->result();
		$data['admin']   = $this->adminModel->get_data('user_admin')->result();
		$data['anggota'] = $this->adminModel->get_data('data_anggotabq')->result();
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/tambahDataAkses', $data);
		$this->load->view('temp_admin/footer');
	}
	public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$id_jabatan       = $this->input->post('id_jabatan');
		$id_anggota       = $this->input->post('id_anggota');
		$nama_anggota  	  = $this->input->post('nama_anggota');
		$jabatan 	  	  = $this->input->post('jabatan');
		$hak_akses 	  	  = $this->input->post('hak_akses');
		$nama_admin 	  = $this->input->post('nama_admin');
		$tgl_update 	  = $this->input->post('tgl_update');

		$data = array(
			'id_jabatan'       => $id_jabatan,
			'id_anggota'       => $id_anggota,
			'nama_anggota' 	   => $nama_anggota,
			'jabatan'          => $jabatan,
			'hak_akses'        => $hak_akses,
			'nama_admin'       => $nama_admin,
			'tgl_update'       => $tgl_update,
			);

		$this->adminModel->insertData($data,'data_aksesbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Hak Akses Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('admin/dataAkses');

		}
	}

		public function _rules()
	{
		$this->form_validation->set_rules('id_jabatan', 'ID Jabatan', 'required');
		$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required');
		$this->form_validation->set_rules('nama_anggota', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');
		$this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
		$this->form_validation->set_rules('tgl_update', 'Tanggal Update', 'required');
	}


}