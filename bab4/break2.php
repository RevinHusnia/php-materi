<!DOCTYPE html>
<html>
<head>
<title>Efek Pernyataan break 2</title>
</head>
<body>

<?php
  for ($i = 1; $i <= 25; $i++)
  {
     switch ($i)
     {
        case 5:
           print("5 - break 1 <br>\n");
           break 1;
        case 7:
           print("7 - break 2 <br>\n");
           break 2;
        default:
           print("$i <br>\n");
           break;
     }
  }

  print("Selesai <br>\n");
?>

</body>
</html>
