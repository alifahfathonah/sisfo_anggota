<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Komunikasi extends CI_Controller {
	
	public function __construct() {
        parent::__construct();

        if($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
			</button>
            </div>');
            redirect('login');
        }
    }

	public function index()
	{
		$data1['title'] = "Komunikasi";
		$data = array(
			'chat' => $this->db->order_by('id_chat','DESC')->get('chat')->result()
		);

		$this->load->view('templates_admin/header', $data1);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/komunikasi',$data);
		$this->load->view('templates_admin/footer');
	}

	public function store(){
		$data = array(
			'name' => $this->input->post('name'),
			'message' => $this->input->post('message'),
		);

		$options = array(
			'cluster' =>'ap1',
			'encrypted' => true
		);

		$pusher = new Pusher\Pusher(
			"264a313e8b013a8cfd5f",
			"b22cec4f05cc0bbfe77d",
			"1209218",
			$options
		);

		
		if($this->db->insert('chat', $data)){
			
		$push = $this->db->order_by('id_chat','DESC');
		$push = $this->db->get('chat')->result();


		foreach($push as $key) {
			$data_pusher[] = $key;
		}
			$pusher->trigger('my-channel','my-event', $data_pusher);
		}
	}
}
