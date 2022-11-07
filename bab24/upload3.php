<!DOCTYPE html>
<html>
<head>
<title>Proses Upload</title>
</head>
<body>

<?php
  if (empty($_FILES["namafile"]))
     die ("Tidak bisa mengunggah file");

  $file_sementara = $_FILES["namafile"]["tmp_name"];
  $namafile = $_FILES["namafile"]["name"];

  if (copy($file_sementara, 
      "c:/wamp/www/citra/$namafile"))
  {
     print("Berkas $namafile_name telah disalin");
     unlink($file_sementara);
  }
  else
     print("Gagal menyalin $namafile");

?>

</body>
</html>
