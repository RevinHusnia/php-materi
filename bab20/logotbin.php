<?php
  include "umum.php";

  session_start();
  session_destroy();

  $alamat = "http://$NAMA_SERVER/bab20/loginbin.php";
  header("Location: $alamat");
?>
