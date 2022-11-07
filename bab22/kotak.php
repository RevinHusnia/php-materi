<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(200, 100);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);
  $putih = imagecolorallocate(
           $gb, 255, 255, 255);
  $hijau = imagecolorallocate(
           $gb, 0, 255, 0);

  // Mengatur warna latar bekakang
  imagefill($gb, 0, 0, $putih);
  
  // Membuat kotak diblok
  imagefilledrectangle($gb,
    100, 50, 180, 90, $hitam);

  // Membuat kotak tanpa diblok
  imagerectangle($gb,
    10, 10, 120, 70, $hijau);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
