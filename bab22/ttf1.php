<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(300, 100);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);

  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $putih);
  
  // Menampilkan string
  $ukuran_font = 25;
  $sudut_arah  = 0;
  imageTTFtext($gb, $ukuran_font,
               $sudut_arah, 5, 30, $hitam,
               "C:\\Windows\\Fonts\\comic.ttf",
               "Comic Sans MS");

  imageTTFtext($gb, $ukuran_font,
               $sudut_arah, 5, 60, $hitam,
               "C:\\Windows\\Fonts\\gara.ttf",
               "Garamond");

  imageTTFtext($gb, $ukuran_font,
               $sudut_arah, 5, 90, $hitam,
               "C:\\Windows\\Fonts\\arial.ttf",
               "Arial");

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
