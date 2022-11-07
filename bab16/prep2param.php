<!DOCTYPE html>
<html>
<head>
<title>Penggunaan prepare() 2 Parameter</title>
</head>
<body>
<?php
  $pesan = "Penggunaan berupa: prep2param.php?" .
           "nama=penggalan&kota=nama_kota";
  $kota = $_GET["kota"] ?? "";
  if (empty($kota))
	 die($pesan);
 
  $nama = $_GET["nama"] ?? "";
  if (empty($nama))
	 die($pesan);
 
  // Tambahkan %
  $nama = "%{$nama}%";
  
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
		 "kota.nama_kota = ? AND daftar.nama LIKE ?";

  $query = $mysqli->prepare($sql);
  $hasil = $query->bind_param("ss", $kota, $nama);
  $query->execute();
  $query->bind_result($nama);
  
  $query->store_result();
  $jumbaris = $query->num_rows;
  if ($jumbaris == 0)
	 print("Tidak ada data yang memenuhi");
  else
    while ( $baris = $query->fetch() )
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
