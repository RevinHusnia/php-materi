<?php
  include "otentik.php";

  print("Tes pertama<br>\n");
  if (otentikasi("bintang1", "bintang1"))
     print("Valid<br>\n");
  else
     print("Tidak valid<br>\n");
  print("<hr>");
  print("Tes kedua<br>\n");
  if (otentikasi("bintang", "di langit"))
     print("Valid<br>\n");
  else
     print("Tidak valid<br>\n");

?>
