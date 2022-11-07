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

  $kode = $_GET["kode"] ?? "";
  if (empty($kode))
     die("Harus dipanggil melalui menu (dafbin.php)");

  $msg = $_GET["msg"] ?? ""; 
  if (empty($msg))
  {
     // Koneksi ke database
     $id_mysql = mysqli_connect($NAMA_SERVER,
                                $NAMA_USER,
                                $PASSWORD);
     if (! $id_mysql)
        die ("Gagal koneksi ke database server");

     if (! mysqli_select_db($id_mysql, "binfilm"))
        die ("Gagal memilih database");
   
     $hasil = mysqli_query ($id_mysql,
       "SELECT nama, tgl_lahir, " .
       "lokal, jender, keterangan "  .
       " FROM bintang "           .
       " WHERE kode_bintang = '$kode'");

     $baris = mysqli_fetch_row($hasil);
     if ($baris == FALSE)
        die("Tak ada data yang memenuhi");

     $nama    = $baris[0];
     $tahun   = substr($baris[1], 0, 4);
     $bulan   = substr($baris[1], 5, 2);
     $tanggal = substr($baris[1], 8, 2);
     $kateg   = $baris[2];
     $jender     = $baris[3];
     $ket     = $baris[4];

     mysqli_close($id_mysql);
  }
  else 
  {
     // berasal dari URL
     $nama = $_GET["nama"] ?? "";   
     $tahun = $_GET["tahun"] ?? ""; 
     $bulan = $_GET["bulan"] ?? ""; 
     $tanggal = $_GET["tanggal"] ?? ""; 
     $kateg = $_GET["kateg"] ?? "";
     $jender = $_GET["jender"] ?? ""; 
     $ket = $_GET["ket"] ?? ""; 
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Mengubah Data Bintang Film</title>
</head>
<body>
<center>

<form action="ubhbin2.php" method="post">
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
            if (intval($tanggal) == $i)
              $sel = "selected";
            else
              $sel = " ";

           print("<option value=\"$i\" $sel>$i");
          }
        ?>

        </option></select>

      <select name="bulan">
        <?php
          for($i=0; $i<13; $i++)
          {
            if ($i == intval($bulan))
              $opsisel[$i] = "selected";
		    else
			  $opsisel[$i] = " ";
          }

		  print("<option value=\"0\"  $opsisel[0]>Bulan $bulan $sel[0] ");
          print("<option value=\"1\"  $opsisel[1]>Januari  ");
          print("<option value=\"2\"  $opsisel[2]>Februari ");
          print("<option value=\"3\"  $opsisel[3]>Maret    ");
          print("<option value=\"4\"  $opsisel[4]>April    ");
          print("<option value=\"5\"  $opsisel[5]>Mei      ");
          print("<option value=\"6\"  $opsisel[6]>Juni     ");
          print("<option value=\"7\"  $opsisel[7]>Juli     ");
          print("<option value=\"8\"  $opsisel[8]>Agustus  ");
          print("<option value=\"9\"  $opsisel[9]>September");
          print("<option value=\"10\" $opsisel[10]>Oktober ");
          print("<option value=\"11\" $opsisel[11]>November");
          print("<option value=\"12\" $opsisel[12]>Desember");
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
        print(" value=\"W\" $checkedW>Wanita");
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
        print(" value=\"T\" $checked_luar>Luar");
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
