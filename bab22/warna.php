<!DOCTYPE html>
<html>
<head>
<title>Warna pada Koordinat 0,0</title>
</head>
<body>

<?php
  // Menciptakan gambar dari mobil.png
  $gb = imagecreatefromPNG("../citra/mobil.png");

  // Memperoleh indeks warna
  $indeks_warna = imagecolorat($gb, 10, 10);

  // Menampilkan komponen RGB-nya 
  $warna = imagecolorsforindex($gb,
                               $indeks_warna);
  printf("R : %d G: %d B: %d <BR>\n",
         $warna["red"],
         $warna["blue"],
         $warna["green"]);
           
  // Mendealokasikan memori
  imagedestroy($gb);
?>

</body>
</html>
