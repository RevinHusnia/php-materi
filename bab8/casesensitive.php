<!DOCTYPE html>
<html>
<head>
<title>Case Sensitive</title>
</head>
<body>

<?php
  $teks = "Alpha Beta";
  $hasil = preg_match("/beta/", $teks);
  print("$hasil<br>");
  
  $hasil = preg_match("/beta/i", $teks);
  print("$hasil<br>");
?>

</body>
</html>
