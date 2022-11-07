<?php
  header("Content-Type: image/png");

  // Menciptakan gambar sumber
  $sumber = imagecreatefromPNG("../citra/mobil.png");

  // Menciptakan gambar tujuan
  $tujuan = imagecreate(200, 200);

  // Menyalin gambar
  imagecopy($tujuan, $sumber,
            10, 10, 
            0, 0,
            imageSX($sumber) - 1,
            imageSY($sumber) - 1);

  // Menyalin dengan ukuran setengahnya
  //   dan diletakkan di bawah gambar pertama

  imagecopyresized($tujuan, $sumber,
            20, imageSY($sumber) + 20, 
            0, 0,
            imageSX($sumber) / 2,
            imageSY($sumber) / 2, 
            imageSX($sumber) - 1,
            imageSY($sumber) - 1);

  // Menampilkan gambar
  imagePNG($tujuan);

  // Mendealokasikan memori
  imagedestroy($sumber);
  imagedestroy($tujuan);
?>
