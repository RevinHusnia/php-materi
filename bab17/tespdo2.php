<!DOCTYPE html>
<html>
<head>
<title>Tes PDO</title>
</head>
<body>
<?php
  $pemakai  = "php";
  $password = "008php";
  $dsn = "mysql:host=localhost;dbname=bukualmt";
  
  try
  {
	 // Koneksi ke MySQL
     $koneksi = new PDO($dsn, $pemakai, $password);
	 
	 // Tutup koneksi
     $koneksi = null;

	 // Informasi
     print("Sukses");
  }
  catch(PDOException $e)
  {
     die("Koneksi gagal: " . $e->getMessage() );
  }
?>
</body>
</html>
