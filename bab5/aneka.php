<!DOCTYPE html>
<html>
<head>
<title>Array dengan Indeks dan Data Berlainan Tipe</title>
</head>
<body>

<?php
  $serbaguna[0] = 50;
  $serbaguna[1] = "ABC";
  $serbaguna["A"] = 70;
  $serbaguna["B"] = "Bagus";

  print($serbaguna[0]);   print("<br>\n");
  print($serbaguna[1]);   print("<br>\n");
  print($serbaguna["A"]); print("<br>\n");
  print($serbaguna["B"]); print("<br>\n");
?>

</body>
</html>
