<!DOCTYPE html>
<html>
<head>
<title>Contoh Variabel Statis</title>
</head>
<body>

<?php
  function hitung()
  {
     static $pencacah = 0;
     return ++$pencacah;
  }

  printf("%d <br>\n", hitung());
  printf("%d <br>\n", hitung());
  printf("%d <br>\n", hitung());
?>

</body>
</html>
