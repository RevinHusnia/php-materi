<!DOCTYPE html>
<html>
<head>
<title>Contoh array_walk</title>
</head>
<body>

<?php
  $bahasa = array ( "Pascal", "C", "C++" );

  function tampil_x($item, $kunci)
  {
     echo "$kunci -> $item<br>\n";
  }

  function tampil_y($item, $kunci, $tambahan)
  {
     echo "$kunci -> $tambahan $item<br>\n";
  }

  array_walk ($bahasa, "tampil_x");
  print("*<br>\n");
  array_walk ($bahasa, "tampil_y", "bahasa");

?>

</body>
</html>
