<?php

class passModel extends CI_Model
{

	public function updateData($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}
}