<!DOCTYPE html>
<html>
<head>
<title>Contoh Operator Relasional</title>
</head>
<body>

<?php
  $a  = 1;
  $b  = 2;
  $c  = 1;
  $S1 = "Halo";
  $S2 = "HALO";

  printf("$a > $b  -> %d<br>\n", $a > $b);
  printf("$b > $a  -> %d<br>\n", $b > $a);
  printf("$a < $b  -> %d<br>\n", $a < $b);
  printf("$a == $c -> %d<br>\n", $a == $c);
  printf("$a == $b -> %d<br>\n", $a == $b);
  printf("$a != $c -> %d<br>\n", $a != $c);
  printf("$a <> $c -> %d<br>\n", $a <> $c);
?>

</body>
</html>
