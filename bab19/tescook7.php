<?php
  if (isset($_COOKIE["hari"]))
    while (list($nama, $nilai) = each($_COOKIE["hari"]))
    {
      print("$nama : $nilai <br>\n");
    }
  else
    print("Cookie hari tidak ada");
?>
