<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Daftar Kota</title>
</head>
<body>
<?php
  error_reporting(0);
  $pemakai  = "php";
  $password = "007php";
  $mysqli = new mysqli("localhost",
                       $pemakai,
                       $password);
  if ($mysqli->connect_errno)
     die("Gagal melakukan koneksi ke Database server MySQL");

  if (! $mysqli->select_db("bukualmt"))
     die("Database tidak bisa dipilih");

  $hasil = $mysqli->query("SELECT * FROM kota");
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  while ( $baris = $hasil->fetch_row() )
  {
     print("$baris[0] - $baris[1]<br>\n");
  }

  $mysqli->close();
?>
</body>
</html>
