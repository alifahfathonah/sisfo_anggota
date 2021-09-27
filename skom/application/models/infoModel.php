<?php

class infoModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
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

	public function insertData($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function AllinfoRiset()
	{
		return $this->db->get('info_riset');
	}
	public function AllinfoPKTijarah()
	{
		return $this->db->get('info_pktijarah');
	}
	public function AllinfoPKTabarru()
	{
		return $this->db->get('info_pktabarru');
	}
	public function AllinfoPKomunitas()
	{
		return $this->db->get('info_pkomunitas');
	}

	public function data($table, $id)
	{
		$query = $this->db->get_where($table, $id);
		return $query->result_array();
	}

	// EDit //
	public function allDataEdit($table)
	{
		$query = $this->db->get($table);
		return $query->result_array();
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


	public function hapus_info($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
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