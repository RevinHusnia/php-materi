<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/fpdf/fpdf.php");

  $pemakai  = "php";
  $password = "007php";
  $id_mysql = mysqli_connect("localhost",
                             $pemakai,
                             $password);
  if (! $id_mysql)
     die("Gagal melakukan koneksi ke Database server MySQL");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $hasil = mysqli_query($id_mysql, "SELECT * FROM bintang " .
                                   "ORDER BY nama");
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  // Buat PDF
  $pdf = new FPDF();
   
  $pencacah = 0; 
  while ( $baris = mysqli_fetch_row($hasil) )
  {
     $thn = substr($baris[2], 0, 4);
     $bln = substr($baris[2], 5, 2);
     $tgl = substr($baris[2], 8, 2);
     $nama = $baris[1];
     $jender = $baris[3] == "P" ? "Pria" : "Wanita";
     $kateg = $baris[4] == "Y" ? "Bintang film lokal" :
                                 "Bintang film luar";
     $keterangan = $baris[5];
     $foto = $baris[6];
     if ($pencacah % 3 == 0)
	 {
        $pdf->AddPage(); // Buat halaman baru  
     }   
     
     $posisi = 100 * ($pencacah % 3) + 5;
     $pdf->SetFont("Arial", "B", 28); // Tebal
     $pdf->settextcolor(255, 255, 255); // Putih
     $pdf->setXY(10, $posisi);
     $pdf->MultiCell(100, 12, $nama, 1, "C", true);
   
     $path_foto = $_SERVER["DOCUMENT_ROOT"] . 
                  "/citra/{$foto}";
     $path_belumada = $_SERVER["DOCUMENT_ROOT"] . 
                      "/citra/belumada.png";             
     if (!empty($foto))
       if (file_exists($path_foto))
          $pdf->Image($path_foto, 10, $posisi + 20);
       else
          $pdf->Image($path_belumada, 10, $posisi + 20); 
     else
        $pdf->Image($path_belumada, 10, $posisi + 20); 
                
     $pdf->SetFont("Times", "", 12);
     $pdf->settextcolor(0, 0, 0); // Hitam        
     
     $teks = "** Jender: $jender\n" .
             "** $kateg\n" . $keterangan;
	   
     $pdf->SetXY(60, $posisi + 20);
     $pdf->MultiCell(140, 10, $teks, 0, "J");
      
     $pencacah++;
  }

  mysqli_close($id_mysql);
  
  $pdf->Output();
?>
