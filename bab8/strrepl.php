<!DOCTYPE html>
<html>
<head>
<title>Contoh str_replace</title>
</head>
<body>

<?php
  $kalimat = "saya pergi ke teman saya";
  $hasil   = str_replace("saya", "kami", $kalimat);

  print("Asli  : $kalimat <br>\n");
  print("Hasil : $hasil <br>\n");
?>

</body>
</html>
