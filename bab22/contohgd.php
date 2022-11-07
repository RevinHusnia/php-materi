<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(200, 100);

  // Menentukan warna merah dan biru
  $merah = imagecolorallocate(
           $gb, 255, 0, 0);
  $biru  = imagecolorallocate(
           $gb, 0, 0, 255);

  // Membuat kotak merah
  imagefilledrectangle(
    $gb, 0, 0, 200, 49, $merah);

  // Membuat kotak biru
  imagefilledrectangle(
    $gb, 0, 49, 200, 99, $biru);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
