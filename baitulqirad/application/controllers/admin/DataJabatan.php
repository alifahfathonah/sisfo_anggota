<?php 

	class dataJabatan extends CI_Controller{

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
			$data['title'] = "Data Jabatan";
			$data['jabatan'] = $this->adminModel->get_data('data_jabatanbq')->result();
			$this->load->view('temp_admin/header', $data);
			$this->load->view('temp_admin/sidebar');
			$this->load->view('admin/dataJabatan', $data);
			$this->load->view('temp_admin/footer');
		}
		public function tambahData()
	{
		$data['title'] = "Tambah Data Jabatan";
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/tambahDataJabatan', $data);
		$this->load->view('temp_admin/footer');

	}

		public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$jabatan      = $this->input->post('jabatan');
		$status       = $this->input->post('status');
		$hak_akses 	  = $this->input->post('hak_akses');

		$data = array(
			'jabatan'     => $jabatan,
			'status'      => $status,
			'hak_akses'   => $hak_akses,
			);

		$this->adminModel->insertData($data,'data_jabatanbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Jabatan Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('admin/dataJabatan');
	}
}

 	   public function _rules()
	{
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required',['required' => 'Jabatan Wajib Diisi!']);
		$this->form_validation->set_rules('status', 'Status', 'required',['required' => 'Status Wajib Diisi!']);
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required',['required' => 'Hak Akses Wajib Diisi!']);
	}

	public function updateData($id)
	{
		$data['title'] = "Update Data Jabatan";
		$where = array('id_jabatan' => $id);
		$data['jabatan'] = $this->db->query("SELECT * FROM data_jabatanbq 
			WHERE id_jabatan='$id'")->result();
		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/updateDataJabatan',$data);
		$this->load->view('temp_admin/footer');
	}
	
	public function updateDataAksi()
	{
		$this->_rule();
		if($this->form_validation->run() == FALSE){
			$this->updateData();
		}else{

		$id 		  = $this->input->post('id_jabatan');
		$status       = $this->input->post('status');

		$data = array(
			'status'      => $status,
			);

		$where = array(
				'id_jabatan' => $id
			);

		$this->adminModel->updateData($where, $data, 'data_jabatanbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Status Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('admin/dataJabatan');
		}		

	}

	public function _rule()
	{
		$this->form_validation->set_rules('status', 'Status', 'required',['required' => 'Status Wajib Diisi!']);
	}

}