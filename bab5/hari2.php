<!DOCTYPE html>
<html>
<head>
<title>Menentukan Nama Hari Memakai Array</title>
</head>
<body>

<?php
    
  $hari = array("Sunday" => "Minggu",
                "Monday" => "Senin",
                "Tuesday" => "Selasa",
                "Wednesday" => "Rabu",
                "Thursday"=> "Kamis",
                "Friday" => "Jumat",
                "Saturday" => "Sabtu");

  $hari_inggris = date("l");
  print("Hari ini hari $hari[$hari_inggris]");

?>

</body>
</html>
