<?php
  session_start();

  print("SID : " . session_id() . "<br>\n");
  print("Variabel sesi var_x  <br>\n");
  print("diakses dari unreg.php : ");
  print($_SESSION["var_x"] . " <br>\n");

  unset($_SESSION["var_x"]);

  print("Isi var_x setelah di-unregister: ");
  if (isset($SESSION["var_x"]))
     print($_SESSIOIN["var_x"]);
  else
     print("tidak ada");        

  print("<br>\nSID : " . session_id() . "<br>\n");
?>
