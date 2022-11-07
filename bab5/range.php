<!DOCTYPE html>
<html>
<head>
<title>Menciptakan Array Berisi Nilai Urut</title>
</head>
<body>

<?php
  $urut = range(2, 10);

  while ( list($indeks, $nilai) = each($urut) )
     print("[$indeks] -> $nilai <br>\n");

  print("<br>\n");

?>

</body>
</html>
