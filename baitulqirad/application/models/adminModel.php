<?php 

class adminModel extends CI_Model{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function ambil_id_anggota($id)
	{
		$hasil = $this->db->where('id_anggota',$id)->get('data_anggotabq');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}

	public function insertData($data,$table)
	{
		return $this->db->insert($table,$data);
	}

	public function updateData($where,$data,$table)
	{
		return $this->db->update($table, $data, $where);
	}

		public function cek_login()
	{
		$nik   	= set_value('nik');
		$sandi 	= set_value('sandi');

		$result	= $this->db->where('nik',$nik)
						   ->where('sandi',md5($sandi))
						   ->limit(1)
						   ->get('user_admin');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}

 ?>