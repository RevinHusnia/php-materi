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
  $judul = $_POST["judul"];
  $tahun = $_POST["tahun"];

  if (empty($kode) or
      empty($judul) or
      ($tahun == "0"))
  {
     $msg = "Ada data yang perlu diisi";
     $alamat = "http://$NAMA_SERVER/bab20/tamfil1.php";
     $string_header = "Location: $alamat?msg=$msg" .
       "&kode=$kode&judul=$judul" .
       "&tahun=$tahun"; 
     header($string_header);
     exit();
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>Menambah Film</title>
</head>
<body>
<center>
<h1>Informasi Penambahan Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database MySQL tak dapat dibuka");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $query = "INSERT INTO film " .
    "(kode_film, judul, tahun)" .
    " VALUES ('$kode', '$judul', " .
    " '$tahun')";

  mysqli_query($id_mysql, $query);
  if (mysqli_affected_rows($id_mysql) > 0)
     print("Data $judul telah ditambahkan");
  else
     print("Penambahan gagal dilakukan");

  mysqli_close($id_mysql);
?>

<br>
<hr>
<a href="menubin.php">Menu Utama</a>

</center>
</body>
</html>
