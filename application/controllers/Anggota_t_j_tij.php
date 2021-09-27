<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_t_j_tij extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('hak_akses') == NULL) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
			redirect('login/anggota_tijarah');
		}
	}

	public function index()
	{
		// var_dump($_SESSION);die;
		$data['title'] = "Selamat Datang";
		$data['info_kom'] = $this->Data_user_m->get_data('info_kom')
			->result();
		$data['info_tij'] = $this->Data_user_m->get_data('info_tij')
			->result();
		$data['info_tab'] = $this->Data_user_m->get_data('info_tab')
			->result();

		$data['user'] = $this->Data_user_m->get_data('data_anggotabq')
			->result();
		// $data['user2'] = $this->Data_user_m->get_data('data_anggotabm')
		//     ->result();

		// $this->load->view('templates_website/header');
		$this->load->view('dashboard_anggota_tij/anggota_t_j', $data);
		// $this->load->view('templates_website/footer');
	}

	public function simpanan()
	{
		$data['title'] = "Selamat Datang";

		$data['simpananbyuser'] = $this->db->get_where('simpananbq', ['id_anggota' => $this->session->userdata('id_anggota')])->result();
		$data['simpanan_total'] = $this->db->select('sum(simpanan_pokok) as j_simpanan_pokok,sum(simpanan_wajib) as j_simpanan_wajib,sum(simpanan_sukarela) as j_simpanan_sukarela')
											->get_where('simpananbq', ['id_anggota' => $this->session->userdata('id_anggota')])->row();
		// var_dump($data['simpanan_total']);die;

		// $data['simpananbq'] = $this->Data_user_m->get_data('simpananbq')
		//     ->result();

		// $data['data_anggotabq'] = $this->Data_user_m->data_anggotabq()->result();
		// $data['simpananbq'] = $this->Data_user_m->simpananbq()->result();
		// $data['join_anggota_simpanan'] = $this->Data_user_m->data_join2table()->result();
		
		// $this->load->view('templates_website/header');
		$this->load->view('dashboard_anggota_tij/simpanan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function toko_emas()
	{
		$data['title'] = "Toko Emas";

		$this->load->view('dashboard_anggota_tij/toko_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Pembiayaan
	public function profil_pembiayaan()
	{
		$data['title'] = "Profil Pembiayaan";
		$anggota_nik = $this->session->userdata('nik');
		$data['biaya'] = $this->Data_user_m->get_data_id('pembiayaanbq',['nik'=>$anggota_nik])->result();
		// $data['biaya'] = $this->Data_user_m->get_data('pembiayaanbq')->result();
		$this->load->view('dashboard_anggota_tij/profil_pembiayaan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function riwayat_angsuran_pembiayaan()
	{
		$data['title'] = "Riwayat Angsuran Pembiayaan";

		$anggota_id = $this->session->userdata('id_anggota');
		$data['piutang'] = $this->Data_user_m->get_data_id('data_piutangbq',['id_anggota'=>$anggota_id])->result();
		// $data['piutang'] = $this->Data_user_m->get_data('data_piutangbq')->result();
		$this->load->view('dashboard_anggota_tij/riwayat_angsuran_pembiayaan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Pinjaman Emas
	public function pinjaman_emas()
	{
		$data['title'] = "Pinjaman Emas";
		$anggota_id = $this->session->userdata('id_anggota');
		$data['piutang'] = $this->Data_user_m->get_data_id('data_pinjamanbm',['id_anggota'=>$anggota_id])->result();
		// $data['piutang'] = $this->Data_user_m->get_data('data_pinjamanbm')->result();
		$this->load->view('dashboard_anggota_tij/pinjaman_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Riwayat Angsuran Tabarru
	public function riwayat_angsuran_tabarru()
	{
		$data['title'] = "Riwayat Angsuran Tabarru";

		$this->load->view('dashboard_anggota_tij/riwayat_angsuran_tabarru', $data);
		$this->load->view('templates_dashboard_web/footer');
	}


	//Komunitas
	public function kuttab()
	{
		$data['title'] = "Kuttab";
		$data['agenda_kuttab'] = $this->Data_user_m->get_data('agenda_kuttab')->result();
		$data['informasi_kuttab'] = $this->Data_user_m->get_data('informasi_kuttab')->result();
		$this->load->view('dashboard_anggota_tij/kuttab', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function pelatihan_usaha()
	{
		$data['title'] = "Pelatihan Usaha";
		$data['agenda_pelatihan'] = $this->Data_user_m->get_data('agenda_pelatihan')->result();
		$data['informasi_pelatihan'] = $this->Data_user_m->get_data('informasi_pelatihan')->result();
		$this->load->view('dashboard_anggota_tij/pelatihan_usaha', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function agenda_koperasi()
	{
		$data['title'] = "Agenda Koperasi";
		$data['agendaumum_k'] = $this->Data_user_m->get_data('agendaumum_k')
			->result();
		$this->load->view('dashboard_anggota_tij/agenda_koperasi', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Koperasi Tijarah
	public function usaha_jual_beli_emas()
	{
		$data['title'] = "Usaha Jual Beli Emas";

		$this->load->view('dashboard_anggota_tij/usaha_jual_beli_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function usaha_pembiayaan()
	{
		$data['title'] = "Usaha Pembiayaan";

		$this->load->view('dashboard_anggota_tij/usaha_pembiayaan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function keuangan_tijarah()
	{
		$data['title'] = "Keuangan Tijarah";

		$this->load->view('dashboard_anggota_tij/keuangan_tijarah', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Koperasi Tabarru
	public function usaha_titipan_uang_emas()
	{
		$data['title'] = "Usaha Titipan Uang Emas";

		$this->load->view('dashboard_anggota_tij/usaha_titipan_uang_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function usaha_pinjam_emas()
	{
		$data['title'] = "Usaha Pinjam Emas";

		$this->load->view('dashboard_anggota_tij/usaha_pinjam_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function laporan_keuangan_tabarru()
	{
		$data['title'] = "Laporan Keuangan Koperasi Tabarru";

		$this->load->view('dashboard_anggota_tij/laporan_keuangan_tabarru', $data);
		$this->load->view('templates_dashboard_web/footer');
	}


	//Profil
	public function profil()
	{
		$data['title'] = "Profil Anggota";

		$data['data_anggotabq'] = $this->db->get_where('data_anggotabq', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->view('dashboard_anggota_tij/profil', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
}