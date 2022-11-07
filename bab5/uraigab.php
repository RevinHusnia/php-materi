
<!DOCTYPE html>
<html>
<head>
<title>Contoh explode dan implode</title>
</head>
<body>

<?php
  $teks = "Saya belajar PHP lho";
  $hasil = explode(" ", $teks, 3);
  print("Hasil explode<br>\n");
  while ( list($indeks, $nilai) = each($hasil) )
     print("[$indeks] -> $nilai <br>\n");

  // di-implode
  $gab = implode("-", $hasil);
  print("Hasil implode<br>\n");
  print("$gab");

?>

</body>
</html>
