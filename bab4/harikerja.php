<!DOCTYPE html>
<html>
<head>
<title>Efek peniadaan break pada switch</title>
</head>
<body>
<?php
  $nama_hari = date("l");
  switch ($nama_hari)
  {
     case "Monday" :
     case "Tuesday" :
     case "Wednesday" :
     case "Thursday" :
     case "Friday" :
        print("Hari kerja");
        break;
     case "Saturday" :
     case "Sunday" :
        print("Hari libur");
  }
?>
