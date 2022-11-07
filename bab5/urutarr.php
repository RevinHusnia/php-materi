<!DOCTYPE html>
<html>
<head>
<title>Pengurutan Data</title>
</head>
<body>

<?php
  // Data array

  $buah1["A"] = "Nanas";
  $buah1["E"] = "Pepaya";
  $buah1["C"] = "Mangga";
  $buah1["F"] = "Apel";

  print("Data Asli : ");
  while ( list($indeks, $nilai) = each($buah1) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan asort
  $buah2 = $buah1;
  asort($buah2);

  print("Hasil asort : ");
  while ( list($indeks, $nilai) = each($buah2) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan arsort
  $buah2 = $buah1;
  arsort($buah2);

  print("Hasil arsort : ");
  while ( list($indeks, $nilai) = each($buah2) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan krsort
  $buah2 = $buah1;
  krsort($buah2);

  print("Hasil krsort : ");
  while ( list($indeks, $nilai) = each($buah2) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan rsort
  $buah2 = $buah1;
  rsort($buah2);

  print("Hasil rsort : ");
  while ( list($indeks, $nilai) = each($buah2) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan sort
  $buah2 = $buah1;
  sort($buah2);

  print("Hasil sort : ");
  while ( list($indeks, $nilai) = each($buah2) )
     print("[$indeks] -> $nilai ");

  print("<br>\n");

  // Pengurutan dengan ksort
  $buah2 = $buah1;
  ksort($buah2);

  print("Hasil ksort : ");
  while ( list($indeks, $nilai) = each($buah2) )
       print("[$indeks] -> $nilai ");

  print("<br>\n");

?>

</body>
</html>
