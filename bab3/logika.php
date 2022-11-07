<!DOCTYPE html>
<html>
<head>
<title>Contoh Operator Logika</title>
</head>
<body>

<?php
  $kar = 'a';

  printf("$kar adalah huruf kapital : %d<br>\n",
         $kar >= 'A' and $kar <= 'Z');

  printf("$kar adalah huruf kecil : %d<br>\n",
         $kar >= 'a' and $kar <= 'z');

  printf("$kar adalah angka : %d<br>\n",
         $kar >= '0' and $kar <= '9');

?>

</body>
</html>
