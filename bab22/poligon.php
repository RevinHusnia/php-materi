<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(200, 100);

  // Menentukan warna 
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih = imagecolorallocate(
           $gb, 255, 255, 255);

  // Mengatur warna latar bekakang
  imagefill($gb, 0, 0, $putih);
  
  // Membuat poligon
  $data_poligon = array (100, 10,
                         10, 80,
                         180, 90,
                         100, 10);
  imagepolygon($gb, $data_poligon, 4, $hitam);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
