<?php
   require_once($_SERVER['DOCUMENT_ROOT'] . "/fpdf/fpdf.php");
   
   $daftar = array
   (
     array("Jakarta",   "Indonesia"),
     array("Bangkok",   "Thailand"),
     array("Tokyo",     "Jepang"),
     array("Taipeh",    "Taiwan"),
     array("Amsterdam", "Belanda"),
     array("Paris",     "Prancis"),
     array("Roma",      "Italia")
   );
   
   // Buat PDF
   $pdf = new FPDF();
   
   //------- Buat tabel
   
   // 1. Buat halaman baru
   $pdf->AddPage(); 
   
   // 2. Buat judul
   $pdf->SetFillColor(0, 0, 255);
   $pdf->SetTextColor(255, 255, 255);
   $pdf->SetFont("Arial", "B");
	  
   $pdf->Cell(30, 7, "Kota", 1, 0, "L", true);
   $pdf->Cell(30, 7, "Negara", 1, 0, "L", true);
   
   $pdf->Ln(); // Pindah baris
   
   // 3. Atur warna untuk non judul
   $pdf->SetFillColor(255, 255, 255);
   $pdf->SetTextColor(0, 0, 0);
   $pdf->SetFont("Times"); 
   
   // 4. Tampilkan data
   for ($j = 0; $j < count($daftar); $j++)
   {
      $pdf->Cell(30, 7, $daftar[$j][0], 1, 0, "L", true);
      $pdf->Cell(30, 7, $daftar[$j][1], 1, 0, "L", true);
       
      $pdf->Ln(); // Pindah baris
   }
   
   // 5. Tampilkan hasilnya
   $pdf->Output();	        
?>
