<!DOCTYPE html>
<html>
<head>
<title>Membaca Struktur Tabel</title>
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

  $permintaan = "SELECT * FROM daftar";

  $hasil = odbc_do($buku_alamat, $permintaan);

  $jum_field = odbc_num_fields($hasil);
  for($i = 1; $i <= $jum_field; $i++)
  {
     $nama_field = odbc_field_name($hasil, $i);
     $tipe_field = odbc_field_type($hasil, $i);
     $panjang_field = odbc_field_len($hasil, $i);

     print("$nama_field - $tipe_field - " .
           "$panjang_field <br>\n");
  }

  odbc_close($buku_alamat);
?>

</body>
</html>
