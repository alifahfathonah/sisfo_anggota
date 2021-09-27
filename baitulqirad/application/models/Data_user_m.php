<?php

class Data_user_m extends CI_Model
{

    public function get_data($table)
    {

        return $this->db->get($table);
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
            ->where('password', md5($password))
            ->limit(1)
            ->get('data_user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    //Komunitas
    public function cek_loginSAdmin()
    {
        $nik             = set_value('nik');
        $password        = set_value('password');

        $result          = $this->db->where('nik', $nik)
            ->where('password', md5($password))
            ->limit(1)
            ->get('user_superadmin');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
