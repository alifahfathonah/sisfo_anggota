<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function print()
    {
        $data['admin'] = $this->adminModel->allData('user')->result();
        $this->load->view('cetak/print_data', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['admin'] = $this->adminModel->allData('user')->result();
        $this->load->view('cetak/ex_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_admin.pdf", array('Attachment' => 0));
    }

    public function excel()
    {
        $data['admin'] = $this->adminModel->allData('user')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Komunitas-Baitul Ummah");
        $object->getProperties()->setLastModifiedBy("Komunitas-Baitul Ummah");
        $object->getProperties()->setTitle("Daftar Admin Komunitas");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Lengkap');
        $object->getActiveSheet()->setCellValue('C1', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('D1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('E1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('F1', 'Alamat');
        $object->getActiveSheet()->setCellValue('G1', 'No HP');
        $object->getActiveSheet()->setCellValue('H1', 'Status');
        $object->getActiveSheet()->setCellValue('I1', 'ID Super Admin');
        $object->getActiveSheet()->setCellValue('J1', 'Jabatan');
        $object->getActiveSheet()->setCellValue('K1', 'Saldo Titipan Uang');
        $object->getActiveSheet()->setCellValue('L1', 'Saldo Titipan Emas');

        $baris = 2;
        $no = 1;

        foreach ($data['admin'] as $ad) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $ad->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $ad->tempat_lahir);
            $object->getActiveSheet()->setCellValue('D' . $baris, $ad->tgl_lahir);
            $object->getActiveSheet()->setCellValue('E' . $baris, $ad->jk);
            $object->getActiveSheet()->setCellValue('F' . $baris, $ad->alamat);
            $object->getActiveSheet()->setCellValue('G' . $baris, $ad->no_hp);
            $object->getActiveSheet()->setCellValue('H' . $baris, $ad->status);
            $object->getActiveSheet()->setCellValue('I' . $baris, $ad->id_sa);
            $object->getActiveSheet()->setCellValue('J' . $baris, $ad->jabatan);
            $object->getActiveSheet()->setCellValue('K' . $baris, $ad->saldo_uang);
            $object->getActiveSheet()->setCellValue('L' . $baris, $ad->saldo_emas);

            $baris++;
        }

        $filename = "Data_Admin" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Admin");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function saldoUang()
    {
        $title['title'] = 'Informasi Saldo Titipan Uang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->adminModel->get_list_saldoAgt();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('cetak/saldo_uang', $data);
        $this->load->view('templates/footer');
    }

    public function saldoEmas()
    {
        $title['title'] = 'Informasi Saldo Titipan Emas';
        $id = $this->session->userdata('id_user');
        $data2['sadmin'] = $this->adminModel->allDataX()->result();
        $data['super'] = $this->db->query("SELECT * FROM user_sa WHERE id_sa='$id'")->result();
        $data['admin'] = $this->adminModel->allData()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar', $data2);
        $this->load->view('cetak/saldo_emas', $data);
        $this->load->view('templates/footer');
    }

    // Admin -> mengatur Anggota //
    public function print_Agt()
    {
        $data['anggota'] = $this->adminModel->get_list_saldoAgt();
        $this->load->view('admin/cetak/print_data', $data);
    }

    public function pdf_Agt()
    {
        $this->load->library('dompdf_gen');
        $data['admin'] = $this->adminModel->get_list_saldoAgt();
        $this->load->view('admin/cetak/ex_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_admin.pdf", array('Attachment' => 0));
    }

    public function excel_Agt()
    {
        $data['admin'] = $this->adminModel->get_list_saldoAgt();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Komunitas-Baitul Ummah");
        $object->getProperties()->setLastModifiedBy("Komunitas-Baitul Ummah");
        $object->getProperties()->setTitle("Daftar Admin Komunitas");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Lengkap');
        $object->getActiveSheet()->setCellValue('C1', 'Tempat Lahir');
        $object->getActiveSheet()->setCellValue('D1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('E1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('F1', 'Alamat');
        $object->getActiveSheet()->setCellValue('G1', 'No HP');
        $object->getActiveSheet()->setCellValue('H1', 'Status');
        $object->getActiveSheet()->setCellValue('I1', 'ID Admin');
        $object->getActiveSheet()->setCellValue('J1', 'Jabatan');
        $object->getActiveSheet()->setCellValue('K1', 'Saldo Titipan Uang');
        $object->getActiveSheet()->setCellValue('L1', 'Saldo Titipan Emas');

        $baris = 2;
        $no = 1;

        foreach ($data['admin'] as $ad) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $ad->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $ad->tempat_lahir);
            $object->getActiveSheet()->setCellValue('D' . $baris, $ad->tgl_lahir);
            $object->getActiveSheet()->setCellValue('E' . $baris, $ad->jk);
            $object->getActiveSheet()->setCellValue('F' . $baris, $ad->alamat);
            $object->getActiveSheet()->setCellValue('G' . $baris, $ad->no_hp);
            $object->getActiveSheet()->setCellValue('H' . $baris, $ad->status);
            $object->getActiveSheet()->setCellValue('I' . $baris, $ad->id_pendaftar);
            $object->getActiveSheet()->setCellValue('J' . $baris, $ad->jabatan);
            $object->getActiveSheet()->setCellValue('K' . $baris, $ad->saldo_uang);
            $object->getActiveSheet()->setCellValue('L' . $baris, $ad->saldo_emas);

            $baris++;
        }

        $filename = "Data_Admin" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Admin");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function saldoUang_Agt()
    {
        $title['title'] = 'Informasi Saldo Titipan Uang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->adminModel->get_list_saldoAgt();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/cetak/saldo_uang', $data);
        $this->load->view('templates/footer');
    }

    public function saldoEmas_Agt()
    {
        $title['title'] = 'Informasi Saldo Titipan Emas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->adminModel->get_list_saldoAgt();
        $this->load->view('templates/header', $title);
        $this->load->view('temp_Admin/sidebar');
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/cetak/saldo_emas', $data);
        $this->load->view('templates/footer');
    }
    //End.... Admin -> mengatur Anggota //
}