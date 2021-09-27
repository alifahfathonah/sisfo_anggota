<?php 

class Pembiayaan extends CI_Controller{

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
		$data['title']  = "Pembiayaan";
		$data['biaya']  = $this->pengurusModel->get_data('pembiayaanbq')->result();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/pembiayaan',$data);
		$this->load->view('temp_bendahara/footer');
	}


	// Tambah Data
		public function tambahData()
	{
		$data['title']     = "Tambah Data Pembiayaan";
		$data['anggota']   = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahDataBiaya', $data);
		$this->load->view('temp_bendahara/footer');

	}

		public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$no_akad      		= $this->input->post('no_akad');
		$jenis_akad         = $this->input->post('jenis_akad');
		$tgl_akad           = $this->input->post('tgl_akad');
		$jatuh_tempo      	= $this->input->post('jatuh_tempo');
		$jenis_pembiayaan   = $this->input->post('jenis_pembiayaan');
		$nilai_pembiayaan   = $this->input->post('nilai_pembiayaan');
		$uang_muka        	= $this->input->post('uang_muka');
		$sisa_angsuran      = $this->input->post('sisa_angsuran');
		$angsuran_perbulan  = $this->input->post('angsuran_perbulan');
		$lama_waktu      	= $this->input->post('lama_waktu');
		$tempo_angsuran     = $this->input->post('tempo_angsuran');
		$lama_angsuran      = $this->input->post('lama_angsuran');
		$staff      		= $this->input->post('staff');
		$nik      		    = $this->input->post('nik');
		$hak_akses 	        = $this->input->post('hak_akses');
		$foto 			    = $_FILES['foto']['name'];
			if ($foto=''){}else{
				$config['upload_path'] 	 = './assets/photo';
				$config['allowed_types'] = 'doc|docs|pdf';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "Arsip gagal diupload"; die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}


		$data = array(

	    'no_akad'				=> $no_akad,
		'jenis_akad'			=> $jenis_akad,
		'tgl_akad'			    => $tgl_akad,
		'jatuh_tempo'			=> $jatuh_tempo,
		'jenis_pembiayaan'		=> $jenis_pembiayaan,
		'nilai_pembiayaan'		=> $nilai_pembiayaan,
		'uang_muka'				=> $uang_muka,
		'sisa_angsuran'			=> $sisa_angsuran,
		'angsuran_perbulan'		=> $angsuran_perbulan,
		'lama_waktu'			=> $lama_waktu,
		'tempo_angsuran'		=> $tempo_angsuran,
		'lama_angsuran'			=> $lama_angsuran,
		'staff'					=> $staff,
		'nik'					=> $nik,
		'hak_akses'             => $hak_akses,
		'foto'					=> $foto,
			);

		$this->pengurusModel->insertData($data,'pembiayaanbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Akun Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" arial-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/pembiayaan');
	}
}
	 	 public function _rules()
	{
	$this->form_validation->set_rules('no_akad', 'No. Akad', 'required',                     ['required'=> 'Nomor Akad Wajib Diisi!']);
	$this->form_validation->set_rules('jenis_akad', 'Jenis Akad', 'required',                ['required'=> 'Jenis Akad Wajib Diisi!']);
	$this->form_validation->set_rules('tgl_akad', 'Tanggal Akad', 'required',                ['required'=> 'Tanggal Akad Wajib Diisi!']);
	$this->form_validation->set_rules('jatuh_tempo', 'Jatuh Tempo', 'required',              ['required'=> 'Jatuh Tempo Wajib Diisi!']);
	$this->form_validation->set_rules('jenis_pembiayaan', 'Jenis Pembiayaan', 'required',    ['required'=> 'Jenis Pembiayaan Wajib Diisi!']);
	$this->form_validation->set_rules('nilai_pembiayaan', 'Nilai Pembiayaan', 'required',   ['required'=> 'Nilai Pembiayaan Wajib Diisi!']);
	$this->form_validation->set_rules('uang_muka', 'Uang Muka', 'required',                  ['required'=> 'Uang Muka Wajib Diisi!']);
	$this->form_validation->set_rules('sisa_angsuran', 'Sisa Angsuran', 'required',          ['required'=> 'Sisa Angsuran Wajib Diisi!']);
	$this->form_validation->set_rules('angsuran_perbulan', 'Angsuran per Bulan', 'required', ['required'=> 'Angsuran per Bulan Wajib Diisi!']);
	$this->form_validation->set_rules('lama_waktu', 'Lama Waktu', 'required',                ['required'=> 'Lama Waktu Wajib Diisi!']);
	$this->form_validation->set_rules('tempo_angsuran', 'Tempo Angsuran', 'required',        ['required'=> 'Tempo Angsuran Wajib Diisi!']);
	$this->form_validation->set_rules('lama_angsuran', 'Lama Angsuran', 'required',          ['required'=> 'Lama Angsuran Wajib Diisi!']);
	$this->form_validation->set_rules('staff', 'Nama Staff Koperasi', 'required',            ['required'=> 'Nama Staff Koperasi Wajib Diisi!']);
	$this->form_validation->set_rules('nik', 'NIK Nasabah', 'required',                      ['required'=> 'NIK Nasabah Wajib Diisi!']);
	$this->form_validation->set_rules('hak_akses','Hak Akses','required',                    ['required' => 'Hak Akses Wajib Diisi!']);
        
	}

}

 ?>