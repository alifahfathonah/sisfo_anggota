<?php 

	class loginModel extends CI_Model{

		public function get_data($table)
	{
		return $this->db->get($table);
	}

		public function cek_login()
	{
		$nik   	= set_value('nik');
		$sandi 	= set_value('sandi');

		$result	= $this->db->where('nik',$nik)
						   ->where('sandi',md5($sandi))
						   ->limit(1)
						   ->get('data_anggotabm');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}

 ?>