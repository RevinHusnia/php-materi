<!DOCTYPE html>
<html>
<head>
<title>Tes MySQL</title>
</head>
<body>
<?php
  $pemakai  = "php";
  $password = "007php";
  $id_mysql = mysqli_connect("localhost",
                            $pemakai,
                            $password);
  if (! $id_mysql)
     die("Gagal melakukan koneksi ke Database server MySQL");

  mysqli_close($id_mysql);

  print("Sukses");
?>
</body>
</html>
