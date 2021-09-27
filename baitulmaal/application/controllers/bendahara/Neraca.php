<?php 

class Neraca extends CI_Controller{

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
    	$data['title']  	= "Laporan Posisi Keuangan";
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/neraca', $data);
		$this->load->view('temp_bendahara/footer');
	}

	public function tesneraca()
	{	
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Posisi Keuangan";

    	$data['lancar'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '11900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_lancar'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '11900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();

    	$data['tdklancar'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '12000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_tdklancar'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '12000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();




    	$data['t_aset'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();




		$data['ljpendek'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '21900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_ljpendek'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '21900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


    	$data['ljpanjang'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '22000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_ljpanjang'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '22000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();

    	$data['t_liabilitas'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


    	$data['t_Szakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Sinfak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Swakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Samil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Snonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_dana'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



    	$data['t_ljdana'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/contohneraca', $data);
		$this->load->view('temp_bendahara/footer');
	}

	public function print()
	{
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Posisi Keuangan";

    	$data['lancar'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '11900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_lancar'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '11900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();

    	$data['tdklancar'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '12000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_tdklancar'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '12000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();




    	$data['t_aset'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '11000' AND '12900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();




		$data['ljpendek'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '21900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_ljpendek'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '21900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


    	$data['ljpanjang'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '22000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
    	$data['t_ljpanjang'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '22000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();

    	$data['t_liabilitas'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '22900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


    	$data['t_Szakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Sinfak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Swakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Samil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_Snonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	$data['t_dana'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



    	$data['t_ljdana'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '21000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
    	
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('bendahara/printNeraca',$data);
	}

}

 ?>