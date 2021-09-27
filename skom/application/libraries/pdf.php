<?php defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf extends Dompdf
{

	public $filename;
	public function __construct()
	{
		parent::__construct();
		$this->filename = "laporan.pdf";
	}

	protected function ci()
	{
		return get_instance();
	}
	public function load_view($view, $data = array())
	{
		$html = $this->ci()->load->view($view, $data, TRUE);
		$this->load_html($html);
		// Render the PDF
		$this->render();
		// Output the generated PDF to Browser
		$this->stream($this->filename, array("Attachment" => false));
		exit(0);
	}
}

// public function generate($view, $data = array(), $filename = 'Cetak', $paper = 'A4', $orientation = 'portrait')
// {
// 	$html = $this->ci()->load->view($view, $data, true);
// 	$dompdf = new Dompdf();
// 	$dompdf->loadhtml($html);
// 	$dompdf->set_option('isHtml5ParserEnabled', true);
// 	$dompdf->setPaper($paper, $orientation);
// 	$dompdf->render();
// 	ob_clean();
// 	$dompdf->stream($filename . ".pdf", array("Attachment" => False));
// }
