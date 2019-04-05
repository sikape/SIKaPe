<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
function generate_pdf($object, $filename,$direct_download=TRUE){
	

	$dompdf = new DOMPDF();
	$dompdf->load_html($object);
	$dompdf->render();

	if($direct_download==TRUE){
		$dompdf->stream($filename);
	}
	else{
		return $dompdf->output();
	}
}