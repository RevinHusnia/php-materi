<!DOCTYPE html>
<html>
<body>

<?php
  //error_reporting(0);
  function pembagian(float $a, float $b)
  {
	  $hasil = $a / $b;
	  return $hasil;
  }
  
  $a = 5;
  $b = 2;
  print("$a / $b = " . pembagian($a, $b) . "<br>\n");
  
  $b = 0;
  print("$a / $b = " . pembagian($a, $b) . "<br>\n");
?>

</body>
</html>
