<!DOCTYPE html>
<html>
<head>
<title>Mengacak Data</title>
</head>
<body>

<?php
  $data = range(1, 10);
  shuffle($data);

  while ( list($indeks, $nilai) = each($data) )
     print("[$indeks] -> $nilai <br>\n");

  print("<br>\n");

?>

</body>
</html>
