<?php 

class LabaRugi extends CI_Controller{

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
    	$data['title']  	= "Laporan Laba Rugi";
		$data['jurnal'] 	= $this->db->query("SELECT * FROM jurnalbq")->result();
		$data['tahun']  	= $this->pengurusModel->gettahun();
		$this->load->view('temp_ketua/header',$data);
		$this->load->view('temp_ketua/sidebar');
		$this->load->view('ketua/labaRugi', $data);
		$this->load->view('temp_ketua/footer');
	}

	public function teslaba()
	{	
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Laba Rugi";
    	// $data['bln_thn'] 	= $this->db->query("SELECT DATE_FORMAT(tgl,'%d') as hari,DATE_FORMAT(tgl,'%m') as bln, YEAR(tgl) as thn FROM jurnalbq WHERE tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' ")->result();
    	$data['pendapatan'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '400' AND '415' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_pendapatan'] 	= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '400' AND '416' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['hpp'] 			= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '417' AND '423' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_hpp'] 			= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '417' AND '423' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_kotor'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '400' AND '423' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$data['biaya'] 			= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '510' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_biaya'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '510' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_bersih'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '400' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$this->load->view('temp_ketua/header',$data);
		$this->load->view('temp_ketua/sidebar');
		$this->load->view('ketua/contohlaba', $data);
		$this->load->view('temp_ketua/footer');
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

			$data['title'] 		= "Laporan Laba Rugi";
			$data['subtitle'] 	= "Menampilkan Laporan Laba Rugi Bulan  " .$bulanawal. ' sampai dengan Bulan '.$bulanakhir. ' Tahun '.$tahun1;
			$data['laporan']     = $this->pengurusModel->filterbybulan($tahun1,$bulanawal,$bulanakhir);
			$this->load->view('temp_ketua/header',$data);
			$this->load->view('temp_ketua/sidebar');
			$this->load->view('ketua/labaRugi', $data);
			$this->load->view('temp_ketua/footer');

		}elseif ($nilaifilter == 2){

			$data['title'] 		= "Laporan Jurnal";
			$data['subtitle'] 	= "Dari tanggal : ".$tanggalawal.'-'.$tanggalakhir;
			$data['tampilkan'] = $this->pengurusModel->filterbytanggal($tanggalawal,$tanggalakhir);
			$this->load->view('temp_ketua/header',$data);
			$this->load->view('temp_ketua/sidebar');
			$this->load->view('ketua/contohlaba', $data);
			$this->load->view('temp_ketua/footer');

		}elseif ($nilaifilter == 3){

			$data['title'] 		= "Laporan Jurnal";
			$data['subtitle'] 	= 'Tahun :'.$tahun2;
			$data['datafilter'] = $this->pengurusModel->filterbytahun($tahun2);
			$this->load->view('temp_ketua/header',$data);
			$this->load->view('temp_ketua/sidebar');
			$this->load->view('ketua/jurnal', $data);
			$this->load->view('temp_ketua/footer');

		}
	}

	public function print()
	{
		$this->load->view('bendahara/printLabaRugi');
	}

}

 ?>