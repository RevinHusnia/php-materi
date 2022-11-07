<?php
  include "otentik.php";

  header_dinamis();

  // Mengawali sesi
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
?>

<!DOCTYPE html>
<html>
<head>
<title>Daftar Bintang Film</title>
</head>
<body>
<center>
<h1>Menambah/Menghapus Bintang Film & Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die ("Gagal koneksi ke database server");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die ("Gagal memilih database");
   
  $hasil = mysqli_query($id_mysql,
    "SELECT kode_bintang, nama ".
    " FROM bintang ORDER BY nama");

  print ("<table border=\"1\">\n");
  while ( $baris = mysqli_fetch_row($hasil) )
  {
     print("<tr>");
     print("<td>");
     print("$baris[1]");
     print("</td>");
     print("<td>");
     print("<a href=\"tambff1.php?");
     print("kode_bintang=$baris[0]\">");
     print("Tambah</A>");
     print(" / ");
     print("<a href=\"hpsbff1.php?");
     print("kode_bintang=$baris[0]\">");
     print("Hapus</A>");
     print("</td></tr>");
  }

  print("</table>");

  mysqli_close($id_mysql);
?>

<br>
<hr>
<a href="menubin.php">Menu Utama</a>

</center>
</body>
</html>
