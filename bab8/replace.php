<!DOCTYPE html>
<html>
<head>
<title>Contoh preg_replace</title>
</head>
<body>

<?php
  $kalimat = "Saya pergi ke teman saya";
  $hasila  = preg_replace("/saya/i", "kami", $kalimat);
  
  print("Asli  : $kalimat <br>\n");
  print("Hasil preg_replace  : $hasila <br>\n");
?>

</body>
</html>
