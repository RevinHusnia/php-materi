<!DOCTYPE html>
<html>
<head>
<title>NUll Coalesce Operator</title>
</head>
<body>

<?php
  $hasil = $dicek ?? "Tidak ada";
  print("\$hasil: $hasil<br>");
  
  $dicek = "Bravo";
  
  $hasil = $dicek ?? "Tidak ada";
  print("\$hasil: $hasil<br>");
?>

</body>
</html>
