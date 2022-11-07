<!DOCTYPE html>
<html>
<head>
<title>Contoh preg_replace</title>
</head>
<body>

<?php
  $string = 'bulan bintang,matahari*galaksi';
  $pola = '/[\s,*]/';
  $hasil = preg_split($pola, $string, 3);
  print_r($hasil);
?>

</body>
</html>
