<?php
  header("Content-Type: image/png");

  // Menciptakan gambar sumber
  $sumber = imagecreatefromPNG("../citra/mobil.png");

  // Memutar
  $gbr_diputar = imagerotate($sumber, 45, 0);

  // Menampilkan gambar
  imagePNG($gbr_diputar);

  // Mendealokasikan memori
  imagedestroy($sumber);
?>
