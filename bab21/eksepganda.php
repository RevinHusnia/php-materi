<!DOCTYPE html>
<html>
<body>

<?php
  function logaritma(int $bilangan)
  {
	  if ($bilangan == 0)
         throw new Exception("Nilai nol tidak diperkenankan");
	  else
		  if ($bilangan < 0)
            throw new Exception("Nilai negatif tidak diperkenankan");
		  
	  return log($bilangan);
  }
  
  $dafbil = array(10, 0,-10);
  foreach($dafbil as $bilangan)
  {
    try
    {
	   print("logaritma($bilangan): ");
       print(logaritma($bilangan) . "<br>\n");
 
    }
    catch(Exception $e)
    { 
       print($e->getMessage() . "<br>");
    }
  }	
?>

</body>
</html>
