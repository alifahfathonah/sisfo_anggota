<?php 

class Jurnal extends CI_Controller{

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
    	$data['title'] = "Jurnal Umum";
    	$data['jurnal'] = $this->db->query("SELECT * FROM jurnalbq")->result();
		$data['tahun'] = $this->pengurusModel->gettahun();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/jurnal', $data);
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

			$data['title'] 		= "Laporan Jurnal";
			$data['subtitle'] 	= "Menampilkan Jurnal Umum Bulan  " .$bulanawal. ' sampai dengan Bulan '.$bulanakhir. ' Tahun '.$tahun1;
			$data['laporan']     = $this->pengurusModel->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/jurnalLaporan', $data);
			$this->load->view('temp_bendahara/footer');

		}elseif ($nilaifilter == 2){

			$data['title'] 		= "Laporan Jurnal";
			$data['subtitle'] 	= "Dari tanggal : ".$tanggalawal.'-'.$tanggalakhir;
			$data['datafilter'] = $this->pengurusModel->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/jurnal', $data);
			$this->load->view('temp_bendahara/footer');

		}elseif ($nilaifilter == 3){

			$data['title'] 		= "Laporan Jurnal";
			$data['subtitle'] 	= 'Tahun :'.$tahun2;
			$data['datafilter'] = $this->pengurusModel->filterbytahun($tahun2);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/jurnal', $data);
			$this->load->view('temp_bendahara/footer');

		}
	}

		public function viewKode()
	{
		$akun = $this->input->post('akun');
		$data = $this->db->get_where('akunbq',['akun'=>$akun])->row();
		echo json_encode($data);
	}

// Tambah Data
	public function tambahJurnal()
	{
		$data['title'] = "Tambah Jurnal Umum";
		$data['akun'] = $this->pengurusModel->get_data('akunbq')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahJurnal',$data);
		$this->load->view('temp_bendahara/footer');
	}
	public function tambahAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahJurnal();
		}else{

		$tgl 	  		= $this->input->post('tgl');
		$id_akun_debet  = $this->input->post('id_akun_debet');
		$id_akun_kredit = $this->input->post('id_akun_kredit');
		$no_reff_debet  = $this->input->post('no_reff_debet');
		$no_reff_kredit = $this->input->post('no_reff_kredit');
		$akun_debet 	= $this->input->post('akun_debet');
		$akun_kredit 	= $this->input->post('akun_kredit');
		$keterangan     = $this->input->post('keterangan');
		$saldo      	= $this->input->post('saldo');

		$debet = array(
			'tgl'    		=> $tgl,
			'id_akun'    	=> $id_akun_debet,
			'no_reff'    	=> $no_reff_debet,
			'akun' 			=> $akun_debet,
			'keterangan'    => $keterangan,
			'debet'    		=> $saldo,
			'kredit'   		=> 0,
			);

		$this->pengurusModel->insertData($debet,'jurnalbq');
		$kredit = array(
			'tgl'    		=> $tgl,
			'id_akun'    	=> $id_akun_kredit,
			'no_reff'    	=> $no_reff_kredit,
			'akun' 			=> $akun_kredit,
			'keterangan'    => $keterangan,
			'debet'    		=> 0,
			'kredit'   		=> $saldo,
			);

		$this->pengurusModel->insertData($kredit,'jurnalbq');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Data Jurnal Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('bendahara/jurnal');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required',['required' => 'Tanggal Wajib Diisi!']);
		$this->form_validation->set_rules('akun_debet', 'Akun', 'required',['required' => 'Akun Wajib Diisi!']);
		$this->form_validation->set_rules('no_reff_debet', 'No Reff', 'required',['required' => 'No Reff Wajib Diisi!']);
		$this->form_validation->set_rules('akun_kredit', 'Akun', 'required',['required' => 'Akun Wajib Diisi!']);
		$this->form_validation->set_rules('no_reff_kredit', 'No Reff', 'required',['required' => 'No Reff Wajib Diisi!']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required',['required' => 'Keterangan Wajib Diisi!']);
	}


}

 ?>