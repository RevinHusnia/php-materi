<?php
  function password_valid($pemakai, $password)
  {
    if ( ($pemakai == "user1") and
         ($password == "parkit") )
      return TRUE;

    if ( ($pemakai == "user2") and
         ($password == "merak") )
      return TRUE;

    return FALSE;
  }
?>
