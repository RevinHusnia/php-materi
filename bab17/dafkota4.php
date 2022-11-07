<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Daftar Kota</title>
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

  // Tampilkan hasil
  while ( $baris = $hasil->fetch() )
  {
     print("$baris[0] - $baris[1]<br>\n");
  }

  // Tutup koneksi secara eksplisit
  $koneksi = null;
?>

</body>
</html>
