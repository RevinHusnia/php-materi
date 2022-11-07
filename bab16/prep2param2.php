<!DOCTYPE html>
<html>
<head>
<title>Penggunaan prepare() 2 Parameter</title>
</head>
<body>
<?php
  $pesan = "Penggunaan berupa: prep2param2.php?" .
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
  $id_mysql = mysqli_connect("localhost",
                            $pemakai,
                            $password);
  if (mysqli_connect_errno($id_mysql))
     die(mysqli_connect_error($id_mysql));
  
  if (! mysqli_select_db($id_mysql, "bukualmt"))
     die("Database tidak bisa dipilih");

  // Penggunaan prepare()
  $sql = "SELECT daftar.nama FROM daftar, kota " . 
         "WHERE daftar.id_kota = kota.id_kota AND " . 
		 "kota.nama_kota = ? AND daftar.nama LIKE ?";

  $query = mysqli_prepare($id_mysql, $sql);
  mysqli_stmt_bind_param($query, "ss", $kota, $nama);
  mysqli_stmt_execute($query);
  
  $hasil = mysqli_stmt_get_result($query);
 
  $jumbaris = mysqli_num_rows($hasil);
  if ($jumbaris == 0)
	 print("Tidak ada data yang memenuhi");
  else
    while ( $baris = mysqli_fetch_row($hasil) )
    {
       print("$baris[0]<br>\n");
    }

  // Tutup prepared statement
  mysqli_stmt_close($query);
  
  // Tutup hubungan ke database
  mysqli_close($id_mysql);
?>

</body>
</html>
