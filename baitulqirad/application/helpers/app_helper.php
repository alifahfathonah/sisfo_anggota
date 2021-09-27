<?php
function getAkunNominal($no_reff,$thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet) as t_debet, SUM(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff`='".$no_reff."' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data;
}
function getAkunNominalDebet($no_reff,$thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet) as t_debet FROM `jurnalbq` WHERE `no_reff`='".$no_reff."' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data;
}
function getAkunNominalKredit($no_reff,$thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(kredit) as t_kredit FROM `jurnalbq` WHERE `no_reff`='".$no_reff."' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data;
}

//Laba Rugi
function getAkunNominalTotalPendapatan($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(kredit-debet) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '410' AND '416' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;

}
function getAkunNominalTotal($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet+kredit) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '410' AND '416' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;

}
function getAkunNominalTotal2($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet+kredit) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '417' AND '420' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;

}
function getAkunNominalTotal3($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet+kredit) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '421' AND '423' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;
}
function getAkunNominalTotal4($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet+kredit) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '510' AND '529' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;
}

function getAkunNominalTotal1($thn_bln){
	$ci =& get_instance();
	$data = $ci->db->query("SELECT SUM(debet+kredit) as total FROM `jurnalbq` WHERE `no_reff` BETWEEN '410' AND '529' AND tgl LIKE '%".$thn_bln."%'")->row();
	
	return $data->total;
}



function bln_indo($bln){
	switch ($bln) {
		case '01':
			$nama_bln = 'Januari';
			break;
		case '02':
			$nama_bln = 'Februari';
			break;
		case '03':
			$nama_bln = 'Maret';
			break;
		case '04':
			$nama_bln = 'April';
			break;
		case '05':
			$nama_bln = 'Mei';
			break;
		case '06':
			$nama_bln = 'Juni';
			break;
		case '07':
			$nama_bln = 'Juli';
			break;
		case '08':
			$nama_bln = 'Agustus';
			break;
		case '09':
			$nama_bln = 'September';
			break;
		case '10':
			$nama_bln = 'Oktober';
			break;
		case '11':
			$nama_bln = 'November';
			break;
		case '12':
			$nama_bln = 'Desember';
			break;
		
		default:
			$nama_bln = 'Tidak Ada';
			break;
	}
	return $nama_bln;
}