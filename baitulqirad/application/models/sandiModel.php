<?php 

class sandiModel extends CI_Model{

	public function updateData($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}


}

 ?>