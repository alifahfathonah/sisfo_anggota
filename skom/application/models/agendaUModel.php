<?php

class agendaUModel extends CI_Model
{
    public function allData()
    {
        return $this->db->get('agendaumum_K');
    }

    //Tabel Daftar - Menurut Pembuat Agenda Umum//
    public function allData_menurutKetua()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Ketua Dewan Pimpinan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutSekretaris()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Sekretaris Dewan Pimpinan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBendahara()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Bendahara Dewan Pimpinan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBPendidikan()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Staf Bidang Pendidikan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBPelatihan()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Staf Bidang Pelatihan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBKeanggotaan()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Staf Bidang Keanggotaan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBRiset()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Staf Bidang Riset & Pengembangan');
        $query = $this->db->get();
        return $query->result();
    }
    //Dewan Ulama
    public function allData_menurutKetuaDU()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Ketua Dewan Ulama');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutSekretarisDU()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Sekretaris Dewan Ulama');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBendaharaDU()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Bendahara Dewan Ulama');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutAnggotaDU()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Anggota Dewan Ulama');
        $query = $this->db->get();
        return $query->result();
    }
    //Dewan Cendekiawan
    public function allData_menurutKetuaCE()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Ketua Dewan Cendekiawan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutSekretarisCE()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Sekretaris Dewan Cendekiawan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutBendaharaCE()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Bendahara Dewan Cendekiawan');
        $query = $this->db->get();
        return $query->result();
    }
    public function allData_menurutAnggotaCE()
    {
        $this->db->select('*');
        $this->db->from('agendaumum_K');
        $this->db->where('pembuat_agenda', 'Anggota Dewan Cendekiawan');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapusAgendaU($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function countAllAgenda()
    {
        return $this->db->get('agendaumum_K')->num_rows();
    }

    public function getAgenda($limit, $start)
    {
        return $this->db->get('agendaumum_K', $limit, $start);
    }

    //Tabel Akses - Khusus Role Dari Admin//
    public function allData_List()
    {
        $this->db->select('*');
        $this->db->from('role');
        $this->db->where('list', '3');
        $query = $this->db->get();
        return $query->result();
    }

    //Edit Data
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