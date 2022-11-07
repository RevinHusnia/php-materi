<!DOCTYPE html>
<html>
<head>
<title>Penggunaan prepare() pada mysqli</title>
</head>
<body>
<?php
  $kota = $_GET["kota"] ?? "";
  if (empty($kota))
	 die("Penggunaan berupa: prepmysqli.php?kota=namakota");

  $pemakai  = "php";
  $password = "007php";
  $mysqli = new mysqli("localhost",
                       $pemakai,
                       $password);
  if ($mysqli->connect_errno)
     die("Gagal melakukan koneksi ke Database server MySQL");

  if (! $mysqli->select_db("bukualmt"))
     die("Database tidak bisa dipilih");

  // Penggunaan prepare()
  $sql = "SELECT daftar.nama FROM daftar, kota " . 
         "WHERE daftar.id_kota = kota.id_kota AND " . 
		 "kota.nama_kota = ?";

  $query = $mysqli->prepare($sql);
  $hasil = $query->bind_param("s", $kota);
  $query->execute();
  $query->bind_result($nama);
  
  $query->store_result();
  $jumbaris = $query->num_rows;
  if ($jumbaris == 0)
	 print("Tidak ada data yang memenuhi");
  else
    while ( $query->fetch() )
    {
       print("$nama<br>\n");
    }

  // Tutup prepared statement	
  $query->close();
  
  // Tutup hubungan ke database
  $mysqli->close();
?>

</body>
</html>
