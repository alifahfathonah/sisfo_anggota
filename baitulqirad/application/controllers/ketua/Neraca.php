<?php 

class Neraca extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='1'){
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
    	$data['title']  	= "Laporan Neraca";
		$this->load->view('temp_ketua/header',$data);
		$this->load->view('temp_ketua/sidebar');
		$this->load->view('ketua/neraca', $data);
		$this->load->view('temp_ketua/footer');
	}

	public function tesneraca()
	{	
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Laba Rugi";
    	// $data['bln_thn'] 	= $this->db->query("SELECT DATE_FORMAT(tgl,'%d') as hari,DATE_FORMAT(tgl,'%m') as bln, YEAR(tgl) as thn FROM jurnalbq WHERE tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' ")->result();
    	$data['lancar'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '110' AND '119' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_lancar'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '110' AND '119' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['tetap'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '120' AND '128' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_tetap'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '120' AND '128' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_aktiva'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '110' AND '128' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$data['wajib'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '210' AND '223' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_wajib'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '210' AND '223' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['modal'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '315' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_modal'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_modalwajib'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '210' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$this->load->view('temp_ketua/header',$data);
		$this->load->view('temp_ketua/sidebar');
		$this->load->view('ketua/contohneraca', $data);
		$this->load->view('temp_ketua/footer');
	}

	// function filter()
	// {
	// 	$tanggalawal 	= $this->input->post('tanggalawal');
	// 	$tanggalakhir 	= $this->input->post('tanggalakhir');
	// 	$tahun1         = $this->input->post('tahun1');
	// 	$bulanawal 		= $this->input->post('bulanawal');
	// 	$bulanakhir 	= $this->input->post('bulanakhir');
	// 	$tahun2         = $this->input->post('tahun2');
	// 	$nilaifilter	= $this->input->post('nilaifilter');

	// 	if ($nilaifilter == 1){

	// 		$data['title'] 		= "Laporan Neraca";
	// 		$data['subtitle'] 	= "Menampilkan Laporan Neraca Bulan  " .$bulanawal. ' sampai dengan Bulan '.$bulanakhir. ' Tahun '.$tahun1;
	// 		$data['laporan']     = $this->pengurusModel->filterbybulan($tahun1,$bulanawal,$bulanakhir);
	// 		$this->load->view('temp_bendahara/header',$data);
	// 		$this->load->view('temp_bendahara/sidebar');
	// 		$this->load->view('bendahara/nrLaporan', $data);
	// 		$this->load->view('temp_bendahara/footer');

	// 	}elseif ($nilaifilter == 2){

	// 		$data['title'] 		= "Laporan Jurnal";
	// 		$data['subtitle'] 	= "Dari tanggal : ".$tanggalawal.'-'.$tanggalakhir;
	// 		$data['datafilter'] = $this->pengurusModel->filterbytanggal($tanggalawal,$tanggalakhir);
	// 		$this->load->view('temp_bendahara/header',$data);
	// 		$this->load->view('temp_bendahara/sidebar');
	// 		$this->load->view('bendahara/jurnal', $data);
	// 		$this->load->view('temp_bendahara/footer');

	// 	}elseif ($nilaifilter == 3){

	// 		$data['title'] 		= "Laporan Jurnal";
	// 		$data['subtitle'] 	= 'Tahun :'.$tahun2;
	// 		$data['datafilter'] = $this->pengurusModel->filterbytahun($tahun2);
	// 		$this->load->view('temp_bendahara/header',$data);
	// 		$this->load->view('temp_bendahara/sidebar');
	// 		$this->load->view('bendahara/jurnal', $data);
	// 		$this->load->view('temp_bendahara/footer');

	// 	}
	// }

	public function print()
	{
		$this->load->view('ketua/printNeraca');
	}

}

 ?>