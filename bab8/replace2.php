<!DOCTYPE html>
<html>
<head>
<title>Contoh preg_replace</title>
</head>
<body>

<?php
  $string = '15 Januari 2018';
  $pola = '/(\d+) (\w+) (\d+)/';
  $pengganti = '$2 $1, $3';
  print("Asli : $string<br>");
  print("Hasil: " . 
        preg_replace($pola, $pengganti, $string));
?>

</body>
</html>
