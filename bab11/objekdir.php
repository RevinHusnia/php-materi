<!DOCTYPE html>
<html>
<head>
<title>Contoh Membaca Isi Direktori</title>
</head>
<body>

<?php
  $direktori = dir(".");
  while ($entri = $direktori->read())
     print("$entri <br>\n");

  $direktori->close();
?>

</body>
</html>
