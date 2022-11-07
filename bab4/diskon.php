<!DOCTYPE html>
<html>
<head>
<title>Contoh Penentuan Diskon</title>
</head>
<body>

<?php
  $total_beli = 200000;
  $keterangan = "Tak dapat diskon";

  if ($total_beli >= 100000)
     $keterangan = "Dapat diskon";

  print("$keterangan <br>");
  ?>

</body>
</html>
