<?php

class aksesModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function ambil_id_admin($id)
	{
		$hasil = $this->db->where('id_user', $id)->get('user');
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
	public function allAkses()
	{
		return $this->db->get('user_admin');
	}

	public function filterAgt()
	{
		$this->db->select('*');
		$this->db->from('data_akses');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}

	public function getAkses($limit, $start)
	{
		return $this->db->get('user', $limit, $start);
	}
	public function getAksesYY($limit, $start)
	{
		return $this->db->get('data_jabatan', $limit, $start);
	}

	public function hakakses_list()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}
	public function hakakses_listzz()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '3');
		$query = $this->db->get();
		return $query->result();
	}
	public function nmakses_list()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kode_list', '2');
		$query = $this->db->get();
		return $query->result();
	}
	public function nmakses_listaa()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('filter', '2');
		$query = $this->db->get();
		return $query->result();
	}

	public function countAllAkses()
	{
		return $this->db->get('user')->num_rows();
	}
	public function countAllAksesYY()
	{
		return $this->db->get('data_jabatan')->num_rows();
	}

	public function allDataAkses()
	{
		return $this->db->get('data_akses');
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

	// 	public function cek_login()
	// {
	// 	$nik   	= set_value('nik');
	// 	$sandi 	= set_value('sandi');

	// 	$result	= $this->db->where('nik',$nik)
	// 					   ->where('sandi',md5($sandi))
	// 					   ->limit(1)
	// 					   ->get('data_anggotabq');
	// 	if($result->num_rows()>0){
	// 		return $result->row();
	// 	}else{
	// 		return FALSE;
	// 	}
	// }
}