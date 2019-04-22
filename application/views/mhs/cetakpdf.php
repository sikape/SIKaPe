<?php

//$nim = $_GET['nim'];
$data = "SELECT nama_lengkap, nim, prodi, no_hp, nama_instansi, alamat_instansi, waktu FROM daftar_kp ";


class Cetakpdf extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logoitera.jpeg';
        $this->Image($image_file, 15, 10, 30, '', 'JPEG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        $this->Ln(5);
        $this->SetFont('times','',12);

        $this->Cell(189,5,'KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI',0,1,'C');
        $this->SetFont('times','B',12);
        $this->Cell(189,3,'INSTITUT TEKNOLOGI SUMATERA',0,1,'C');
        $this->SetFont('times','',10);
        $this->Cell(189,3,'Jalan Terusan Ryacudu, Way Hui, Jati Agung, Lampung Selatan 35365',0,1,'C');
        $this->Cell(189,3,'Telepon (0721) 8030189, Email: pusat@itera.ac.id',0,1,'C');
        $this->Cell(189,3,'www.itera.ac.id',0,1,'C');
        
        $this->SetFont('times','','11');
        $this->Cell(189,3,'Nomor : ',0,3,'L');

        $this->Cell(189,3,'Lampiran : -',0,3,'L');
        $this->Cell(189,3,'Perihal : Permohonan Kerja Praktek',0,3,'L');
        
        $this->SetFont('times','','11');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        
    }
      
    
}
$pdf = new Cetakpdf('p','mm','A4');
// create new PDF document

// set document information


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();



$html='
<p>Yth. </p>
<p>di- </p>
<p>Dengan hormat,</p>
<p>Dalam rangka menyelesaikan mata kuliah Kerja Praktek, dengan ini kami mengajukan permohonan Kerja Praktek mahasiswa Institut Teknologi Sumatera atas nama Saudara : </p>
<ul>
<li>Nama Lengkap :
<li>Nim :
<li>Program Studi :
<li>Waktu Pelaksanaan :
<li>Kontak :
</ul>

<p>Mohon bantuan Bapak/Ibu kiranya berkenan menerima mahasiswa tersebut, untuk melaksanakan Kerja Praktek di Instansi yang Bapak/Ibu pimpin</p>
<p>Atas perhatian dan kerjasama yang baik, kami ucapkan terimakasih.</p>
';



// print a block of text using Write()
$pdf->writeHTMLCell(0, 0, '',70,$html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');
exit;
?>