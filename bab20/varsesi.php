<?php
  session_start();

  $_SESSION["var_x"] = "123456";

  print("Pengenal sesi: " .
        session_id() . "<br>\n");
  print("Isi variabel sesi : " .
        $_SESSION["var_x"]);
?>
