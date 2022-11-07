<!DOCTYPE html>
<html>
<head>
<title>Mengetahui Jumlah Hasil Permintaan</title>
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

  $jum_kolom = mysqli_num_fields($hasil);
  print("Jumlah kolom : $jum_kolom<br>\n");
            
  $jum_baris = mysqli_num_rows($hasil);
  print("Jumlah baris : $jum_baris<br>\n");

  mysqli_close($id_mysql);
?>
</body>
</html>
