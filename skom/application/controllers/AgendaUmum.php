<?php

class AgendaUmum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	//Ketua Dewan Ulama
	public function all()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum/all';
		$config['total_rows'] = $this->agenModel->countAllAgenda();
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	// public function ketua_Aketua()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['ketua'] = $this->agendaUModel->allData_menurutKetua();
	// 	$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda/ketua', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Sekretaris
	public function sekretaris_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Aketua()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', ['required' => 'Tanggal Wajib Diisi!']);
		$this->form_validation->set_rules('jam', 'Jam', 'required|trim', ['required' => 'Waktu Wajib Diisi!']);
		$this->form_validation->set_rules('agenda', 'Agenda', 'required|trim', ['required' => 'Agenda Wajib Diisi!']);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi Wajib Diisi!']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$title['title']        = "Tambah Agenda";
			$data['user'] = $this->db->get_where('user', ['nik' =>
			$this->session->userdata('nik')])->row_array();
			$this->load->view('templates/header', $title);
			$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_ketua/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Ketua Dewan Pimpinan'
			];
			$this->db->insert('agendaumum_K', $data);
			//$this->_sendEmail();
			$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('AgendaUmum/all');
		}
	}

	public function hapus($id)
	{
		$where = array('id_agendau' => $id);
		$this->agendaUModel->hapusAgendaU($where, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all');
	}

	public function edit_agendaU($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_ketua/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi()
	{
		$id             = $this->input->post('id_agendau');
		$tanggal        = $this->input->post('tanggal');
		$jam      = $this->input->post('jam');
		$agenda        = $this->input->post('agenda');
		$lokasi     = $this->input->post('lokasi');
		$keterangan     = $this->input->post('keterangan');

		$data = array(
			'tanggal'       	=> $tanggal,
			'jam'     			=> $jam,
			'agenda'       		=> $agenda,
			'lokasi'    		=> $lokasi,
			'keterangan'    	=> $keterangan,
		);

		$where = array(
			'id_agendau' => $id
		);

		$this->agendaUModel->update_data($where, $data, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all');
	}

	//Sekretasrtis punya 
	public function all_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum/all_Asekretaris';
		$config['total_rows'] = $this->agenModel->countAllAgenda();
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	// public function sekretaris_Asekretaris()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
	// 	$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanUlama/agenda_sekretaris/sekretaris', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Bendahara
	public function Bendahara_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Asekretaris()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_sekretaris/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Asekretaris()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', ['required' => 'Tanggal Wajib Diisi!']);
		$this->form_validation->set_rules('jam', 'Jam', 'required|trim', ['required' => 'Waktu Wajib Diisi!']);
		$this->form_validation->set_rules('agenda', 'Agenda', 'required|trim', ['required' => 'Agenda Wajib Diisi!']);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi Wajib Diisi!']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$title['title']        = "Tambah Agenda";
			$data['user'] = $this->db->get_where('user', ['nik' =>
			$this->session->userdata('nik')])->row_array();
			$this->load->view('templates/header', $title);
			$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_sekretaris/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Sekretaris Dewan Pimpinan'
			];
			$this->db->insert('agendaumum_K', $data);
			//$this->_sendEmail();
			$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('AgendaUmum/all_Asekretaris');
		}
	}

	public function hapus_Asekretaris($id)
	{
		$where = array('id_agendau' => $id);
		$this->agendaUModel->hapusAgendaU($where, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all_Asekretaris');
	}

	public function edit_agendaU_Asekretaris($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_SekretarisDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_sekretaris/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Asekretaris()
	{
		$id             = $this->input->post('id_agendau');
		$tanggal        = $this->input->post('tanggal');
		$jam      = $this->input->post('jam');
		$agenda        = $this->input->post('agenda');
		$lokasi     = $this->input->post('lokasi');
		$keterangan     = $this->input->post('keterangan');

		$data = array(
			'tanggal'       	=> $tanggal,
			'jam'     			=> $jam,
			'agenda'       		=> $agenda,
			'lokasi'    		=> $lokasi,
			'keterangan'    	=> $keterangan,
		);

		$where = array(
			'id_agendau' => $id
		);

		$this->agendaUModel->update_data($where, $data, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all_Asekretaris');
	}

	//Bendahara punya 
	public function all_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum/all_Abendahara';
		$config['total_rows'] = $this->agenModel->countAllAgenda();
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	// public function Bendahara_Abendahara()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
	// 	$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda_bendahara/bendahara', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Bidang Pendidikan
	public function bpendidikan_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Abendahara()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris DU
	public function sekretarisDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	//Anggota DU
	public function anggotaDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris CE
	public function sekretarisCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_bendahara/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Abendahara()
	{
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', ['required' => 'Tanggal Wajib Diisi!']);
		$this->form_validation->set_rules('jam', 'Jam', 'required|trim', ['required' => 'Waktu Wajib Diisi!']);
		$this->form_validation->set_rules('agenda', 'Agenda', 'required|trim', ['required' => 'Agenda Wajib Diisi!']);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi Wajib Diisi!']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$title['title']        = "Tambah Agenda";
			$data['user'] = $this->db->get_where('user', ['nik' =>
			$this->session->userdata('nik')])->row_array();
			$this->load->view('templates/header', $title);
			$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_bendahara/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Bendahara Dewan Pimpinan'
			];
			$this->db->insert('agendaumum_K', $data);
			//$this->_sendEmail();
			$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Baru Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
			redirect('AgendaUmum/all_Abendahara');
		}
	}

	public function hapus_Abendahara($id)
	{
		$where = array('id_agendau' => $id);
		$this->agendaUModel->hapusAgendaU($where, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Dihapus! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all_Abendahara');
	}

	public function edit_agendaU_Abendahara($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_BendaharaDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_bendahara/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Abendahara()
	{
		$id             = $this->input->post('id_agendau');
		$tanggal        = $this->input->post('tanggal');
		$jam      = $this->input->post('jam');
		$agenda        = $this->input->post('agenda');
		$lokasi     = $this->input->post('lokasi');
		$keterangan     = $this->input->post('keterangan');

		$data = array(
			'tanggal'       	=> $tanggal,
			'jam'     			=> $jam,
			'agenda'       		=> $agenda,
			'lokasi'    		=> $lokasi,
			'keterangan'    	=> $keterangan,
		);

		$where = array(
			'id_agendau' => $id
		);

		$this->agendaUModel->update_data($where, $data, 'agendaumum_K');
		$this->session->set_flashdata('notif', '<div class="alert alert-success 
						alert-dismissible fade show font-italic" role="alert"> 
						Agenda Berhasil Diedit! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		redirect('AgendaUmum/all_Abendahara');
	}
}