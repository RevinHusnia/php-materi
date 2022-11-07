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
<title>Menambah Bintang Film & Film</title>
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
  
  $hasil = mysqli_query ($id_mysql,
    "SELECT kode_film, judul " .
    " FROM film " .
    " ORDER BY judul");
?>

<form action="tambff2.php" method="post">
<table border="0">
  <tr>
    <td>Judul Film:</td>
    <td>
      <?php
        $_SESSION["daf_film"] = array();
        $i = 0;
        while ($baris = mysqli_fetch_row($hasil))
        {
		    // Baca data di tabel main
		    $hasil_main = mysqli_query ($id_mysql,
               "SELECT * " .
               " FROM main " .
               " WHERE kode_bintang = \"$kode_bintang\" AND " .
			   " kode_film = \"$baris[0]\"");
			if (mysqli_affected_rows($id_mysql) == 0)
            {
		       // Buat kotak cek	
               print("<input type=\"checkbox\" name=\"kf[$i]\">");
               print("$baris[1]");
               array_push($_SESSION["daf_film"], $baris[0]);
		       $i++;
			} 
        }

      ?>
    </td>
  </tr>
</table>

<br>

<?php
  print("<input type=\"hidden\" ");
  print("name=\"kode_bintang\"");
  print(" value=\"$kode_bintang\">");
?>

<input type="submit" value="Simpan">
<input type="button" value="Ke Sebelum ini"
   onclick="self.history.back();">
</form>
</center>
</body>
</html>
