<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(100, 100);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);

  // Mengatur warna latar bekakang
  imagefill($gb, 0, 0, $putih);
  
  // Menampilkan string dengan
  //   berbagai font

  $baris = 5;

  for($i = 1; $i <= 5; $i++)
  {
    imagestring($gb, $i, 10, $baris, "PHP oke", $hitam);
    $baris = $baris + imagefontheight($i) +
             2 * $i;
  }

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
