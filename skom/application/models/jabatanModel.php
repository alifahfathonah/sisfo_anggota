<?php

class jabatanModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	//menampilkan data list anggota
	public function get_list_posisiAgt()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '3');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_posisiAgt4()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '4');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_posisiAgt5()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '5');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_list_posisiAgt6()
	{
		$this->db->select('*');
		$this->db->from('data_jabatan');
		$this->db->where('kode_list', '0');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_jabatan_userAgt()
	{
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where('list', '3');
		$query = $this->db->get();
		return $query->result();
	}

	public function allData()
	{
		return $this->db->get('data_jabatan');
	}

	public function insertData($data, $table)
	{
		return $this->db->insert($table, $data);
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
}