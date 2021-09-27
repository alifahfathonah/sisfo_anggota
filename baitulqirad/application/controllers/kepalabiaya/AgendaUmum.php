<?php 

class AgendaUmum extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='6'){
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

	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan.$tahun;
    }else{
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan.$tahun;
    }

    	$data['title'] = "Agenda Umum";
		$data['agendaumum'] = $this->db->query("SELECT * FROM agendau_bq WHERE agendau_bq.bulan='$bulantahun'")->result();
		$this->load->view('temp_kepalabiaya/header', $data);
		$this->load->view('temp_kepalabiaya/sidebar');
		$this->load->view('kepalabiaya/agendaumum', $data);
		$this->load->view('temp_kepalabiaya/footer');
	}
}

 ?>