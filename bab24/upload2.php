<!DOCTYPE html>
<html>
<head>
<title>Proses Upload</title>
</head>
<body>

<?php
  if (empty($_FILES["namafile"]))
     print("File tidak dapat di-upload");
  else
  {
     $datafile = $_FILES["namafile"];
     $namafile = $datafile["name"];
     $tipe = $datafile["type"];
     $ukuran = $datafile["size"];
     $file_sementara = $datafile["tmp_name"];

     print("Nama file: $namafile<br>\n");
     print("Ukuran: $ukuran<br>\n");
     print("Tipe: $tipe<br>\n");
     print("Nama file sementara: $file_sementara<br>\n");
  }
?>

</body>
</html>
