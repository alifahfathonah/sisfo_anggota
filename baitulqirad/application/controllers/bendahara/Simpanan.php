<?php 

class Simpanan extends CI_Controller{

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
    	$data['title']  = "Data Simpanan";
    	$data['simpan'] = $this->db->query("SELECT * FROM simpananbq")->result();
		$data['tahun']  = $this->pengurusModel->gettahun();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/Simpanan', $data);
		$this->load->view('temp_bendahara/footer');
	}

	function filter()
	{
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$tahun1         = $this->input->post('tahun1');
		$bulanawal 		= $this->input->post('bulanawal');
		$bulanakhir 	= $this->input->post('bulanakhir');
		$tahun2         = $this->input->post('tahun2');
		$nilaifilter	= $this->input->post('nilaifilter');

		if ($nilaifilter == 1){

			$data['title'] 		= "Laporan Simpanan";
			$data['subtitle'] 	= "Menampilkan Simpanan Bulan  " .$bulanawal. ' sampai dengan Bulan '.$bulanakhir. ' Tahun '.$tahun1;
			$data['simpan']     = $this->pengurusModel->filterbybulan1($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/simpantampil', $data);
			$this->load->view('temp_bendahara/footer');

		}elseif ($nilaifilter == 2){

			$data['title'] 		= "Laporan Simpanan";
			$data['subtitle'] 	= "Dari tanggal : ".$tanggalawal.'-'.$tanggalakhir;
			$data['datafilter'] = $this->pengurusModel->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/simpan', $data);
			$this->load->view('temp_bendahara/footer');

		}elseif ($nilaifilter == 3){

			$data['title'] 		= "Laporan Simpanan";
			$data['subtitle'] 	= 'Tahun :'.$tahun2;
			$data['datafilter'] = $this->pengurusModel->filterbytahun($tahun2);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/simpan', $data);
			$this->load->view('temp_bendahara/footer');

		}
	}

// Tambah Data
	public function tambahSimpan()
	{
		$data['title'] 	  = "Tambah Simpanan";
		$data['anggota']   = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahDataSimpan',$data);
		$this->load->view('temp_bendahara/footer');
	}
	public function tambahAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahSimpan();
		}else{

		$id_anggota     	= $this->input->post('id_anggota');
		$nik 				= $this->input->post('nik');
		$tgl_simpan 		= $this->input->post('tgl_simpan');
		$nama       		= $this->input->post('nama');
		$simpanan_pokok 	= $this->input->post('simpanan_pokok');
		$simpanan_wajib 	= $this->input->post('simpanan_wajib');
		$simpanan_sukarela 	= $this->input->post('simpanan_sukarela');
		$hak_akses 	        = $this->input->post('hak_akses');

		$data = array(
			'id_anggota'        => $id_anggota,
			'nik'      	    	=> $nik,
			'tgl_simpan'   	    => $tgl_simpan,
			'nama'      	    => $nama,
			'simpanan_pokok'    => $simpanan_pokok,
			'simpanan_wajib'    => $simpanan_wajib,
			'simpanan_sukarela' => $simpanan_sukarela,
			'hak_akses'         => $hak_akses,
			);

		$this->pengurusModel->insertData($data,'simpananbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Piutang Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/simpanan');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required',['required' => 'ID Anggota Wajib Diisi!']);
		$this->form_validation->set_rules('nik','NIK','required',['required' => 'NIK Wajib Diisi!']);
		$this->form_validation->set_rules('tgl_simpan', 'Tanggal Simpan', 'required',['required' => 'Tanggal Simpan Wajib Diisi!']);
		$this->form_validation->set_rules('nama', 'Nama','required',['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('simpanan_pokok', 'Simpanan Pokok', 'required',['required' => 'Simpanan Pokok Wajib Diisi!']);
		$this->form_validation->set_rules('simpanan_wajib', 'Simpanan Wajib', 'required',['required' => 'Simpanan Wajib Wajib Diisi!']);
		$this->form_validation->set_rules('simpanan_sukarela', 'Simpanan Sukarela', 'required',['required' => 'Simpanan Sukarela Wajib Diisi!']);
		$this->form_validation->set_rules('hak_akses','Hak Akses','required',['required' => 'Hak Akses Wajib Diisi!']);
        
	}


}

 ?>