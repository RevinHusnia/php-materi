<!DOCTYPE html>
<html>
<head>
<title>Contoh Pengulangan dengan foreach</title>
</head>
<body>

<?php
  $peserta = array ("Andi", "Siti", "Jatmiko" ,"Edi");
  foreach ($peserta as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

?>

</body>
</html>
