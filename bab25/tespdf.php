<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/fpdf/fpdf.php");
   
  // Buat PDF
  $pdf = new FPDF();
   
  $pdf->AddPage();
  $pdf->SetFont("Arial", "", 12);
   
  $teks = "Semua hal itu sebenarnya mudah, lho! " .
          "Yang membuat sulit itu ya pikiran kita sendiri. " .
          "Coba saja mempraktikkan Skrip ini. " .
          "Ternyata membuat dokumen PDF itu mudah, kan? " .
	      "Buktinya sudah dirasakan.";
	   
  $pdf->SetX(80);
  $pdf->MultiCell(0, 5, $teks, 1, "R");
   
  $pdf->Output();	        
?>
   