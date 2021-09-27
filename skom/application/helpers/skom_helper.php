<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nik')) {
        redirect('Auth');
    } else {
        $hak_akses       = $ci->session->userdata('hak_akses');
        $controller = $ci->uri->segment(1);
        if (($hak_akses != '1') && ($controller == "DewanPimpinan_Ketua")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '2') && ($controller == "DewanPimpinan_Sekretaris")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '3') && ($controller == "DewanPimpinan_Bendahara")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '4') && ($controller == "DewanPimpinan_StafBPendidikan")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '5') && ($controller == "DewanPimpinan_StafBPelatihan")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '6') && ($controller == "DewanPimpinan_StafBKeanggotaan")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '7') && ($controller == "DewanPimpinan_StafBRiset_Pengembangan")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '8') && ($controller == "DewanUlama_Ketua")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '9') && ($controller == "DewanUlama_Sekretaris")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '10') && ($controller == "DewanUlama_Bendahara")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '11') && ($controller == "DewanUlama_Anggota")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '12') && ($controller == "DewanCendekiawan_Ketua")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '13') && ($controller == "DewanCendekiawan_Sekretaris")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '14') && ($controller == "DewanCendekiawan_Bendahara")) {
            redirect('Auth/blocked');
        } else if (($hak_akses != '15') && ($controller == "DewanCendekiawan_Anggota")) {
            redirect('Auth/blocked');
        }
    }
}

function is_logged_inAdmin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nik')) {
        redirect('Auth/indexAdmin');
    } else {
        $hak_akses    = $ci->session->userdata('hak_akses');
        $controller = $ci->uri->segment(1);
        if (($hak_akses != '1') && ($controller == "Admin")) {
            redirect('Auth/blocked');
        }
    }
}

function is_logged_inMAX()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nik')) {
        redirect('Auth');
    } else {
        $hak_akses       = $ci->session->userdata('hak_akses');
        $controller = $ci->uri->segment(2);
        if (($hak_akses != 1) && ($controller == "Super_Admin")) {
            redirect('Auth/blocked');
        }
    }
}