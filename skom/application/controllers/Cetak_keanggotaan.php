<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_keanggotaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function print()
    {
        $data['semua'] = $this->adminModel->allData_Anggota('data_user_anggota')->result();
        $this->load->view('dewanPimpinan/box_bkeanggotaan/cetak/print_data', $data);
    }

    public function print_S()
    {
        $data['semua'] = $this->adminModel->allData('user')->result();
        $this->load->view('dewanPimpinan/box_bkeanggotaan/cetak/print_data_S', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['anggota'] = $this->adminModel->allData('user')->result();
        $this->load->view('dewanPimpinan/box_bkeanggotaan/cetak/ex_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_anggota.pdf", array('Attachment' => 0));
    }

    public function excel()
    {
        $data['semua'] = $this->adminModel->allData_Anggota('data_user_anggota')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Komunitas-Baitul Ummah");
        $object->getProperties()->setLastModifiedBy("Komunitas-Baitul Ummah");
        $object->getProperties()->setTitle("Daftar Anggota Komunitas");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Lengkap');
        $object->getActiveSheet()->setCellValue('C1', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('D1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('E1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('F1', 'Alamat');
        $object->getActiveSheet()->setCellValue('G1', 'No HP');
        $object->getActiveSheet()->setCellValue('H1', 'Status');
        $object->getActiveSheet()->setCellValue('I1', 'Pendaftar');
        $object->getActiveSheet()->setCellValue('J1', 'Jabatan');
        $object->getActiveSheet()->setCellValue('K1', 'Saldo Titipan Uang');
        $object->getActiveSheet()->setCellValue('L1', 'Saldo Titipan Emas');

        $baris = 2;
        $no = 1;

        foreach ($data['anggota'] as $ad) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $ad->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $ad->tempat_lahir);
            $object->getActiveSheet()->setCellValue('D' . $baris, $ad->tanggal_lahir);
            $object->getActiveSheet()->setCellValue('E' . $baris, $ad->jk);
            $object->getActiveSheet()->setCellValue('F' . $baris, $ad->alamat);
            $object->getActiveSheet()->setCellValue('G' . $baris, $ad->no_hp);
            $object->getActiveSheet()->setCellValue('H' . $baris, $ad->status);
            $object->getActiveSheet()->setCellValue('I' . $baris, $ad->pendaftar);
            $object->getActiveSheet()->setCellValue('J' . $baris, $ad->jabatan);
            $object->getActiveSheet()->setCellValue('K' . $baris, $ad->saldo_uang);
            $object->getActiveSheet()->setCellValue('L' . $baris, $ad->saldo_emas);

            $baris++;
        }

        $filename = "Data_Anggota" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Anggota");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function saldoUang()
    {
        $this->load->model('adminModel');
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/Cetak_keanggotaan/saldoUang';
        $config['total_rows'] = $this->adminModel->countAllsaldoUang1();
        $config['per_page'] = 5;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['saldoU'] = $this->adminModel->getsaldoU1($config['per_page'], $data['start'])->result();

        $title['title'] = 'Informasi Saldo Titipan Uang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->adminModel->get_list_saldoAgtac();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/cetak/saldo_uang', $data);
        $this->load->view('templates/footer');
    }

    public function saldoEmas()
    {
        $this->load->model('adminModel');
        //PAGINATION	
        $this->load->library('pagination');

        //config
        $config['base_url'] = 'http://localhost/sisfo_anggota/skom/Cetak_keanggotaan/saldoEmas';
        $config['total_rows'] = $this->adminModel->countAllsaldoEmas1();
        $config['per_page'] = 5;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['saldoE'] = $this->adminModel->getsaldoE1($config['per_page'], $data['start'])->result();

        $title['title'] = 'Informasi Saldo Titipan Emas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->adminModel->get_list_saldoAgtac();
        $this->load->view('templates/header', $title);
        $this->load->view('dewanPimpinan/temp_StafBKeanggotaanDP/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('dewanPimpinan/box_bkeanggotaan/cetak/saldo_emas', $data);
        $this->load->view('templates/footer');
    }
}