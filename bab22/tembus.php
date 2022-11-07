<?php
  header("Content-Type: image/png");

  // Menciptakan gambar sumber
  $sumber = imagecreatefromPNG("../citra/mobil.png");

  // Mencari warna pada koordinat 0,0
  $warna = imagecolorat($sumber, 0, 0);

  imagecolortransparent($sumber, $warna);

  // Menampilkan gambar
  imagePNG($sumber);

  // Mendealokasikan memori
  imagedestroy($sumber);
?>
