<!DOCTYPE html>
<html>
<head>
<title>Latihan Menentukan Nama Hari</title>
</head>
<body>
Hari ini:  
<?php
  $nama_hari = date("l");
  switch ($nama_hari)
  {
     case "Sunday" :
        print("Minggu");
        break;
     case "Monday" :
        print("Senin");
        break;
     case "Tuesday" :
        print("Selasa");
        break;
     case "Wednesday" :
        print("Rabu");
        break;
     case "Thursday" :
        print("Kamis");
        break;
     case "Friday" :
        print("Jumat");
        break;
     default :
        print("Sabtu");
  }
?>

</body>
</html>
