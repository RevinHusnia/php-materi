<?php
  include "otentik.php";
 
  session_start();

  if (isset($_SESSION["sesi_user"]) && 
      isset($_SESSION["sesi_pass"]))
  {
     $sesi_user = $_SESSION["sesi_user"];
     $sesi_pass = $_SESSION["sesi_pass"];	 
  }
  else
  {
     $sesi_user = $_POST["pemakai"] ?? "";
     $sesi_pass = $_POST["sandi"] ?? "";
  }
  
  if (! otentikasi($sesi_user, $sesi_pass))
  {
     $msg = "Harap diisi dengan benar";
     $alamat = "http://$NAMA_SERVER/bab20/loginbin.php";
     header("Location: $alamat?msg=$msg");
     exit();
  }

  // Bentuk variabel sesi
  $_SESSION["sesi_user"] = $sesi_user;
  $_SESSION["sesi_pass"] = $sesi_pass;
?>

<!DOCTYPE html>
<html>
<head> 
<title>Menu Utama Manajemen Data Bintang Film</title>
</head>

<body>
<center>
<h2>Bintang Film</h2>
<hr>
<a href="tambin1.php">Menambah Data</A>
<br>
<a href="dafbin.php">Mengubah/Menghapus Data</A>
<br>
<p>
<h2>Film</h2>
<hr>
<a href="tamfil1.php">Menambah Data</A>
<br>
<a href="daffil.php">Mengubah/Menghapus Data</A>
<br>
<p>
<h2>Bintang Film dan Film</h2>
<hr>
<a href="dafbff.php">Menambah / Menghapus Data</A>
<br>
<p>
<hr>
<a href="logotbin.php">Logout</A>
</center>
</body>
</html>
