<?php
  include "otentik.php";

  session_start();

  $sesi_user = $_SESSION["sesi_user"] ?? "";
  $sesi_pass = $_SESSION["sesi_pass"] ?? "";
  
  if (! otentikasi($sesi_user, $sesi_pass))
  {
     $msg = "Harap diisi dengan benar";
     $alamat = "http://$NAMA_SERVER/bab20/loginbin.php";
     header("Location: $alamat?msg=$msg");
     exit();
  }

  // Validasi Data
  // Anda dapat menambahkan sendiri untuk
  //      memeriksa keabsahan tanggal

  $kode = $_POST["kode"] ?? "";
  $nama = $_POST["nama"] ?? "";
  $tanggal = $_POST["tanggal"] ?? "";
  $bulan = $_POST["bulan"] ?? "";
  $tahun = $_POST["tahun"] ?? "";
  $jender = $_POST["jender"] ?? "";
  $kateg = $_POST["kateg"] ?? "";
  $ket = $_POST["ket"] ?? "";

  if (empty($kode) or
      empty($nama) or
      ($tanggal == "0") or
      ($bulan == "0") or
      ($tahun == "0"))
  {
     $msg = "Ada data yang perlu diisi";
     $alamat = "http://$NAMA_SERVER/bab20/tambin1.php";
     $string_header = "Location: $alamat?msg=$msg" .
       "&kode=$kode&nama=$nama" .
       "&tanggal=$tanggal" .
       "&bulan=$bulan" .
       "&tahun=$tahun" .
       "&jender=$jender&kateg=$kateg" .
       "&ket=$ket";
     header($string_header);
     exit();
  }

?>

<!DOCTYPE html>
<html>
<head> 
<title>Menambah Data Bintang Film</title>
</head>
<body>
<center>
<h1>Informasi Penambahan Bintang Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database server MySQL tak dapat dikoneksi");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $format_tanggal = sprintf("%04d-%02d-%02d",
                            $tahun,
                            $bulan,
                            $tanggal);
  
  $query = "INSERT INTO bintang " .
    "(kode_bintang,nama,tgl_lahir,jender," .
    "lokal, keterangan)" .
    " VALUES ('$kode', '$nama', " .
    " '$format_tanggal', '$jender', " .
    " '$kateg', '$ket')";

  mysqli_query($id_mysql, $query);
  if (mysqli_affected_rows($id_mysql) > 0)
     print("Data $nama telah ditambahkan");
  else
     print("Penambahan gagal dilakukan");
?>

<br>
<hr>
<a href="menubin.php">Menu Utama</A>

</center>
</body>
</html>
