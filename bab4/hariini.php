<!DOCTYPE html>
<html>
<head>
<title>Latihan Menentukan Nama Hari</title>
</head>
<body>
Hari ini:  
<?php
  $nama_hari = date("l");
  if ($nama_hari == "Sunday")
     print("Minggu");
  elseif ($nama_hari == "Monday")
     print("Senin");
  elseif ($nama_hari == "Tuesday")
     print("Selasa");
  elseif ($nama_hari == "Wednesday")
     print("Rabu");
  elseif ($nama_hari == "Thursday")
     print("Kamis");
  elseif ($nama_hari == "Friday")
     print("Jumat");
  else
     print("Sabtu");
?>

</body>
</html>
