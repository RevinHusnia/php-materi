<!DOCTYPE html>
<html>
<head>
<title>Contoh Konversi dengan Settype</title>
</head>
<body>

<?php
  $suhu = "28.3 derajat Celcius";
  print("Tipe String  : $suhu <br>\n");

  settype($suhu, "double");
  print("Tipe Double  : $suhu <br>\n");

  settype($suhu, "integer");
  print("Tipe Integer : $suhu <br>\n");

  settype($suhu, "string");
  print("Tipe string  : $suhu <br>\n");
?>

</body>
</html>
