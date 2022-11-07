<!DOCTYPE html>
<html>
<head>
<title>Contoh untuk Memperlihatkan Efek continue</title>
</head>
<body>

<?php
  for($i = 1; $i <= 25; $i++)
  {
     if ($i >= 10 and $i <= 15)
        continue;

     print("$i <br>\n");
  } 
?>

</body>
</html>
