<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(200, 200);

  // Menentukan warna 
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);
           
  $putih = imagecolorallocate(
           $gb, 255, 255, 255);

  $hijau = imagecolorallocate(
           $gb, 0, 255, 0);

  // Mengatur warna latar bekakang
  imagefill($gb, 0, 0, $putih);
  
  // Membuat lingkaran
  imagearc($gb, 70, 99, 80, 80,
           0, 360, $hitam);

  imagearc($gb, 100, 99, 80, 80,
           0, 360, $hijau);

  // Membanjiri daerah interseksi lingkaran
  imagefill($gb, 80, 99, $hitam);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
