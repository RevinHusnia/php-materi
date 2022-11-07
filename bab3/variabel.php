<!DOCTYPE html>
<html>
<head>
<title>Contoh Penaikan Isi variabel</title>
</head>
<body>

<?php
  $gaji = 2000000;
  printf("Gaji semula = %d <br>\n", $gaji);

  $gaji = 1.5 * $gaji;
  printf("Gaji sekarang = %d <br>\n", $gaji);
?>

</body>
</html>
