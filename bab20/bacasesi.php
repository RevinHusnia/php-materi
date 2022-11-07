<?php
  session_start();

  print("SID : " . session_id() . "<br>\n");
  print("Variabel sesi var_x  <br>\n");  
  print("diakses dari bacasesi.php : <br>\n");

  if (isset($_SESSION["var_x"]))
     print($_SESSION["var_x"]);
  else
     print("tidak ada");
?>
