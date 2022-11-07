<!DOCTYPE html>
<html>
<head>
<title>Tes PDO</title>
</head>
<body>
<?php
  $pemakai  = "php";
  $password = "007php";
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
     die("Koneksi ke MySQL tidak dapat dilakukan");
  }
?>
</body>
</html>
