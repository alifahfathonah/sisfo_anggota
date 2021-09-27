<?php 

class BukuBesar extends CI_Controller{

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
		$data['title']  = "Buku Besar";
		$data['akun']   = $this->pengurusModel->get_data('akunbm')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/bukuBesar',$data);
		$this->load->view('temp_bendahara/footer');
	 
	}	

		public function tampilBukber()
	{
		$data['title']  = "Buku Besar";
		$akun  = $this->input->post('akun');                       
		$data['tampilkan'] = $this->db->query("SELECT jurnalbm.tgl, jurnalbm.no_reff, jurnalbm.akun, 
			                                            jurnalbm.keterangan, jurnalbm.debet, jurnalbm.kredit
													FROM jurnalbm
													WHERE  jurnalbm.akun='$akun'")->result();

		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/bukBer',$data);
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
		// $akun  			= $this->input->post('akun');  

		if ($nilaifilter == 1){

			$data['title'] 		= "Laporan Buku Besar";
			$data['subtitle'] 	= "Menampilkan Jurnal Umum Bulan  " .$bulanawal. ' sampai dengan Bulan '.$bulanakhir. ' Tahun '.$tahun1;
			$data['laporan']     = $this->pengurusModel->filterbybulan($tahun1,$bulanawal,$bulanakhir,$akun);
			// $data['akun']   = $this->pengurusModel->get_data('akunbq')->result();
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/jurnalLaporan', $data);
			$this->load->view('temp_bendahara/footer');

		}elseif ($nilaifilter == 2){

			$data['title'] 		= "Laporan Buku Besar";
			$data['subtitle'] 	= "Menampilkan Laporan Buku Besar Tanggal  " .$tanggalawal. ' sampai dengan Tanggal '.$tanggalakhir;
			$data['laporan']    = $this->pengurusModel->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('bendahara/printBukber', $data);

		}elseif ($nilaifilter == 3){

			$data['title'] 		= "Laporan Buku Besar";
			$data['subtitle'] 	= 'Tahun :'.$tahun2;
			$data['datafilter'] = $this->pengurusModel->filterbytahun($tahun2);
			$this->load->view('temp_bendahara/header',$data);
			$this->load->view('temp_bendahara/sidebar');
			$this->load->view('bendahara/jurnal', $data);
			$this->load->view('temp_bendahara/footer');

		}
	}

}
 ?>