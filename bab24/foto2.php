<!DOCTYPE html>
<html>
<head>
<title>Proses Upload</title>
</head>
<body>
<center>

<?php
  if (empty($_FILES["namafile"]))
     die ("Tak ada berkas yang di-upload");

  if (empty($_POST["kode"]))
     die ("Salah penggunaan");

  $kode = $_POST["kode"];
  $namafile = $_FILES["namafile"]["name"];
  $file_sementara = $_FILES["namafile"]["tmp_name"];

  // Koneksi ke database
  $id_mysql = mysqli_connect("localhost",
                             "php",
                             "007php");
  if (! $id_mysql)
     die ("Gagal koneksi ke database server");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die ("Gagal memilih database");

  // Salin berkas
  if (copy($file_sementara, 
      "C:/xampp/htdocs/citra/$namafile"))
  {
     print("Berkas $namafile telah disalin");
     print("<br>\n");
     unlink($file_sementara);

     // Simpan ke tabel bintang
     $hasil = mysqli_query ($id_mysql,
       "UPDATE bintang " .
       "  SET foto = '$namafile'" .
       "  WHERE kode_bintang = '$kode'");

     // Menampilkan foto
     print("<img src=\"../citra/$namafile\">");
  }
  else
     print("Gagal menyalin $namafile");
?>

</center>
</body>
</html>
