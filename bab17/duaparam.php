<!DOCTYPE html>
<html>
<head>
<title>Penggunaan Dua Parameter</title>
</head>
<body>
<?php
  $pesan = "Penggunaan berupa: duaparam.php?" .
           "nama=penggalan&kota=nama_kota";
  $kota = $_GET["kota"] ?? "";
  if (empty($kota))
	 die($pesan);
 
  $nama = $_GET["nama"] ?? "";
  if (empty($nama))
	 die($pesan);
 
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
		 "kota.nama_kota = ? AND daftar.nama LIKE ?";
		 
  $query = $koneksi->prepare($sql);
  $query->bindValue(1, "$kota");
  $query->bindValue(2, "%$nama%");
  
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
