<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(100, 100);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);
           
  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);
           
  // Mengatur warna latar bekakang
  imagefill($gb, 0, 0, $putih);
  
  // Menampilkan string
  imagestring($gb, 5, 10, 50,
             "PHP oke", $hitam);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
