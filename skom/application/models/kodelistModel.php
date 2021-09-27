<?php

class kodelistModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function allData()
	{
		return $this->db->get('user');
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