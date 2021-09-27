<?php

class kuttabModel extends CI_Model
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

	public function AllagendaK()
	{
		return $this->db->get('agenda_kuttab');
	}

	public function AllinfoK()
	{
		return $this->db->get('informasi_kuttab');
	}

	//Pelatihan
	public function AllagendaP()
	{
		return $this->db->get('agenda_pelatihan');
	}

	public function AllinfoP()
	{
		return $this->db->get('informasi_pelatihan');
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

	public function hapus_agendaK($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function hapus_infoK($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Pelatihan
	public function hapus_agendaP($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function hapus_infoP($where, $table)
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