<?php
  include "otentik.php";

  session_start();

  $sesi_user = $_SESSION["sesi_user"] ?? "";
  $sesi_pass = $_SESSION["sesi_pass"] ?? "";

  if (! otentikasi($sesi_user, $sesi_pass))
  {
     $msg = "Harap diisi dengan benar";
     $alamat = "http://$NAMA_SERVER/loginbin.php";
     header("Location: $alamat?msg=$msg");
     exit();
  }

  $kode = $_POST["kode"] ?? "";
  if (empty($kode))
  {
     $alamat = "http://$NAMA_SERVER/bab20/daffil.php";
     header("Location: $alamat");
     exit();
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>Menghapus Data Film</title>
</head>
<body>
<center>
<h1>Informasi Penghapusan Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database MySQL tak dapat dibuka");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $query = "SELECT judul FROM film " .
    "WHERE kode_film = '$kode'";
  
  $hasil = mysqli_query($id_mysql, $query);
  $baris = mysqli_fetch_array($hasil);
  $judul = $baris[0];

  $query = "DELETE FROM film " .
    "WHERE kode_film = '$kode'";

  mysqli_query($id_mysql, $query); 
  if (mysqli_affected_rows($id_mysql) > 0)
     print("Data $judul telah dihapus");
  else
     print("Penghapusan gagal dilakukan");

  mysqli_close($id_mysql);
?>

<br>
<hr>
<a href="daffil.php">Menu Film</a>

</body>
</html>
