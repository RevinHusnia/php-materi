<!DOCTYPE html>
<html>
<head>
<title>Contoh meng-include</title>
</head>
<body>

<?php
  print("Tes include<br>\n");

  include("header.php");

  print("Setelah include pertama<br>\n");

  include("header.php");

  print("Setelah include kedua<br>\n");
?>

</body>
</html>

