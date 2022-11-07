<?php
  header("Content-Type: image/jpeg");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(300, 300);

  // Menentukan latar belakang
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);

  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $putih);
  
  // Menampilkan string
  $ukuran_font = 35;
  $sudut_arah  = 45;
  $teks = "Selamat Belajar";
  $berkas_font = "C:\\Windows\\Fonts\\gara.ttf";

  $batas = imageTTFbbox($ukuran_font,
                        $sudut_arah,
                        $berkas_font,
                        $teks);

  $pos_x = imageSX($gb)/2 -
           ($batas[0] + $batas[2] +
            $batas[4] + $batas[6]) / 4;
  $pos_y = imageSY($gb)/2 -
           ($batas[1] + $batas[3] +
            $batas[5] + $batas[7]) / 4;

  imageTTFtext($gb, $ukuran_font,
               $sudut_arah, $pos_x, $pos_y,
               $hitam,
               $berkas_font,
               $teks);

  // Menampilkan gambar
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
?>
