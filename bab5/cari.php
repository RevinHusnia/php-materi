<!DOCTYPE html>
<html>
<head>
<title>Pengurutan Data Secara Alamiah</title>
</head>
<body>

<?php
  // Data array 

  $tumpukan[0] = "A";
  $tumpukan[1] = "B";
  $tumpukan[2] = "C";
  $tumpukan[3] = "X";

  printf("Apakah X ada di tumpukan: ? %s <br>\n",
         in_array("X", $tumpukan) ? "Ya" : "Tidak");

  printf("Apakah Y ada di tumpukan: ? %s <br>\n",
         in_array("Y", $tumpukan) ? "Ya" : "Tidak");

?>

</body>
</html>
