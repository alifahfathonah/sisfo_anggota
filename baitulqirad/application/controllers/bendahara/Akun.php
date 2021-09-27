<?php 

class Akun extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='3'){
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
		$data['title'] = "Chart of Account";
		$data['akun']  = $this->pengurusModel->get_data('akunbq')->result();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/akun',$data);
		$this->load->view('temp_bendahara/footer');
	}


	// Tambah Data
		public function tambahData()
	{
		$data['title'] = "Tambah Data Akun";
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahDataAkun', $data);
		$this->load->view('temp_bendahara/footer');

	}

		public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$no_reff      = $this->input->post('no_reff');
		$akun         = $this->input->post('akun');

		$data = array(
			'no_reff'     => $no_reff,
			'akun'        => $akun,
			);

		$this->pengurusModel->insertData($data,'akunbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Akun Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/akun');
	}
}

	public function updateData($id)
	{
		$data['title'] = "Update Data Akun";
		$where = array('id_akun' => $id);
		$data['akun'] = $this->db->query("SELECT * FROM akunbq 
			WHERE id_akun='$id'")->result();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/updateDataAkun',$data);
		$this->load->view('temp_bendahara/footer');
	}
	
	public function updateDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->updateData();
		}else{

		$id 		  = $this->input->post('id_akun');
		$no_reff      = $this->input->post('no_reff');
		$akun         = $this->input->post('akun');

		$data = array(
			'no_reff'     => $no_reff,
			'akun'        => $akun,
			);

		$where = array(
				'id_akun' => $id
			);

		$this->adminModel->updateData($where, $data, 'akunbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
						alert-dismissible fade show" role="alert"> 
						Data Akun Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('bendahara/akun');
		}		

	}

 	   public function _rules()
	{
		$this->form_validation->set_rules('no_reff', 'No Reff', 'required',['required' => 'No Reff Wajib Diisi!']);
		$this->form_validation->set_rules('akun', 'Akun', 'required',['required' => 'Akun Wajib Diisi!']);
	}

	   public function deleteData($id)
	{
		$data['title'] = "Delete Data Akun";
		$where = array('id_akun' => $id);
		$this->pengurusModel->deleteData($where, 'akunbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Akun Berhasil Dihapus! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/akun');
	}


}

 ?>