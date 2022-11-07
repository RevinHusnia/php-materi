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

  $kode = $_POST["kode"] ?? "";
  if (empty($kode))
  {
     $alamat = "http://$NAMA_SERVER/bab20/dafbin.php";
     header("Location: $alamat");
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
<h1>Informasi Penghapusan Bintang Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database server MySQL tak dapat dikoneksi");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");
  
  $query = "DELETE FROM bintang " .
    "WHERE kode_bintang = '$kode'";

  mysqli_query($id_mysql, $query); 
  if (mysqli_affected_rows($id_mysql) > 0)
     print("Data telah dihapus");
  else
     print("Penghapusan gagal dilakukan");

  mysqli_close($id_mysql);
?>

<br>
<hr>
<a href="dafbin.php">Menu Bintang Film</a>

</body>
</html>
