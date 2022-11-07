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
  $kode = $_GET["kode"] ?? "";
  $judul = $_GET["judul"] ?? "";
  $tahun = $_GET["tahun"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
<title>Menambah Data Film</title>
</head>
<body>
<center>
<form action="tamfil2.php" method="post">
<table border="1">
  <tr>
    <td>Kode</td>
    <td>
      <?php
        print("<input type=\"text\" name=\"kode\"");
        print(" value=\"$kode\" maxlength=\"5\">");
      ?>
    </td>
  </tr>

  <tr>
    <td>Judul Film</td>
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

<table border="0">
  <tr>
    <td>
      <input type="submit" value="Simpan">
    </td>
    </form>

  <form action="tamfil1.php" method="post”>
    <td>
      <input type="submit" value="Reset">
    </td>
  </form>

  </tr>
</table>

<?php
  print("$msg<br>\n");
?>

</center>
</body>
</html>
