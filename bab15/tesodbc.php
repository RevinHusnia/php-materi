<!DOCTYPE html>
<html>
<html>
<title>Tes ODBC</title>
<body>
<?php
  $pemakai  = "";
  $password = "";
  $buku_alamat = odbc_connect("contoh_mdb",
                              $pemakai,
                              $password);
  if (! $buku_alamat)
    die("Database tak dapat dibuka");

  odbc_close($buku_alamat);

  print("Sukses");
?>
</body>
</html>
