<?php
  if (! isset($_COOKIE["counter"]))
     $pencacah = 0;
  else
     $pencacah = $_COOKIE["counter"];

  $pencacah++;

  setcookie("counter", $pencacah, 
            time() + 3600 * 24 * 365);
?>

Halo. Anda telah mengunjungi halaman ini

<?php
  print("$pencacah kali");
?>
