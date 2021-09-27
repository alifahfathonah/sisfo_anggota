<?php

class anggotaModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function ambil_id_anggota($id)
	{
		$hasil = $this->db->where('id_anggota', $id)->get('user_anggota');
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
		return $this->db->get('user_admin');
	}

	public function allDataAkses()
	{
		return $this->db->get('data_akses');
	}

	public function allDataX()
	{
		return $this->db->get('user_sa');
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