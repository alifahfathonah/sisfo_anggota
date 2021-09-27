<?php 

class Piutang extends CI_Controller{

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
    	$data['title']   = "Daftar Piutang";
		$data['piutang'] = $this->db->query("SELECT * FROM jurnalbm WHERE jurnalbm.no_reff='11300'")->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/piutang', $data);
		$this->load->view('temp_bendahara/footer');
	}


		public function tambahData()
	{
		$data['title']      = "Tambah Data Piutang";
		$data['akun']       = $this->pengurusModel->get_data('akunbm')->result();
		$data['anggota']    = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahDataPiutang', $data);
		$this->load->view('temp_bendahara/footer');

	}

		public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$id_anggota     = $this->input->post('id_anggota');
		$tgl_pinjam 	= $this->input->post('tgl_pinjam');
		$no_reff       	= $this->input->post('no_reff');
		$akun       	= $this->input->post('akun');
		$nama       	= $this->input->post('nama');
		$debet 	  		= $this->input->post('debet');
		$kredit 	  	= $this->input->post('kredit');
		$keterangan 	= $this->input->post('keterangan');
		$nik 	  	    = $this->input->post('nik');
		$hak_akses 	  	= $this->input->post('hak_akses');
		$data = array(
			'id_anggota'    => $id_anggota,
			'tgl_pinjam'   	=> $tgl_pinjam,
			'no_reff'      	=> $no_reff,
			'akun'      	=> $akun,
			'nama'      	=> $nama,
			'debet'   		=> $debet,
			'kredit'   		=> $kredit,
			'keterangan'   	=> $keterangan,
			'nik'   		=> $nik,
			'hak_akses'     => $hak_akses,
			);

		$this->pengurusModel->insertData($data,'data_pinjamanbm');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Piutang Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/piutang');
	}
}

		// 	public function updateData($id)
		// {
		// 	$data['title'] = "Update Data Piutang";
		// 	$where = array('id_jurnal' => $id);
		// 	$data['jurnal'] = $this->db->query("SELECT * FROM jurnalbq 
		// 		WHERE id_jurnal='$id'")->result();
		// 	$this->load->view('temp_bendahara/header',$data);
		// 	$this->load->view('temp_bendahara/sidebar');
		// 	$this->load->view('bendahara/updateDataPiutang',$data);
		// 	$this->load->view('temp_bendahara/footer');

		// }

		// 	public function updateDataAksi()
		// {
		// 	$this->_rules();
		// 	if($this->form_validation->run() == FALSE){
		// 		$this->updateData();
		// 	}else{

		// 	$id 		    = $this->input->post('id_jurnal');
		// 	$tgl 	  		= $this->input->post('tgl');
		// 	$id_akun_debet  = $this->input->post('id_akun_debet');
		// 	$id_akun_kredit = $this->input->post('id_akun_kredit');
		// 	$no_reff_debet  = $this->input->post('no_reff_debet');
		// 	$no_reff_kredit = $this->input->post('no_reff_kredit');
		// 	$akun_debet 	= $this->input->post('akun_debet');
		// 	$akun_kredit 	= $this->input->post('akun_kredit');
		// 	$keterangan     = $this->input->post('keterangan');
		// 	$saldo      	= $this->input->post('saldo');

		// 	$debet = array(
		// 		'tgl'    		=> $tgl,
		// 		'id_akun'    	=> $id_akun_debet,
		// 		'no_reff'    	=> $no_reff_debet,
		// 		'akun' 			=> $akun_debet,
		// 		'keterangan'    => $keterangan,
		// 		'debet'    		=> $saldo,
		// 		'kredit'   		=> 0,
		// 		);

		// 	$this->pengurusModel->updateData($debet,'jurnalbq');
		// 	$kredit = array(
		// 		'tgl'    		=> $tgl,
		// 		'id_akun'    	=> $id_akun_kredit,
		// 		'no_reff'    	=> $no_reff_kredit,
		// 		'akun' 			=> $akun_kredit,
		// 		'keterangan'    => $keterangan,
		// 		'debet'    		=> 0,
		// 		'kredit'   		=> $saldo,
		// 		);

		// 	$this->pengurusModel->updateData($kredit,'jurnalbq');

		// 	$where = array(
		// 			'id_jurnal' => $id
		// 		);

		// 	$this->session->set_flashdata('pesan','<div class="alert alert-success 
		// 					alert-dismissible fade show" role="alert"> 
		// 					Saldo Piutang Berhasil Diedit! <button type="button" class="close"
		// 					data-dismiss="alert" aria-label="close"
		// 					<span aria-hidden="true">&times;</span>
		// 					</button>
		// 					</div>');
		// 	redirect('bendahara/piutang');
		// 	}		

		// }

	 	   public function _rules()
		{
			$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required',['required' => 'ID Anggota Wajib Diisi!']);
			$this->form_validation->set_rules('tgl_pinjam', 'Tanggal Peminjaman', 'required',['required' => 'Tanggal Peminjaman Wajib Diisi!']);
			$this->form_validation->set_rules('no_reff', 'No Reff', 'required',['required' => 'No Reff Wajib Diisi!']);
			$this->form_validation->set_rules('nama', 'Nama', 'required',['required' => 'Nama Wajib Diisi!']);
			$this->form_validation->set_rules('debet', 'Debet', 'required',['required' => 'Debet Wajib Diisi!']);
			$this->form_validation->set_rules('kredit', 'Kredit', 'required',['required' => 'Kredit Wajib Diisi!']);
			$this->form_validation->set_rules('keterangan', 'Saldo', 'required',['required' => 'Saldo Wajib Diisi!']);
			$this->form_validation->set_rules('nik', 'NIK', 'required',['required' => 'NIK Wajib Diisi!']);
			$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required',['required' => 'Hak Akses Wajib Diisi!']);
		}


			public function tampilData()
		{	
	    	$data['title']   = "Daftar Piutang";
			$data['piutang'] = $this->db->query("SELECT * FROM data_pinjamanbm")->result();
			$this->load->view('temp_bendahara/header', $data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/tampilPiutang', $data);
			$this->load->view('temp_bendahara/footer');
		}

		// 	public function updatePiutang($id)
		// {
		// 	$data['title'] = "Update Data Jabatan";
		// 	$where = array('id_piutang' => $id);
		// 	$data['piutang'] = $this->db->query("SELECT * FROM data_piutang 
		// 		WHERE id_piutang='$id'")->result();
		// 	$this->load->view('temp_bendahara/header',$data);
		// 	$this->load->view('temp_bendahara/sidebar');
		// 	$this->load->view('bendahara/updatePiutang',$data);
		// 	$this->load->view('temp_bendahara/footer');
		// }
		
		// public function updateDataPiutang()
		// {
		// 	$this->_rule();
		// 	if($this->form_validation->run() == FALSE){
		// 		$this->updatePiutang();
		// 	}else{

		// 	$id 		 = $this->input->post('id_piutang');
		// 	$saldo       = $this->input->post('saldo');

		// 	$data = array(
		// 		'saldo'      => $saldo,
		// 		);

		// 	$where = array(
		// 			'id_piutang' => $id
		// 		);

		// 	$this->pengurusModel->updateData($where, $data, 'data_piutang');
		// 	$this->session->set_flashdata('pesan','<div class="alert alert-success 
		// 					alert-dismissible fade show" role="alert"> 
		// 					Saldo Berhasil Diedit! <button type="button" class="close"
		// 					data-dismiss="alert" aria-label="close"
		// 					<span aria-hidden="true">&times;</span>
		// 					</button>
		// 					</div>');
		// 	redirect('bendahara/piutang/tampilData');
		// 	}		

		// }

		// public function _rule()
		// {
		// 	$this->form_validation->set_rules('saldo', 'Saldo', 'required',['required' => 'Saldo Wajib Diisi!']);
		// }


}

 ?>