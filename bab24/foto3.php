<?php
  if (empty($_GET["kode"]))
     die("Salah pemanggilan");
 
  $kode = $_GET["kode"];

  // Koneksi ke database
  $id_mysql = mysqli_connect("localhost",
                             "php",
                             "007php");
  if (! $id_mysql)
     die ("Gagal koneksi ke database server");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die ("Gagal memilih database");
   
  $hasil = mysqli_query ($id_mysql,
    "SELECT nama, tgl_lahir, " .
    "lokal, jender, keterangan, foto "  .
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
  $foto    = $baris[5];

  mysqli_close($id_mysql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Menambahkan Foto Bintang Film</title>
</head>
<body>
<center>

<table border="1">
  <tr>
    <td>Kode</td>
    <td>
      <?php
        print($kode);
      ?>
    </td>

    <td rowspan="6">
    <?php
      if (empty($foto))
         $foto = "belumada.png";

      print("<img src=\"../citra/$foto\">");
    ?>

    </td>
  </tr>

  <tr>
    <td>Nama</td>
    <td>
      <?php
        print("$nama");
      ?>
    </td>
  </tr>

  <tr>
    <td>Tanggal Lahir</td>
    <td>
      <?php
        print("$tanggal/$bulan/$tahun");
      ?>
    </td>
  </tr>

  <tr>
    <td>Jenis Kelamin</td>
    <td>
      <?php
        if ($jender == "W")
          print("Wanita");
        else
          print("Pria");
      ?>
    </td>
  </tr>

  <tr>
    <td>Kategori</td>
    <td>
      <?php
        if ($kateg == "Y")
          print("Bintang film lokal");
        else
          print("Bintang film luar");
      ?>
    </td>
  </tr>

  <tr>
    <td>Keterangan</td>
    <td>
      <?php
        print("$ket");
      ?>
    </td>
  </tr>

</table>

<form action="foto2.php" method="post"
      enctype="multipart/form-data">

<br>
<?php
  print("<input type=\"hidden\" name=\"kode\"");
  print(" value=\"$kode\">");
?>

Foto :
<input type="file" name="namafile">
<input type="submit" value="Upload">
<input type="button" value="Ke Sebelum ini"
   onclick="self.history.back();">
</form>

</center>
</body>
</html>
