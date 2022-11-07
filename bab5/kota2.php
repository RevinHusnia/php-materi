<!DOCTYPE html>
<html>
<head>
<title>Contoh Array</title>
</head>
<body>

<?php
  $kota = array ("Yogya", "Solo",
                 "Bandung", "Bogor");

  $jumlah = count($kota);
  for ($i = 0; $i < $jumlah; $i++)
      print("Elemen berindeks $i: $kota[$i] <br>\n");
?>

</body>
</html>
