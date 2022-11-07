<!DOCTYPE html>
<html>
<head>
<title>Contoh mysqli_data_seek</title>
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

  if (! mysqli_select_db($id_mysql, "bukualmt"))
     die("Database tidak bisa dipilih");

  $hasil = mysqli_query($id_mysql, "SELECT * FROM kota");
  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

  //mysqli_data_seek($hasil, 3);

  while ( $baris = mysqli_fetch_row($hasil) )
  {
     print("$baris[0] - $baris[1]<br>\n");
  }

  mysqli_close($id_mysql);
?>

</body>
</html>
