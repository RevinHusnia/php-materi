<?php
  // ------------------------------------
  // Berisi variabel-variabel
  //   yang bersifat umum
  //   dan definisi fungsi header_dinamis
  // ------------------------------------

  $NAMA_SERVER = "127.0.0.1";
  $NAMA_USER   = "php";
  $PASSWORD    = "007php";

  function header_dinamis()
  {
    // Mengatur agar selalu bersifat dinamis
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " .
           gmdate("D, d M Y H:i:s"));
    
    if ($_SERVER["SERVER_PROTOCOL"] == "HTTP/1.0")
      header("Pragma: no-cache");
    else
      header("Cache-Control: no-cache, must-revalidate");
  }
?>
