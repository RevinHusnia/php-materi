<!DOCTYPE html>
<html>
<head>
<title>Contoh Variabel Variabel</title>
</head>
<body>

<?php
  $kota = "yogya";

  ${$kota} = 120000;

  print("\$kota   = $kota <br>\n");
  print("\${\$kota} = ${$kota} <br>\n");
  print("\$yogya  = $yogya <br>\n");

  $yogya = 100000;
  print("\${\$kota} = ${$kota} <br>\n");
  print("\$yogya  = $yogya <br>\n");

?>

</body>
</html>
