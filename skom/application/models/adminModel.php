<?php

class adminModel extends CI_Model
{

	public function get_datanav()
	{
		return $this->db->get('user_admin')->result_array();
	}

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function countAllAdmin()
	{
		return $this->db->get('user_admin')->num_rows();
	}


	public function getAdmin($limit, $start)
	{
		return $this->db->get('user_admin', $limit, $start);
	}

	public function ambil_id_user($id)
	{
		$hasil = $this->db->where('id_user', $id)->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_user_agt($id)
	{
		$hasil = $this->db->where('id_user', $id)->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_anggota($id)
	{
		$hasil = $this->db->where('id_user', $id)->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function ambil_id_admin($id)
	{
		$hasil = $this->db->where('id_anggota', $id)->get('user_admin');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function insertData($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function allData()
	{
		return $this->db->get('user');
	}
	public function allData_Anggota()
	{
		return $this->db->get('user');
	}

	// EDit //
	public function allDataEdit($table)
	{
		$query = $this->db->get($table);
		return $query->result_array();
	}

	//Tabel Akses //
	public function allDataAkses()
	{
		return $this->db->get('data_akses');
	}

	public function get_Alldata()
	{
		return $this->db->get('user');
	}

	//Tabel Jabatan //
	public function allDataJb()
	{
		return $this->db->get('data_jabatan');
	}
	//Tabel Laporan Anggaran //
	public function allDataDokumen()
	{
		return $this->db->get('file_dokumen');
	}

	//Tabel Dokumen Ketua //
	public function dokumenfilterKetua()
	{
		$this->db->select('*');
		$this->db->from('file_dokumen');
		$this->db->where('pengunggah', 'Ketua');
		$query = $this->db->get();
		return $query->result();
	}
	//dokumen
	public function countAllDokumen()
	{
		return $this->db->get('file_dokumen')->num_rows();
	}
	//RAB
	public function countAllRAB()
	{
		return $this->db->get('riwayat_anggaran')->num_rows();
	}

	public function countAllsaldoUang()
	{
		return $this->db->get('user')->num_rows();
	}
	public function countAllsaldoUang1()
	{
		return $this->db->get('user')->num_rows();
	}
	public function countAllsaldoEmas()
	{
		return $this->db->get('user')->num_rows();
	}
	public function countAllsaldoEmas1()
	{
		return $this->db->get('user')->num_rows();
	}

	//Keanggotaan
	public function countAllKeanggotaan()
	{
		return $this->db->get('user')->num_rows();
	}

	// Informasi
	public function countAllInfokom()
	{
		return $this->db->get('info_kom')->num_rows();
	}

	//dokumen
	public function getDokumen($limit, $start)
	{
		return $this->db->get('file_dokumen', $limit, $start);
	}

	//RAB
	public function getRAB($limit, $start)
	{
		return $this->db->get('riwayat_anggaran', $limit, $start);
	}

	//saldoU
	public function getsaldoU($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}
	//saldoE
	public function getsaldoE($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}
	//saldoU
	public function getsaldoU1($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}
	//saldoE
	public function getsaldoE1($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}

	//Keanggotaan
	public function getKeanggotaan($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}

	//Informasi
	public function getInfokom($limit, $start)
	{
		return $this->db->get('info_kom', $limit, $start);
	}

	//Tabel Dokumen Sekretaris //
	public function dokumenfilterSekretaris()
	{
		$this->db->select('*');
		$this->db->from('file_dokumen');
		$this->db->where('pengunggah', 'Sekretaris');
		$query = $this->db->get();
		return $query->result();
	}

	//Tabel Dokumen Bendahara //
	public function dokumenfilterBendahara()
	{
		$this->db->select('*');
		$this->db->from('file_dokumen');
		$this->db->where('pengunggah', 'Bendahara');
		$query = $this->db->get();
		return $query->result();
	}

	public function filterAgt()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('pendaftar', 'Staf Bidang Keanggotaan');
		$query = $this->db->get();
		return $query->result();
	}

	public function listAdmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('pendaftar', 'Super Admin');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_dketua($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function hapus_RAB($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Tabel Akses - Khusus Pengurus//
	public function allDataAkses_Agt()
	{
		$this->db->select('*');
		$this->db->from('data_akses');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}

	public function allData_posisiAdmin()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}

	//Tabel List //
	public function allAdmin()
	{
		return $this->db->get('user_admin');
	}
	//Tabel List //
	public function allsaldoAdmin()
	{
		return $this->db->get('user_admin');
	}

	//RAB //
	public function allDataRAB()
	{
		return $this->db->get('riwayat_anggaran');
	}

	public function cek_login()
	{
		$nik   	= set_value('nik');
		$sandi 	= set_value('sandi');

		$result	= $this->db->where('nik', $nik)
			->where('sandi', md5($sandi))
			->limit(1)
			->get('user_admin');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function get_role_userAdmin2()
	{
		return $this->db->get('user_admin');
	}

	public function get_role_userAdmin3()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '3');
		$query = $this->db->get();
		return $query->result();
	}

	//list akes agt//
	public function get_role_userAkses2()
	{
		$this->db->select('*');
		$this->db->from('data_akses');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan data AAA
	public function get_role_userAgtA()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('filter', '2');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_role_userAgtb()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '3');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_role_userAgtc()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '4');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_role_userAgtd()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '5');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_role_userAgt0()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '0');
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan data tertentu
	public function get_role_userAgtAdmin()
	{
		return $this->db->get('user_admin');
	}

	//menampilkan data saldo anggota
	public function get_list_saldoAgt()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '3');
		$query = $this->db->get();
		return $query->result();
	}
	//menampilkan data saldo anggota
	public function get_list_saldoAgtaa()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '4');
		$query = $this->db->get();
		return $query->result();
	}
	//menampilkan data saldo anggota
	public function get_list_saldoAgtab()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '5');
		$query = $this->db->get();
		return $query->result();
	}
	//menampilkan data saldo anggota
	public function get_list_saldoAgtac()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '0');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_list_saldoAdmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_saldoEmasAdmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}

	public function allDataX()
	{
		return $this->db->get('user');
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deleteData($table, $id)
	{
		$query = $this->db->delete($table, $id);
		return $query;
	}

	public function cek_login_ex()
	{
		$nik   	= set_value('nik');
		$password 	= set_value('password');

		$result	= $this->db->where('nik', $nik)
			->where('password', md5($password))
			->limit(1)
			->get('user');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}
}