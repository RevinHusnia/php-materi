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

  $msg = $_GET["msg"] ?? "";
  if (empty($msg))
  {
     $kode = $_GET["kode"] ?? "";
     // Koneksi ke database
     $id_mysql = mysqli_connect($NAMA_SERVER,
                                $NAMA_USER,
                                $PASSWORD);
     if (! $id_mysql)
        die ("Gagal koneksi ke database server");

     if (! mysqli_select_db($id_mysql, "binfilm"))
        die ("Gagal memilih database");
   
     $hasil = mysqli_query ($id_mysql,
        "SELECT judul, tahun " .
        " FROM film "       .
        " WHERE kode_film = '$kode'");

     $baris = mysqli_fetch_row($hasil);
     if ($baris == FALSE)
        die("Tak ada data yang memenuhi");

     $judul   = $baris[0];
     $tahun   = $baris[1];

     mysqli_close($id_mysql);
  }
  else
  {
     // Peroleh dari URL
     $kode = $_GET["kode"] ?? "";
     $judul = $_GET["judul"] ?? "";
     $tahun = $_GET["tahun"] ?? "";
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Mengubah Data Film</title>
</head>
<body>
<center>
<form action="ubhfil2.php" method="post">
<table border="1">
  <tr>
    <td>Kode</td>
    <td>
      <?php
        print("$kode");
      ?>
    </td>
  </tr>

  <tr>
    <td>Judul</td>
    <td>
      <?php
        print("<input type=\"text\" name=\"judul\"");
        print(" value=\"$judul\">");
      ?>
    </td>
  </tr>

  <tr>
    <td>Tahun</td>
    <td>
      <select name="tahun">
        <option value="0" selected >Tahun
        <?php
          // Bentuk pilihan tahun dari 1900
          // sampai sekarang

          $sekarang = (integer) date("Y");
          for($i = 1900; $i <= $sekarang; $i++)
          {
            if ($i == $tahun)
              $sel = "selected";
            else
              $sel = "";

            print("<option value=\"$i\" $sel>$i");
          }
        ?>

        </option></select>
    </td>
  </tr>
</table>

<br>

<?php
  print("<input type=\"hidden\" name=\"kode\"");
  print(" value=\"$kode\">");
?>

<input type="submit" value="Simpan">
<input type="button" value="Ke Sebelum ini"
   onclick="self.history.back();">
</form>

<?php
  print($msg);
?>

</center>
</body>
</html>
