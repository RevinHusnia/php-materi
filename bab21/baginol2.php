<!DOCTYPE html>
<html>
<body>

<?php
  function pembagian(float $a, float $b)
  {
	  if ($b == 0)
		  throw new Exception("Pembagian dengan nol");
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
