<!DOCTYPE html>
<html>
<head>
<title>Contoh array_walk</title>
</head>
<body>

<?php
  $bahasa = array ( "p"=>"Pascal", "c"=>"C", "+"=>"C++" );

  function tampil($item, $kunci)
  {
     echo "$kunci -> $item<br>\n";
  }

  function ubah(&$item, $kunci, $tambahan)
  {
     $item = "$tambahan $item";
  }

  print("Mula-mula:<br>\n");
  array_walk ($bahasa, "tampil");

  array_walk ($bahasa, "ubah", "bahasa");

  print("Setelah diubah oleh array_walk<br>\n");
  array_walk ($bahasa, "tampil");
?>

</body>
</html>
