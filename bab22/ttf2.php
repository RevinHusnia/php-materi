<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(200, 100);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);

  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $putih);
  
  // Menampilkan string
  $ukuran_font = 25;
  $berkas_font = "C:\\Windows\\Fonts\\comic.ttf";
  imageTTFtext($gb, $ukuran_font,
               -10, 5, 30, $hitam,
               $berkas_font,
               "PHP Oke");

  imageTTFtext($gb, $ukuran_font,
               90, 150, 98, $hitam,
               $berkas_font,
               "PHP Oke");

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
