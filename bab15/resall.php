<!DOCTYPE html>
<html>
<head>
<title>Contoh odbc_result_all</title>
</head>
<body>

<?php
  $pemakai  = "";
  $password = "";
  $buku_alamat = odbc_connect("contoh_mdb",
                              $pemakai,
                              $password);
  if (! $buku_alamat)
     die("Database tak dapat dibuka");

  $permintaan = "SELECT daftar.nama, " .
                "daftar.alamat, kota.nama_kota " .
                "FROM daftar, kota " .
                "WHERE daftar.id_kota = kota.id_kota " .
                "ORDER BY daftar.nama";

  $hasil = odbc_do($buku_alamat, $permintaan);

  odbc_result_all($hasil);

  odbc_close($buku_alamat);
?>

</body>
</html>
