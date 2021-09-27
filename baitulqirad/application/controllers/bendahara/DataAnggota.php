<?php 

class dataAnggota extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') !='3'){
		   $this->session->set_flashdata('pesan','<div class="alert alert-danger 
		    	alert-dismissible fade show" role="alert"> 
						Anda belum login! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
				redirect('welcome');

		}
	}


		public function index()
	{
		$data['title'] 	 = "Data Anggota";
		$data['anggota'] = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/dataAnggota', $data);
		$this->load->view('temp_bendahara/footer');
	}

	// Tambah Data
	public function tambahData()
	{
		$data['title'] 	   = "Tambah Data Anggota";
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/tambahDataAnggota', $data);
		$this->load->view('temp_bendahara/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{
			$nik 			= $this->input->post('nik');
			$nama           = $this->input->post('nama');
			$tempat_lahir 	= $this->input->post('tempat_lahir');
			$tgl_lahir 		= $this->input->post('tgl_lahir');
			$jenis_kelamin 	= $this->input->post('jenis_kelamin');
			$status_kawin 	= $this->input->post('status_kawin');
			$alamat 		= $this->input->post('alamat');
			$no_hp 			= $this->input->post('no_hp');
			$email 			= $this->input->post('email');
			$jabatan 	    = $this->input->post('jabatan');
			$hak_akses 	    = $this->input->post('hak_akses');
			$saldo_uang 	= $this->input->post('saldo_uang');
			$saldo_emas 	= $this->input->post('saldo_emas');

			$data = array(
			'nik'      		  => $nik,
			'nama'            => $nama,
			'tempat_lahir'    => $tempat_lahir,
			'tgl_lahir'       => $tgl_lahir,
			'jenis_kelamin'   => $jenis_kelamin,
			'status_kawin' 	  => $status_kawin,
			'alamat'      	  => $alamat,
			'no_hp' 	      => $no_hp,
			'email' 	  	  => $email,
			'jabatan'         => $jabatan,
			'hak_akses'       => $hak_akses,
			'saldo_uang'      => $saldo_uang,
			'saldo_emas'      => $saldo_emas,
			);

			$this->adminModel->insertData($data,'data_bendahara');
		    $this->session->set_flashdata('pesan','<div class="alert alert-success 
		    	alert-dismissible fade show" role="alert"> 
						Data Anggota Berhasil Ditambahkan! <button type="button" class="close"
						data-dismiss="alert" aria-label="close"
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
		    redirect('bendahara/dataAnggota');
	}

 }

    public function _rules()
	{	
		$this->form_validation->set_rules('nik','NIK','required|is_unique[data_bendahara.nik]',['required' => 'NIK Wajib Diisi!']);
		$this->form_validation->set_rules('nama','Nama Anggota','required',['required' => 'Nama Anggota Wajib Diisi!']);
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required',['required' => 'Tempat Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required',['required' => 'Tanggal Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',['required' => 'Jenis Kelamin Wajib Diisi!']);
		$this->form_validation->set_rules('status_kawin','Status Kawin','required',['required' => 'Status Kawin Wajib Diisi!']);
		$this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Alamat Wajib Diisi!']);
		$this->form_validation->set_rules('no_hp','Nomor HP','required',['required' => 'Nomor HP Wajib Diisi!']);
		$this->form_validation->set_rules('email','Email','required',['required' => 'Email Wajib Diisi!']);
		$this->form_validation->set_rules('jabatan','Jabatan','required',['required' => 'Jabatan Wajib Diisi!']);
		$this->form_validation->set_rules('hak_akses','Hak Akses','required',['required' => 'Hak Akses Wajib Diisi!']);
        $this->form_validation->set_rules('saldo_uang','Saldo Uang','required',['required' => 'Saldo Uang Wajib Diisi!']);
		$this->form_validation->set_rules('saldo_emas','Saldo Emas','required',['required' => 'Saldo Emas Wajib Diisi!']);
		
	}
// 	public function updateData($id)
// 	{
// 		$data['title'] = "Update Data Anggota";
// 		$where = array('id_anggota' => $id);
// 		$data['anggota'] = $this->db->query("SELECT * FROM data_anggotabq 
// 			WHERE id_anggota='$id'")->result();
// 		$this->load->view('temp_admin/header',$data);
// 		$this->load->view('temp_admin/sidebar');
// 		$this->load->view('admin/updateDataAnggota',$data);
// 		$this->load->view('temp_admin/footer');
// }
// 	public function updateDataAksi()
// 	{
// 		$this->_rule();
// 		if($this->form_validation->run() == FALSE){
// 			$this->updateData();
// 		}else{

// 		$id 		  = $this->input->post('id_anggota');
// 		$status       = $this->input->post('status');

// 		$data = array(
// 			'status'      => $status,
// 			);

// 		$where = array(
// 				'id_anggota' => $id
// 			);

// 		$this->adminModel->updateData($where, $data, 'data_anggotabq');
// 		$this->session->set_flashdata('pesan','<div class="alert alert-success 
// 						alert-dismissible fade show" role="alert"> 
// 						Status Berhasil Diedit! <button type="button" class="close"
// 						data-dismiss="alert" aria-label="close"
// 						<span aria-hidden="true">&times;</span>
// 						</button>
// 						</div>');
// 		redirect('admin/dataAnggota');
// 		}		

// 	}

//  	public function _rule()
// 	{
// 		$this->form_validation->set_rules('status','Status','required',['required' => 'Status Wajib Diisi!']);
// 	}

// 	public function detail($id)
// 	{
// 		$data['title'] 	    = "Detail Data Anggota";
// 		$data['detail'] = $this->adminModel->ambil_id_anggota($id);
// 		$this->load->view('temp_admin/header');
// 		$this->load->view('temp_admin/sidebar');
// 		$this->load->view('admin/anggotaDetail', $data);
// 		$this->load->view('temp_admin/footer');
// 	}

	public function print()
	{
		$data['anggota'] = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('bendahara/anggotaPrint',$data);
	}

// 		public function pdf()
// 	{
// 		$this->load->library('dompdf_gen');

// 		$data['anggota'] = $this->adminModel->get_data('data_anggotabq')->result();
// 		$this->load->view('admin/anggotaPDF',$data);

// 		$paper_size = 'A4';
// 		$orientation = 'landscape';
// 		$html = $this->output->get_output();
// 		$this->dompdf->set_paper($paper_size, $orientation);

// 		$this->dompdf->load_html($html);
// 		$this->dompdf->render();
// 		$this->dompdf->stream("laporan_dagota.pdf", array('Attachment' =>0));
// 	}

// 	public function excel()
// {

// 	$data['anggota'] = $this->adminModel->get_data('data_anggotabq')->result();

// 	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
// 	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

// 	$object = new PHPExcel();

// 	$object->getProperties()->setCreator("Sistem Muamalah");
// 	$object->getProperties()->setLastModifiedBy("Sistem Muamalah");
// 	$object->getProperties()->setTitle("Daftar Anggota");

// 	$object->setActiveSheetIndex(0);

// 	$object->getActiveSheet()->setCellValue('A1','No');
// 	$object->getActiveSheet()->setCellValue('B1','ID Anggota');
// 	$object->getActiveSheet()->setCellValue('C1','Nama Anggota');
// 	$object->getActiveSheet()->setCellValue('D1','Saldo Titipan Uang');
// 	$object->getActiveSheet()->setCellValue('F1','Nama Admin Pendaftar');
// 	$object->getActiveSheet()->setCellValue('G1','Status');
// 	$object->getActiveSheet()->setCellValue('I1','Nama Admin Pengubah');

// 	$baris = 2;
// 	$no = 1;

// 	foreach ($data['anggota'] as $dftr) {
// 		$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
// 		$object->getActiveSheet()->setCellValue('B'.$baris, $dftr->id_anggota);
// 		$object->getActiveSheet()->setCellValue('C'.$baris, $dftr->nama_anggota);
// 		$object->getActiveSheet()->setCellValue('D'.$baris, $dftr->saldo_uang);
// 		$object->getActiveSheet()->setCellValue('F'.$baris, $dftr->nama_admin);
// 		$object->getActiveSheet()->setCellValue('G'.$baris, $dftr->status);
// 		$object->getActiveSheet()->setCellValue('I'.$baris, $dftr->nama_admin);
// 		$baris++;
// }

// 	$filename="Daftar_Anggota".'.xlsx';
// 	$object->getActiveSheet()->setTitle("Daftar Anggota");

// 	header('Content-Type: application/vnd.openxmlformats-officedoucument.spreadsheetml.sheet');
// 	header('Content-Disposition: attachment;filename="'.$filename.'"');
// 	header('Cache-Control: max-age=0');

// 	$Writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
// 	$Writer->save('php://output');

// 	exit;
// }

		public function saldoUang()
	{
		$data['title'] 	   = "Informasi Saldo Uang";
		$data['anggota'] = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/anggotaSaldoUang', $data);
		$this->load->view('temp_admin/footer');
	}
		public function saldoEmas()
	{
		$data['title'] 	   = "Informasi Saldo Emas";
		$data['anggota'] = $this->pengurusModel->get_data('data_bendahara')->result();
		$this->load->view('temp_bendahara/header', $data);
		$this->load->view('temp_bendahara/sidebar');
		$this->load->view('bendahara/anggotaSaldoEmas', $data);
		$this->load->view('temp_bendahara/footer');
	}
}