<!DOCTYPE html>
<html>
<head>
<title>Pelewatan Argumen dengan Referensi</title>
</head>
<body>

<?php
  function tukar(&$x, &$y)
  {
     $tmp = $x;
     $x   = $y;
     $y   = $tmp;
  }

  $a = 10;
  $b = 20;
  print("Sebelum penukaran : ");
  printf("a = %d b = %d <br>\n", $a, $b);

  tukar($a, $b);
  print("Sesudah penukaran : ");
  printf("a = %d b = %d <br>\n", $a, $b);

?>

</body>
</html>
