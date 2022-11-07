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
?>

<!DOCTYPE html>
<html>
<head> 
<title>Menghapus Bintang Film & Film</title>
</head>
<body>
<center>

<?php

  $kode_bintang = $_GET["kode_bintang"] ?? "";

  // Koneksi ke database
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die ("Gagal koneksi ke database server");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die ("Gagal memilih database");

  $hasil = mysqli_query ($id_mysql,
    "SELECT nama FROM bintang " .
    " WHERE kode_bintang = '$kode_bintang'");

  $baris = mysqli_fetch_row($hasil);
  if ($baris == FALSE)
     die("Tak ada data yang memenuhi");

  print("<h2>Bintang Film: $baris[0]</h2><br>\n");
  print("Centang film yang akan dihapus<br>\n");
  print("<hr>");

  $hasil = mysqli_query ($id_mysql,
    "SELECT main.kode_film, film.judul ".
    " FROM main, film " .
    " WHERE main.kode_bintang = '$kode_bintang' AND" .
    " film.kode_film = main.kode_film " .
    " ORDER BY film.judul");

   mysqli_close($id_mysql);
?>

<form action="hpsbff2.php" method="post">
<table>
<tr>
<td>
<?php
  $daftar = array();
  $i = 0;
  while ($baris = mysqli_fetch_row($hasil))
  {
     
     print("<input type=\"checkbox\" name=\"kf[$i]\">");
     print("$baris[1] <br>\n");
     array_push($daftar, $baris[0]);
	 $i++;
  }

  $_SESSION["daftar"] = $daftar;

  $ada_film = ($i > 0 ? TRUE : FALSE);
  if (! $ada_film)
     print("Tak ada data film");
?>
</td>
</tr>
</table>

<br>

<?php
  print("<input type=\"hidden\" ");
  print("name=\"kode_bintang\"");
  print(" value=\"$kode_bintang\">");

  if ($ada_film)
     print("<input type=\"submit\" value=\"Hapus\">");
?>

<input type="button" value="Ke Sebelum ini"
   onclick="self.history.back();">
</form>
</center>
</body>
</html>
