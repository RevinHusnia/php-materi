<!DOCTYPE html>
<html>
<head>
<title>Latihan Menentukan Nama Hari</title>
</head>

Hari ini 
<?php
  $nama_hari = date("D");
  if ($nama_hari == "Sun")
     print(" hari Minggu");
  else
     print(" bukan hari Minggu");
?>

</body>
</html>
