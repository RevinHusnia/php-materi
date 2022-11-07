<!DOCTYPE html>
<html>
<head>
<title>Contoh Menambah Data Via ODBC</title>
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

  $permintaan = "INSERT INTO daftar " .
                " (nama, alamat, id_kota, telepon) " .
                " VALUES ('Dessy', 'Jl. Cokro 2', '274',' ')";
  if (odbc_do($buku_alamat, $permintaan))
     print("Data sudah direkam");
  else
     print("Data gagal direkam");

  odbc_close($buku_alamat);
?>

</body>
</html>
