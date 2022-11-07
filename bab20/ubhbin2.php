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

  $kode = $_POST["kode"]; 
  if (empty($kode))
  {
     $alamat = "http://$NAMA_SERVER/bab20/dafbin.php";
     header("Location: $alamat");
     exit();
  }

  $nama = $_POST["nama"] ?? ""; 
  $tanggal = $_POST["tanggal"] ?? ""; 
  $bulan = $_POST["bulan"] ?? ""; 
  $tahun = $_POST["tahun"] ?? ""; 
  $jender = $_POST["jender"] ?? ""; 
  $kateg = $_POST["kateg"] ?? ""; 
  $ket = $_POST["ket"] ?? ""; 

  if (empty($nama) or
      ($tanggal == "0") or
      ($bulan == "0") or
      ($tahun == "0"))
  {
	  die("$nama:$tanggal:$bulan:$tahun");
     $msg = "Ada data yang perlu diisi";
     $alamat = "http://$NAMA_SERVER/bab20/ubhbin1.php";
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
<title>Mengubah Data Bintang Film</title>
</head>
<body>
<center>
<h1>Informasi Pengubahan Bintang Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database MySQL tak dapat dibuka");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $format_tanggal = sprintf("%04d-%02d-%02d",
                            $tahun,
                            $bulan,
                            $tanggal);
  
  $query = "UPDATE bintang " .
    "SET nama = '$nama', " .
    "tgl_lahir = '$format_tanggal', " .
    "jender = '$jender', ".
    "lokal = '$kateg', " .
    "keterangan = '$ket' " .
    "WHERE kode_bintang = '$kode'";

  $hasil = mysqli_query($id_mysql, $query);
  if ($hasil == TRUE)
     print("Data $nama telah diubah");
  else
     print("Pengubahan gagal dilakukan");

  mysqli_close($id_mysql);
?>

<br>
<hr>
<a href="dafbin.php">Menu Bintang Film</A>

</body>
</html>
