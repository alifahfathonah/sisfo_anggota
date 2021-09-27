<?php

class AgendaUmum_DU extends CI_Controller
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
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_DU/all';
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

		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['semua'] = $this->agendaUDU_Model->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Aketua()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris DU
	public function sekretarisDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Aketua()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda/anggotaC', $data);
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
			$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanUlama/box_ketua/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Ketua Dewan Ulama'
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
			redirect('AgendaUmum_DU/all');
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
		redirect('AgendaUmum_DU/all');
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
		$this->load->view('dewanUlama/temp_KetuaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/box_ketua/update_agendaU', $data2);
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
		redirect('AgendaUmum_DU/all');
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
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_DU/all_Asekretaris';
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

		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['semua'] = $this->agendaUDU_Model->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Asekretaris()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris DU
	public function ketuaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Asekretaris()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_sekretaris/anggotaC', $data);
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
			$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanUlama/box_sekretaris/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Sekretaris Dewan Ulama'
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
			redirect('AgendaUmum_DU/all_Asekretaris');
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
		redirect('AgendaUmum_DU/all_Asekretaris');
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
		$this->load->view('dewanUlama/temp_SekretarisDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/box_sekretaris/update_agendaU', $data2);
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
		redirect('AgendaUmum_DU/all_Asekretaris');
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
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_DU/all_Abendahara';
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

		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['semua'] = $this->agendaUDU_Model->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Abendahara()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris DU
	public function sekretarisDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	// //Benndahara DU
	// public function bendaharaDU_Abendahara()
	// {
	// 	$title['title'] = "Daftar Agenda";
	// 	$data['user'] = $this->db->get_where('user', ['email' =>
	// 	$this->session->userdata('email')])->row_array();
	// 	$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
	// 	$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
	// 	$this->load->view('templates/navbar', $data);
	// 	$this->load->view('dewanUlama/agenda_bendahara/bendaharaU', $data);
	// 	$this->load->view('templates/footer');
	// }
	public function anggotaDU_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Abendahara()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_bendahara/anggotaC', $data);
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
			$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanUlama/box_bendahara/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Bendahara Dewan Ulama'
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
			redirect('AgendaUmum_DU/all_Abendahara');
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
		redirect('AgendaUmum_DU/all_Abendahara');
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
		$this->load->view('dewanUlama/temp_BendaharaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/box_bendahara/update_agendaU', $data2);
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
		redirect('AgendaUmum_DU/all_Abendahara');
	}

	//Anggota punya 
	public function all_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->model('agendaUModel', 'agenModel');
		//PAGINATION	
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/sisfo_anggota/skom/AgendaUmum_DU/all_Aanggota';
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

		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['semua'] = $this->agendaUDU_Model->getAgenda($config['per_page'], $data['start'])->result();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/all', $data);
		$this->load->view('templates/footer');
	}
	//ketua
	public function ketua_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['mketua'] = $this->agendaUModel->allData_menurutKetua();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/ketua', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris
	public function sekretaris_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['msekretaris'] = $this->agendaUModel->allData_menurutSekretaris();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/sekretaris', $data);
		$this->load->view('templates/footer');
	}
	//Bendahara
	public function Bendahara_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['mbendahara'] = $this->agendaUModel->allData_menurutBendahara();

		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bendahara', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pendidikan
	public function bpendidikan_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['bpendidikan'] = $this->agendaUModel->allData_menurutBPendidikan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bpendidikan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Pelatihan
	public function bpelatihan_Aanggota()
	{
		$title['title'] = "Agenda Umum";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['bpelatihan'] = $this->agendaUModel->allData_menurutBPelatihan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bpelatihan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Keanggotaan
	public function bkeanggotaan_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['bkeanggotaan'] = $this->agendaUModel->allData_menurutBKeanggotaan();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bkeanggotaan', $data);
		$this->load->view('templates/footer');
	}
	//Bidang Riset & Pengembangan
	public function briset_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['briset'] = $this->agendaUModel->allData_menurutBRiset();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/briset&pengembangan', $data);
		$this->load->view('templates/footer');
	}
	//Ketua DU
	public function ketuaDU_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['ketuaDU'] = $this->agendaUDU_Model->allData_menurutKetuaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/ketuaU', $data);
		$this->load->view('templates/footer');
	}
	//Sekretaris DU
	public function sekretarisDU_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['sekretarisDU'] = $this->agendaUDU_Model->allData_menurutSekretarisDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/sekretarisU', $data);
		$this->load->view('templates/footer');
	}
	//
	//Benndahara DU
	public function bendaharaDU_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['bendaharaDU'] = $this->agendaUDU_Model->allData_menurutBendaharaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bendaharaU', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaDU_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/anggotaU', $data);
		$this->load->view('templates/footer');
	}
	//Ketua CE
	public function ketuaCE_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['ketuaCE'] = $this->agendaUDU_Model->allData_menurutKetuaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/ketuaC', $data);
		$this->load->view('templates/footer');
	}
	//
	//
	public function sekretarisCE_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['sekretarisCE'] = $this->agendaUDU_Model->allData_menurutSekretarisCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/sekretarisC', $data);
		$this->load->view('templates/footer');
	}
	public function bendaharaCE_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['bendaharaCE'] = $this->agendaUDU_Model->allData_menurutBendaharaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/bendaharaC', $data);
		$this->load->view('templates/footer');
	}
	public function anggotaCE_Aanggota()
	{
		$title['title'] = "Daftar Agenda";
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data['anggotaDU'] = $this->agendaUDU_Model->allData_menurutAnggotaDU();
		$data['anggotaCE'] = $this->agendaUDU_Model->allData_menurutAnggotaCE();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/agenda_anggota/anggotaC', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_AgendaU_Aanggota()
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
			$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
			$this->load->view('templates/navbar', $data);
			$this->load->view('dewanUlama/box_anggota/form_add_agendaU', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"tanggal" 		 	=> $this->input->post('tanggal', true),
				"jam"  				=> $this->input->post('jam', true),
				"agenda"       		=> htmlspecialchars($this->input->post('agenda', true)),
				"lokasi"    		=> htmlspecialchars($this->input->post('lokasi', true)),
				"keterangan"      	=> htmlspecialchars($this->input->post('keterangan', true)),
				"pembuat_agenda"   	=> 'Anggota Dewan Ulama'
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
			redirect('AgendaUmum_DU/all_Aanggota');
		}
	}

	public function hapus_Aanggota($id)
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
		redirect('AgendaUmum_DU/all_Aanggota');
	}

	public function edit_agendaU_Aanggota($id)
	{
		$title['title'] = "Edit Agenda";
		$where = array('id_agendau' => $id);
		$data['user'] = $this->db->get_where('user', ['nik' =>
		$this->session->userdata('nik')])->row_array();
		$data2['agenda'] = $this->agendaUModel->allData()->result();
		$data2['agenda2'] = $this->agendaUModel->edit_data($where, 'agendaumum_K')->result();
		$this->load->view('templates/header', $title);
		$this->load->view('dewanUlama/temp_AnggotaDU/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('dewanUlama/box_anggota/update_agendaU', $data2);
		$this->load->view('templates/footer');
	}

	public function updateAgendaU_aksi_Aanggota()
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
		redirect('AgendaUmum_DU/all_Aanggota');
	}
}