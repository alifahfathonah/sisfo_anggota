<?php 

class PerubahanModal extends CI_Controller{

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
		$this->load->view('ketua/perubahanModal', $data);
		$this->load->view('temp_ketua/footer');
	}

	public function testmodal()
	{	
		$data['title'] = "Laporan Perubahan Modal";
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Perubahan Modal";
    	// $data['bln_thn'] 	= $this->db->query("SELECT DATE_FORMAT(tgl,'%d') as hari,DATE_FORMAT(tgl,'%m') as bln, YEAR(tgl) as thn FROM jurnalbq WHERE tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' ")->result();
    	$data['modal'] 			= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '313' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_modal'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '313' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$data['t_bersih'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '400' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$data['t_awal'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['prive'] 			= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff` BETWEEN '315' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_akhir'] 		= $this->db->query("SELECT (sum(kredit) - sum(debet)) as saldo FROM `jurnalbq` WHERE `no_reff` BETWEEN '300' AND '529' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		$this->load->view('temp_ketua/header', $data);
		$this->load->view('temp_ketua/sidebar');
		$this->load->view('ketua/modal',$data);
		$this->load->view('temp_ketua/footer');
	}

		public function print()
	{
		$this->load->view('ketua/printModal');
	}
}

 ?>