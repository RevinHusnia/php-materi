<?php
   require_once($_SERVER['DOCUMENT_ROOT'] . "/fpdf/fpdf.php");
   
   // Buat PDF
   $pdf = new FPDF();
   
   $pdf->AddPage();
   $pdf->SetFont("Arial", "B", 28); // Tebal
   $pdf->settextcolor(255, 255, 255); // Putih
   
   $judul = "Faktanya Begitu";
   $pdf->MultiCell(100, 12, $judul, 1, "C", true);
   
   $pdf->SetFont("Times", "", 12);
   $pdf->settextcolor(0, 0, 0); // Hitam
                        
   $teks = "Semua hal itu sebenarnya mudah, lho! " .
          "Yang membuat sulit itu ya pikiran kita sendiri. " .
          "Coba saja mempraktikkan Skrip ini. " .
          "Ternyata membuat dokumen PDF itu mudah, kan? " .
	      "Buktinya sudah dirasakan.";
	   
   $pdf->SetXY(50, 30);
   $pdf->MultiCell(100, 10, $teks, 0, "J");
   
   $pdf->Output();	        
?>
