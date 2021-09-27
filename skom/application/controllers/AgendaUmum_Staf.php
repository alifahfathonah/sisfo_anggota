<?php

class AgendaUmum_Staf extends CI_Controller
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
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_Staf/all';
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

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	// public function bpendidikan_Bpendidikan()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
	// 	$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_KetuaDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda/bpendidikan', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Bidang Pelatihan
	public function bpelatihan_Bpendidikan()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Bpendidikan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pendidikan/anggotaC', $data);
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
			$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_bpendidikan/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Staf Bidang Pendidikan'
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
			redirect('AgendaUmum_Staf/all');
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
		redirect('AgendaUmum_Staf/all');
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
		$this->load->view('dewanPimpinan/temp_StafBPendidikanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_bpendidikan/update_agendaU', $data2);
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
		redirect('AgendaUmum_Staf/all');
	}

	//Staf Bidang Pelatihan
	public function all_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_Staf/all_Bpelatihan';
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

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	// public function bpelatihan_Bpendidikan()
	// {
	// 	$title['title'] = "Agenda Umum";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
	// 	$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda_b_pelatihan/bpelatihan', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Bidang Keanggotaan
	public function bkeanggotaan_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Bpelatihan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_pelatihan/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Bpelatihan()
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
			$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_bpelatihan/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Staf Bidang Pelatihan'
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
			redirect('AgendaUmum_Staf/all_Bpelatihan');
		}
	}

	public function hapus_Bpelatihan($id)
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
		redirect('AgendaUmum_Staf/all_Bpelatihan');
	}

	public function edit_agendaU_Bpelatihan($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBPelatihanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_bpelatihan/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Bpelatihan()
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
		redirect('AgendaUmum_Staf/all_Bpelatihan');
	}

	//Staf Bidang Keanggotaan
	public function all_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_Staf/all_Bkeanggotaan';
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

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Bkeanggotaan()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	// public function bkeanggotaan_Bkeanggotaan()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
	// 	$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bkeanggotaan', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Bidang Riset & Pengembangan
	public function briset_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Bkeanggotaan()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_keanggotaan/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Bkeanggotaan()
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
			$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_bkeanggotaan/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Staf Bidang Keanggotaan'
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
			redirect('AgendaUmum_Staf/all_Bkeanggotaan');
		}
	}

	public function hapus_Bkeanggotaan($id)
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
		redirect('AgendaUmum_Staf/all_Bkeanggotaan');
	}

	public function edit_agendaU_Bkeanggotaan($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_bkeanggotaan/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Bkeanggotaan()
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
		redirect('AgendaUmum_Staf/all_Bkeanggotaan');
	}

	//Staf Bidang Riset & Pengembangan
	public function all_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_Staf/all_Briset';
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

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['semua'] = $this->agendaUModel->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Briset()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	// public function briset_Briset()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['nik' =>
	// 	$this->session->userdata('nik')])->row_array();

	// 	$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
	// 	$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanPimpinan/agenda_b_keanggotaan/briset&pengembangan', $data);
	// 	$this->load->view('templates/footer');
	// }
	//Ketua DU
	public function ketuaDU_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Sekretaris DU
	public function sekretarisDU_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Briset()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/agenda_b_riset/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Briset()
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
			$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanPimpinan/box_briset/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Staf Bidang Riset & Pengembangan'
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
			redirect('AgendaUmum_Staf/all_Briset');
		}
	}

	public function hapus_Briset($id)
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
		redirect('AgendaUmum_Staf/all_Briset');
	}

	public function edit_agendaU_Briset($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanPimpinan/temp_StafBRiset_PDP/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanPimpinan/box_briset/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Briset()
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
		redirect('AgendaUmum_Staf/all_Briset');
	}
}