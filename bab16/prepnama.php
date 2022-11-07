<!DOCTYPE html>
<html>
<head>
<title>Penggunaan LIKE</title>
</head>
<body>
<?php
  $nama = $_GET["nama"] ?? "";
  if (empty($nama))
	 die("Penggunaan berupa: prepnama.php?nama=penggalan_nama");
  
  // Tambahkan tanda %
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
  $sql = "SELECT nama FROM daftar " . 
         "WHERE nama LIKE ?";

  $query = $mysqli->prepare($sql);
  $hasil = $query->bind_param("s", $nama);
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
