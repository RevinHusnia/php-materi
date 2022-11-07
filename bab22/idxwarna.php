<!DOCTYPE html>
<html>
<head>
<title>Komponen RGB Warna</title>
</head>
<body>

<?php
  // Menciptakan gambar dari mobil.png
  $gb = imagecreatefromPNG("../citra/mobil.png");

  // Memperoleh jumlah warna
  $jum_warna = imagecolorstotal($gb);

  // Menampilkan RGB untuk setiap
  //   indeks warna
  for($i = 0; $i < $jum_warna; $i++)
  {
     $warna = imagecolorsforindex($gb, $i);
     printf("R : %d G: %d B: %d <BR>\n",
           $warna["red"],
           $warna["blue"],
           $warna["green"]);
  }
           
  // Mendealokasikan memori
  imagedestroy($gb);
?>

</body>
</html>
