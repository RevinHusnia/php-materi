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

  // Peroleh dari URL
  $msg = $_GET["msg"] ?? "";
  $kode = $_GET["kode"] ?? "";
  $nama = $_GET["nama"] ?? "";
  $tanggal = $_GET["tanggal"] ?? "";
  $bulan = $_GET["bulan"] ?? "";
  $tahun = $_GET["tahun"] ?? "";
  $jender = $_GET["jender"] ?? "";
  $kateg = $_GET["kateg"] ?? "";
  $ket = $_GET["ket"] ?? "";

?>

<!DOCTYPE html>
<html>
<head> 
<title>Menambah Data Bintang Film</title>
</head>
<body>
<center>
<form action="tambin2.php" method="post">
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
    <td>Nama</td>
    <td>
      <?php
        print("<input type=\"text\" name=\"nama\"");
        print(" value=\"$nama\">");
      ?>
    </td>
  </tr>

  <tr>
    <td>Tanggal Lahir</td>
    <td>
      <select name="tanggal">
        <option value="0" selected >Tanggal

        <?php
          //Bentuk pilihan tanggal 0 sampai dengan 31
          for($i = 1; $i < 32; $i++)
          {
            if ($tanggal == $i)
              $sel = "selected";
            else
              $sel = " ";

           print("<option value=\"$i\" $sel>$i");
          }
        ?>

        </option></select>

      <select name="bulan">
        <option value="0" selected >Bulan

        <?php
          for($i=1; $i<13; $i++)
          {
            $sel[$i] = " ";

            if ($i == $bulan)
              $sel[$i] = "selected";
          }

          print("<option value=\"1\"  $sel[1]>Januari  ");
          print("<option value=\"2\"  $sel[2]>Februari ");
          print("<option value=\"3\"  $sel[3]>Maret    ");
          print("<option value=\"4\"  $sel[4]>April    ");
          print("<option value=\"5\"  $sel[5]>Mei      ");
          print("<option value=\"6\"  $sel[6]>Juni     ");
          print("<option value=\"7\"  $sel[7]>Juli     ");
          print("<option value=\"8\"  $sel[8]>Agustus  ");
          print("<option value=\"9\"  $sel[9]>September");
          print("<option value=\"10\" $sel[10]>Oktober ");
          print("<option value=\"11\" $sel[11]>November");
          print("<option value=\"12\" $sel[12]>Desember");
        ?>

        </option></select>

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

  <tr>
    <td>Jenis Kelamin</td>
    <td>
      <?php
        $checkedP = "";
        $checkedW = "";
        if ($jender == "W")
          $checkedW = "checked";
        else
          $checkedP = "checked";

        print("<input type=\"radio\" name=\"jender\"");
        print(" value=\"P\" $checkedP >Pria");
        print("<input type=\"radio\" name=\"jender\"");
        print(" value=\"W\" $checkedW >Wanita");
      ?>
    </td>
  </tr>

  <tr>
    <td>Kategori</td>
    <td>
      <?php
        $checked_lok  = "";
        $checked_luar = "";
        if ($kateg == "Y")
          $checked_lok = "checked";
        else
          $checked_luar= "checked";

        print("<input type=\"radio\" name=\"kateg\"");
        print(" value=\"Y\" $checked_lok >Lokal");
        print("<input type=\"radio\" name=\"kateg\"");
        print(" value=\"T\" $checked_luar >Luar");
      ?>
    </td>
  </tr>

  <tr>
    <td>Keterangan</td>
    <td>
      <?php
        print("<textarea rows=\"5\" cols=\"40\"");
        print(" name=\"ket\">$ket</textarea>");
      ?>
    </td>
  </tr>

</table>

<table border="0">
  <tr>
    <td>
      <input type="submit" value="Simpan">
    </td>
    </form>

  <form action="tambin1.php" method="post">
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
