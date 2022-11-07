<!DOCTYPE html>
<html>
<head>
<title>Contoh untuk Memperlihatkan Efek exit</title>
</head>
<body>

<?php
  for($i = 1; $i <= 25; $i++)
  {
     print("$i <br>\n");

     if ($i == 10)
        exit;
  }

  print("Selesai <br>\n");
?>

</body>
</html>
