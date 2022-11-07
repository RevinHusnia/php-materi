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
  
  // Membuat garis putih
  imageline(
    $gb, 0, 0, 199, 99, $hitam);

  // Membuat garis terputus-putus
  // berwarna hijau
  imageline(
    $gb, 0, 99, 199, 0, $hijau);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
