<?php
  session_start();

  print("Session_id : " .
        session_id() . "<br>\n");

  session_destroy();

  print("Setelah sesi ditutup<br>\n");
  print("Session_id : " .
        session_id() . "<br>\n");
?>
