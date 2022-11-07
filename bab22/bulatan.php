<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(100, 100);

  // Menentukan warna hitam dan putih
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);
  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);
  
  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $putih);
  
  // Membuat bulatan
  imagearc($gb, 50, 50, 80, 80, 0, 360, $hitam);
  imagefill($gb, 50, 50, $hitam);

  // Menampilkan gambar
  imageJPEG($gb);

  // Menyimpan ke berkas bulatan.jpg
  imageJPEG($gb, "bulatan.jpg");

  // Mendealokasikan memori
  imagedestroy($gb);
?>
