<?php 

class PerubahanModal extends CI_Controller{

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
    	$data['title']  	= "Laporan Perubahan Dana";
		$data['jurnal'] 	= $this->db->query("SELECT * FROM jurnalbm")->result();
		$data['tahun']  	= $this->pengurusModel->gettahun();
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/perubahanModal', $data);
		$this->load->view('temp_bendahara/footer');
	}

	public function testmodal()
	{	
		$data['title'] = "Laporan Perubahan Dana";
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Perubahan Dana";
    	$data['P1zakat'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '31900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1zakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '31900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2zakat'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '32000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2zakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '32000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Szakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


		$data['P1infak'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '33900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1infak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '33900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2infak'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '34000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2infak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '34000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Sinfak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



		$data['P1wakaf'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '35900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1wakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '35900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2wakaf'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '36000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2wakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '36000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['t_Swakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



		$data['P1amil'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '37900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1amil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '37900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2amil'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '38000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2amil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '38000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Samil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


		$data['P1nonhalal'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '39900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1nonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '39900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2nonhalal'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '41000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2nonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '41000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Snonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();

	
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/modal',$data);
		$this->load->view('temp_bendahara/footer');
	}

		public function print()
	{
		$data['title'] = "Laporan Perubahan Dana";
		$tanggalawal 	= $this->input->post('tanggalawal');
		$tanggalakhir 	= $this->input->post('tanggalakhir');
		$data['date'] 	=[
					'awal'=>$tanggalawal,
					'akhir'=>$tanggalakhir
		];
    	$data['title']  		= "Laporan Perubahan Dana";
    	$data['P1zakat'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '31900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1zakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '31900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2zakat'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '32000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2zakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '32000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Szakat'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '31000' AND '32900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


		$data['P1infak'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '33900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1infak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '33900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2infak'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '34000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2infak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '34000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Sinfak'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '33000' AND '34900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



		$data['P1wakaf'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '35900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1wakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '35900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2wakaf'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '36000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2wakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '36000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['t_Swakaf'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '35000' AND '36900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();



		$data['P1amil'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '37900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1amil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '37900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2amil'] 		= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '38000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2amil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '38000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Samil'] 		= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '37000' AND '38900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();


		$data['P1nonhalal'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '39900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P1nonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '39900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	

		$data['P2nonhalal'] 	= $this->db->query("SELECT no_reff,akun,sum(debet) as t_debet, sum(kredit) as t_kredit FROM `jurnalbm` WHERE `no_reff` BETWEEN '41000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY akun")->result();
		$data['t_P2nonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '41000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();	


		$data['t_Snonhalal'] 	= $this->db->query("SELECT (sum(debet) - sum(kredit)) as saldo FROM `jurnalbm` WHERE `no_reff` BETWEEN '39000' AND '41900' AND tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'")->row();
		
		$this->load->view('temp_bendahara/header',$data);
		$this->load->view('bendahara/printModal',$data);
	}
}

 ?>