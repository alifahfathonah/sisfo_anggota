<?php

class Data_user_m extends CI_Model
{

    public function get_data($table)
    {

        return $this->db->get($table);
    }

    public function get_data_id($table,$where)
    {

        return $this->db->get_where($table,$where);
    }

    public function insert_data($data, $table)
    {

        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {

        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {

        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_login()
    {
        $nik             = set_value('nik');
        $password        = set_value('password');

        $result          = $this->db->where('nik', $nik)
            ->where('password', ($password))
            ->limit(1)
            ->get('user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function cek_login_tijarah()
    {
        $nik             = set_value('nik');
        $sandi        = set_value('sandi');

        $result          = $this->db->where('nik', $nik)
            ->where('sandi', md5($sandi))
            ->limit(1)
            ->get('data_anggotabq');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function cek_login_tabarru()
    {
        $nik             = set_value('nik');
        $sandi        = set_value('sandi');

        $result          = $this->db->where('nik', $nik)
            ->where('sandi', md5($sandi))
            ->limit(1)
            ->get('data_anggotabm');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function data_anggotabq()
    {
        $this->db->select('*');
        $this->db->from('data_anggotabq');
        $query = $this->db->get();
        return $query;
    }
    public function simpananbq()
    {
        $this->db->select('*');
        $this->db->from('simpananbq');
        $this->db->join('data_anggotabq', 'data_anggotabq.id_anggota = simpananbq.id_anggota');
        $query = $this->db->get();
        return $query;
    }
    function data_join2table()
    {
        $this->db->select('*');
        $this->db->from('simpananbq');
        $this->db->join('data_anggotabq', 'data_anggotabq.id_anggota = simpananbq.id_anggota');
        $query = $this->db->get();
        return $query;
    }

    public function getData()
    {
        return $this->db->table('data_bendaharabq')
            ->join('data_piutangbq', 'data_piutangbq.Id_anggota=data_bendaharabq.Id_anggota')
            ->join('pembiayaanbq', 'pembiayaanbq.Id_anggota=data_bendaharabq.Id_anggota')
            ->join('simpananbq', 'simpananbq.Id_anggota=data_bendaharabq.Id_anggota')->get()->getResultArray();
    }
}
