<!DOCTYPE html>
<html>
<head>
<title>Pengurutan Data Secara Alamiah</title>
</head>
<body>

<?php
  // Data array

  $buah1[0] = "11 Nanas";
  $buah1[1] = "1 Nanas";
  $buah1[2] = "2 Nanas";
  $buah1[3] = "12 Nanas";

  print("Data Asli : <br>\n");
  while ( list($indeks, $nilai) = each($buah1) )
     print("$nilai <br>\n");

  print("<br>\n");

  // Pengurutan dengan sort
  $buah2 = $buah1;
  sort($buah2);

  print("Hasil sort : <br>\n");
  while ( list($indeks, $nilai) = each($buah2) )
     print("$nilai <br>\n");

  print("<br>\n");

  // Pengurutan dengan natsort
  $buah2 = $buah1;
  natsort($buah2);

  print("Hasil natsort : <br>\n");
  while ( list($indeks, $nilai) = each($buah2) )
     print("$nilai <br>\n");

  print("<br>\n");

?>

</body>
</html>
