<!DOCTYPE html>
<html>
<head>
<title>Efek Pernyataan continue</title>
</head>
<body>

<?php
  for ($i = 1; $i <= 5; $i++)
  {
     print("Proses for. Iterasi ke-$i <br>\n");

     for ($j = 1; $j <= 5; $j++)
     {
        if ($j == 3)
           continue 1;

        print($j);
     }

     print("<br>\n");

  }

?>

</body>
</html>
