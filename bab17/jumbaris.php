<!DOCTYPE html>
<html>
<head>
<title>Penggunaan rowcount()</title>
</head>
<body>
<?php
  $pemakai  = "php";
  $password = "007php";
  $dsn = "mysql:host=localhost;dbname=bukualmt";
  
  // Inisialisasi $koneksi
  $koneksi = null;
  
  try
  {
	 // Koneksi ke MySQL
     $koneksi = new PDO($dsn, $pemakai, $password);
  }
  catch(PDOException $e)
  {
     die("Koneksi gagal: " . $e->getMessage() );
  }
  
  // Query
  $hasil = $koneksi->query("SELECT * FROM kota");
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  $jumbaris = $hasil->rowCount();
  print("Jumlah baris: $jumbaris");

  // Tutup koneksi secara eksplisit
  $koneksi = null;
?>

</body>
</html>
