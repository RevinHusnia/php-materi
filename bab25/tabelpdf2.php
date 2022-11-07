<?php
   require_once($_SERVER['DOCUMENT_ROOT'] . "/fpdf/fpdf.php");
   
   function tampilkan_data($pdf)
   {
       for ($indeks = 1; $indeks <= 300; $indeks++)
       {
          if ($indeks % 35 == 1)
	      {
             $pdf->AddPage(); // Buat halaman baru
	     
	         // Buat judul
	         $pdf->SetFillColor(0, 0, 255);
	         $pdf->SetTextColor(255, 255, 255);
	         $pdf->SetFont("Arial", "B");
	  
	         $pdf->Cell(30, 7, "Kolom 1", 1, 0, "L", true);
	         $pdf->Cell(30, 7, "Kolom 2", 1, 0, "L", true);
	         $pdf->Cell(40, 7, "Kolom 3", 1, 0, "R", true);
	  
             $pdf->Ln(); // Pindah baris
 
             // Atur warna untuk non judul
             $pdf->SetFillColor(255, 255, 255);
             $pdf->SetTextColor(0, 0, 0);
     	       $pdf->SetFont("Times");   	         
          }
       
          // Tulis data
          $acak = rand(100, 100000);
          $pdf->Cell(30, 7, "B{$indeks}, C1", 1, 0, "L", true);
          $pdf->Cell(30, 7, "B{$indeks}, C2", 1, 0, "L", true);
          $pdf->Cell(40, 7, $acak, 1, 0, "R", true);
       
          $pdf->Ln(); // Pindah baris
      }
   }	  
   
   // Buat PDF
   $pdf = new FPDF();
   
   tampilkan_data($pdf);
   
   $pdf->Output();
?>
