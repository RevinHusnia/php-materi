<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(400, 200);

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
  imagearc($gb, 100, 50, 80, 80,
           0, 360, $hitam);
  // Membuat busur
  imagearc($gb, 200, 50, 80, 80,
           0, 270, $hitam);

  imagearc($gb, 300, 50, 80, 80,
           270, 0, $hitam);

  // Membuat elips
  imagearc($gb, 100, 150, 120, 40,
           0, 360, $hitam);

  imagearc($gb, 300, 150, 60, 90,
           0, 360, $hitam);
           
  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
