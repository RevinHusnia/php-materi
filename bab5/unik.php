<!DOCTYPE html>
<html>
<head>
<title>Pengurutan Data Secara Alamiah</title>
</head>
<body>

<?php
  // Data array semula

  $tumpukan[0] = "A";
  $tumpukan[1] = "B";
  $tumpukan[2] = "A";
  $tumpukan[3] = "X";

  $unik = array_unique($tumpukan);
  print("Hasil setelah array_unique : <br>\n");
  while ( list($indeks, $nilai) = each($unik) )
     print("$nilai <br>\n");

  print("<br>\n");

?>

</body>
</html>
