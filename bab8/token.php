<!DOCTYPE html>
<html>
<head>
<title>Contoh Penggunaan strtok</title>
</head>
<body>

<?php
  $kalimat = "saya pergi ke teman-saya";
  $kata = strtok($kalimat, " ");
  while ($kata)
  {
     print("Kata = $kata <br>\n");
     $kata = strtok(" ");
  }
?>

</body>
</html>
