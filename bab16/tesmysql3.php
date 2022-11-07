<!DOCTYPE html>
<html>
<head>
<title>Tes MySQL</title>
</head>
<body>
<?php
  error_reporting(0);
  $pemakai  = "php";
  $password = "008php";
  $mysqli = new mysqli("localhost",
                       $pemakai,
                       $password);
  if ($mysqli->connect_errno)
     die($mysqli->connect_error);

  $mysqli->close();

  print("Sukses");
?>
</body>
</html>
