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
  $id_mysql = mysqli_connect("localhost",
                            $pemakai,
                            $password);
  if (mysqli_connect_errno($id_mysql))
     die(mysqli_connect_error($id_mysql));

  mysqli_close($id_mysql);

  print("Sukses");
?>
</body>
</html>
