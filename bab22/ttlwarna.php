<!DOCTYPE html>
<html>
<head>
<title>Jumlah Warna</title>
</head>
<body>

<img src="../citra/mobil.png">
<p>

<?php
  // Menciptakan gambar dari mobil.png
  $gb = imagecreatefromPNG("../citra/mobil.png");

  // Memperoleh jumlah warna
  $jum_warna = imagecolorstotal($gb);

  // Mendealokasikan memori
  imagedestroy($gb);

  print("Jumlah warna : $jum_warna");
?>

</body>
</html>
