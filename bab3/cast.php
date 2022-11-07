<!DOCTYPE html>
<html>
<head>
<title>Contoh Konversi dengan cast</title>
</head>
<body>

<?php
  $suhu = "28.3 derajat Celcius";
  print("Tipe String  : $suhu <br>\n");
  printf("Tipe Double  : %s <br>\n", (double) $suhu);
  printf("Tipe Integer : %s <br>\n", (int) ($suhu));
  printf("Tipe string  : %s <br>\n", $suhu);

  $bilangan = 28;
  $suhu     = (string) $bilangan;  // konversi ke string
  printf("Bil.ke string :  %s <br>\n", $suhu);
?>

</body>
</html>
