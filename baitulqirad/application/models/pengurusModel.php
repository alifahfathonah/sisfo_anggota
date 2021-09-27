<?php 

    class pengurusModel extends CI_Model{

	    public function get_data($table)
	{
		return $this->db->get($table);
	}

	    public function insertData($data,$table)
	{
		return $this->db->insert($table,$data);
	}

	    public function updateData($where,$data,$table)
	{
		return $this->db->update($table, $data, $where);
	}

		public function deleteData($where,$table)
	{
		return $this->db->delete($table, $where);
	}

	    function gettahun()
	{

		$query = $this->db->query("SELECT YEAR(tgl) AS tahun FROM jurnalbq GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC");

		return $query->result();
	}

	  function filterbytanggal($tanggalawal,$tanggalakhir)

	{
		$query = $this->db->query("SELECT *FROM jurnalbq 
									WHERE tgl BETWEEN '$tanggalawal' AND '$tanggalakhir'
									ORDER BY tgl ASC");

		return $query->result();
	}

	  function filterbybulan($tahun1,$bulanawal,$bulanakhir)

	{
		$query = $this->db->query("SELECT *FROM jurnalbq 
									WHERE YEAR(tgl) = '$tahun1' AND month(tgl) BETWEEN 
									'$bulanawal' AND '$bulanakhir'
									ORDER BY tgl ASC");

		return $query->result();
	}

	function filterbytahun($tahun2)

	{
		$query = $this->db->query("SELECT *FROM jurnalbq 
									WHERE YEAR(tgl) = '$tahun2'
									ORDER BY tgl ASC");

		return $query->result();
	}

	  function filterbybulan1($tahun1,$bulanawal,$bulanakhir)

	{
		$query = $this->db->query("SELECT *FROM simpananbq 
									WHERE YEAR(tgl_simpan) = '$tahun1' AND month(tgl_simpan) BETWEEN 
									'$bulanawal' AND '$bulanakhir'
									ORDER BY tgl_simpan ASC");

		return $query->result();
	}	

}

 ?>