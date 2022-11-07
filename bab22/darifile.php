<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar dari bulatan.jpg
  $gb = imagecreatefromJPEG("bulatan.jpg");

  // Menentukan warna cyan
  $cyan = imagecolorallocate(
          $gb, 0, 255, 255);

  // Membuat garis silang
  $x = imageSX($gb);
  $y = imageSY($gb);
  imageline($gb, 0, 0, $x-1, $y-1, $cyan);
  imageline($gb, 0, $y-1, $x-1, 0, $cyan);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
