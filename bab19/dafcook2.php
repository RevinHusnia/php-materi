<?php
  while (list($nama, $nilai) = each($_COOKIE))
  {
     print("$nama : ");
	 if (is_array($nilai))
		print_r($nilai);
	 else
		print($nilai); 
	
	 print("<br>\n");
  }
?>
