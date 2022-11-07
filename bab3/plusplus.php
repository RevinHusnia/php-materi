<!DOCTYPE html>
<html>
<head>
<title>Contoh Operasi dengan ++ dan --</title>
</head>
<body>

<?php
  print("Efek ++ sebagai akhiran :<br>\n");
  $x = 77;
  print("x = $x <br>\n");
  print(2 + $x++);  print("<br>\n");
  print("x = $x <br>\n");

  print("Efek ++ sebagai awalan :<br>\n");
  $x = 77;
  print("x = $x <br>\n");
  print(2 + ++$x);  print("<br>\n");
  print("x = $x <br>\n");

  print("Contoh operasi dengan -- :<br>\n");
  $x = 77;
  print("x = $x <br>\n");
  $x--;
  print("x = $x <br>\n");
?>

</body>
</html>
