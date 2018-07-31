<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'CV. TIGA PUTRA PETIR',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PEMBBELIAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'SEMEN                     : ');
$pdf->Cell(120,6,'20 SAK');
$pdf->Cell(27,6,'RP.1.000.000,-');

$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'SENG                        : ');
$pdf->Cell(120,6,'500 LEMBAR');
$pdf->Cell(27,6,'RP.10.000.000,-');

$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'CAT                           : ');
$pdf->Cell(120,6,'100 KALENG');
$pdf->Cell(27,6,'RP.20.000.000,-');

$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'BIAYA TUKANG       : ');
$pdf->Cell(120,6,'');
$pdf->Cell(27,6,'RP.65.000.000,-');

$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'BONUS TUKANG     : ');
$pdf->Cell(120,6,'');
$pdf->Cell(27,6,'RP.4.000.000,-');


$pdf->Cell(10,5,'',0,1);
$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'HARGA TOTAL ');
$pdf->Cell(120,6,'');
$pdf->Cell(27,6,'RP.100.000.000,-');
$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);

$img="foto/logo.png";
$pdf->Image($img,73,null,60,15);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,6,'');

$pdf->Cell(100,6,'PEKANBARU 31/07/2018');

$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,5,'',0,1);$pdf->Cell(10,6,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(151,6,'');

$pdf->Cell(100,6,'CV.TIGA PUTRA PETIR');

$pdf->SetFont('Arial','',10);

$pdf->Output();

?>