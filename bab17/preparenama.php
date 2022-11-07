<!DOCTYPE html>
<html>
<head>
<title>Penggunaan LIKE</title>
</head>
<body>
<?php
  $nama = $_GET["nama"] ?? "";
  if (empty($nama))
	 die("Penggunaan berupa: prepare.php?nama=penggalan_nama");
 
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
  
  // prepare()
  $sql = "SELECT nama FROM daftar " . 
         "WHERE nama LIKE ?";
  $query = $koneksi->prepare($sql);
  $query->bindValue(1, "%$nama%", PDO::PARAM_STR);
  $query->execute();
  
  $jumbaris = $query->rowCount();
  if ($jumbaris == 0)
	 print("Tidak ada data yang memenuhi");
  else
     // Tampilkan hasil
     while ( $baris = $query->fetch() )
    {
       print("$baris[0]<br>\n");
    }
  
  // Tutup koneksi secara eksplisit
  $koneksi = null;
?>

</body>
</html>
