<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Info Kolom Tabel daftar</title>
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

  $hasil = mysqli_query($id_mysql, "SELECT * FROM daftar");
  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

  while ($objek = mysqli_fetch_field($hasil))
  {
     print("Nama kolom   : $objek->name<br>\n");
	 print("Tipe kolom   : $objek->type<br>\n");
     print("Panjang kolom: $objek->length<br>\n");
     print("<br>\n");
  }

  mysqli_close($id_mysql);
?>
</body>
</html>
