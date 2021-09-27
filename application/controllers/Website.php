<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{

	public function index()
	{
		$this->session->sess_destroy();

		$data['title'] = "Selamat Datang";
		$data['info_kom'] = $this->Data_user_m->get_data('info_kom')
			->result();
		$data['info_tij'] = $this->Data_user_m->get_data('info_tij')
			->result();
		$data['info_tab'] = $this->Data_user_m->get_data('info_tab')
			->result();


		$data['konten_pinjamanemas'] = $this->Data_user_m->get_data('konten_pinjamanemas')
			->result();

		// Terhubung ke tabel anggota komunitas koperasi //
		$data['user'] = $this->Data_user_m->get_data('user')
			->result();
		// Terhubung ke tabel anggota koperasi tijarah //
		$data['data_anggotabq'] = $this->Data_user_m->get_data('data_anggotabq')
			->result();
		// Terhubung ke tabel anggota koperasi tabarru //
		$data['data_anggotabm'] = $this->Data_user_m->get_data('data_anggotabm')
			->result();

		$this->load->view('dashboard_web/index', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function pinjamanemas()
	{
		$data['title'] = "Pinjaman Emas";
		$data['konten_pinjamanemas'] = $this->Data_user_m->get_data('konten_pinjamanemas')
			->result();

		$this->load->view('templates_website/header');
		$this->load->view('website/pinjaman_emas', $data);
		$this->load->view('templates_website/footer_content');
	}

	public function informasi()
	{
		$data['title'] = "Pinjaman Emas";
		$data['konten_pinjamanemas'] = $this->Data_user_m->get_data('konten_pinjamanemas')
			->result();

		$this->load->view('templates_website/header');
		$this->load->view('website/pinjaman_emas', $data);
		$this->load->view('templates_website/footer_content');
	}

	// Tentang Kami
	public function kata_pengantar()
	{
		$data['title'] = "Kata Pengantar";

		$this->load->view('dashboard_web/kata_pengantar', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function latar_belakang()
	{
		$data['title'] = "Latar Belakang";

		$this->load->view('dashboard_web/latar_belakang', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function visi_misi()
	{
		$data['title'] = "Visi Misi";

		$this->load->view('dashboard_web/visi_misi', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
    
	public function struktur_organisasi()
	{
		$data['title'] = "Struktur Organisasi";

		$this->load->view('dashboard_web/struktur_organisasi', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
    
	public function anggaran_r_tangga()
	{
		$data['title'] = "Anggaran Rumah Tangga";

		$this->load->view('dashboard_web/anggaran_r_tangga', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	
	// Layanan
	public function simpanan()
	{
		$data['title'] = "Simpanan";

		$this->load->view('dashboard_web/simpanan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function pembiayaan()
	{
		$data['title'] = "Pembiayaan";

		$this->load->view('dashboard_web/pembiayaan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function toko_emas()
	{
		$data['title'] = "Toko Emas";

		$this->load->view('dashboard_web/toko_emas', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function pelayanan_pinjaman()
	{
		$data['title'] = "Pelayanan Pinjaman";

		$this->load->view('dashboard_web/pelayanan_pinjaman', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	
	public function pelayanan_jaminan()
	{
		$data['title'] = "Pelayanan Jaminan";

		$this->load->view('dashboard_web/pelayanan_jaminan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	
	// Publikasi
	public function laporan_resmi()
	{
		$data['title'] = "Laporan Resmi";

		$this->load->view('dashboard_web/laporan_resmi', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	public function grafik_keuntungan()
	{
		$data['title'] = "Grafik Keuntungan";

		$this->load->view('dashboard_web/grafik_keuntungan', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	
	public function laporan_lainnya()
	{
		$data['title'] = "Laporan Lainnya";

		$this->load->view('dashboard_web/laporan_lainnya', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Kontak
	public function kontak()
	{
		$data['title'] = "Kontak";

		$this->load->view('dashboard_web/kontak', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	//Pendaftaran Anggota
	public function persyaratan_a_b()
	{
		$data['title'] = "Persyaratan Anggota Baru";

		$this->load->view('dashboard_web/persyaratan_a_b', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	
	public function cara_mendaftar_a_b()
	{
		$data['title'] = "Cara Mendaftar Anggota Baru";

		$this->load->view('dashboard_web/cara_mendaftar_a_b', $data);
		$this->load->view('templates_dashboard_web/footer');
	}
	public function pendaftaran_a_b()
	{
		$data['title'] = "Pendaftaran Anggota Baru";

		$this->load->view('dashboard_web/pendaftaran_a_b', $data);
		$this->load->view('templates_dashboard_web/footer');
	}

	// Berita/Informasi

	public function info_kom()
	{
		$data['title'] = "Berita Komunitas Koperasi";
		$data['info_kom'] = $this->Data_user_m->get_data('info_kom')
            ->result();

		$this->load->view('dashboard_web/info_kom', $data);
		// $this->load->view('templates_dashboard_web/footer');
		
	}

	public function info_tij()
	{
		$data['title'] = "Berita Koperasi Tijarah";
		$data['info_tij'] = $this->Data_user_m->get_data('info_tij')
            ->result();

		$this->load->view('dashboard_web/info_tij', $data);
		// $this->load->view('templates_dashboard_web/footer');
		
	}

	public function info_tab()
	{
		$data['title'] = "Berita Koperasi Tabarru";
		$data['info_tab'] = $this->Data_user_m->get_data('info_tab')
            ->result();

		$this->load->view('dashboard_web/info_tab', $data);
		// $this->load->view('templates_dashboard_web/footer');
		
	}

}
