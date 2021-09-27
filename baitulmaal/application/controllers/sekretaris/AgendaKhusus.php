<?php 

class AgendaKhusus extends CI_Controller{

 		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='2'){
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
        $data['title'] = "Agenda Khusus";
		$data['agendaks'] = $this->db->query("SELECT * FROM agendaks WHERE agendaks.bulan='$bulantahun'")->result();
		$this->load->view('temp_sekretaris/header', $data);
		$this->load->view('temp_sekretaris/sidebar');
		$this->load->view('sekretaris/agendaKhusus', $data);
		$this->load->view('temp_sekretaris/footer');
	}

			public function tambahData()
	{
		$data['title'] = "Tambah Agenda Khusus";
		$this->load->view('temp_sekretaris/header', $data);
		$this->load->view('temp_sekretaris/sidebar');
		$this->load->view('sekretaris/tambahAgendaKhusus', $data);
		$this->load->view('temp_sekretaris/footer');

	}

		public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{

		$bulan         = $this->input->post('bulan');
		$tanggal       = $this->input->post('tanggal');
		$jam 	       = $this->input->post('jam');
		$agenda 	   = $this->input->post('agenda');
		$lokasi 	   = $this->input->post('lokasi');
		$keterangan    = $this->input->post('keterangan');

		$data = array(
			'bulan'     	=> $bulan,
			'tanggal'   	=> $tanggal,
			'jam'   		=> $jam,
			'agenda'   		=> $agenda,
			'lokasi'   		=> $lokasi,
			'keterangan'   	=> $keterangan,

			);

		$this->adminModel->insertData($data,'agendaks');
		$this->session->set_flashdata('pesan','<div class="alert alert-success 
				alert-dismissible fade show" role="alert"> 
				Agenda Berhasil Ditambah! <button type="button" class="close"
				data-dismiss="alert" aria-label="close"
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('sekretaris/agendaKhusus');
	}
}

 	   public function _rules()
	{
		$this->form_validation->set_rules('bulan', 'Bulan', 'required',['required' => 'Bulan Wajib Diisi!']);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required',['required' => 'Tanggal Wajib Diisi!']);
		$this->form_validation->set_rules('jam', 'Jam', 'required',['required' => 'Jam Wajib Diisi!']);
		$this->form_validation->set_rules('agenda', 'Agenda', 'required',['required' => 'Agenda Wajib Diisi!']);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required',['required' => 'Lokasi Wajib Diisi!']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required',['required' => 'Keterangan Wajib Diisi!']);
	}


}

 ?>