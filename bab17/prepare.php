<!DOCTYPE html>
<html>
<head>
<title>Penggunaan prepare()</title>
</head>
<body>
<?php
  $kota = $_GET["kota"] ?? "";
  if (empty($kota))
	 die("Penggunaan berupa: prepare.php?kota=namakota");
 
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
  $sql = "SELECT daftar.nama FROM daftar, kota " . 
         "WHERE daftar.id_kota = kota.id_kota AND " . 
		 "kota.nama_kota = ?";
  $query = $koneksi->prepare($sql);
  $query->execute([$kota]);
  
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
