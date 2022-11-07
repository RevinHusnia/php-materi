<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/fpdf/fpdf.php");
   
  // Buat PDF
  $pdf = new FPDF();
   
  $pdf->AddPage();
  $pdf->SetFont("Arial", "B", 28);
  $pdf->Cell(100, 12, "Yogyakarta");
   
  $pdf->Image($_SERVER["DOCUMENT_ROOT"] . 
              "/citra/pintulangit.jpg", 10, 30);
   
  $pdf->SetFont("Times", "", 12);
      
  $teks = "Ke Yogyakarta tanpa mengunjungi Malioboro? " .
          "Hmmm, mungkin ibarat masakan tanpa garam. " .
          "Namun, Yogyakarta kini tidak hanya Malioboro, " .
          "Tugu, Keraton, Tamansari, Benteng Vredeburg " .
          "Taman Pintar, dan Candi Prambanan. " .
          "Objek-objek lain di sekitarnya pun " .
          "telah menjadi destinasi wisata yang menarik. " .
          "Sebut saja: Kalibiru, Gunung Gajah, Lava Tour, " .
          "Pintoe Langit, dan Hutan Pinus Becici.";
	   
  $pdf->setxy(125, 30);   
  $pdf->MultiCell(0, 10, $teks, 0, "L	");
   
  $pdf->Output();	        
?>
