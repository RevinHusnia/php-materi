<!DOCTYPE html>
<html>
<head>
<title>Pencarian Secara Eksak</title>
</head>
<body>

<?php
  $teks = "Halaman Web";
  $hasil = preg_match("/\bweb\b/i", $teks);
  print("$hasil<br>");
  
  $teks = "Webinar";
  $hasil = preg_match("/\bweb\b/i", $teks);
  print("$hasil<br>");
?>

</body>
</html>
