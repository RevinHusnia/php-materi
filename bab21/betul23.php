<!DOCTYPE html>
<html>
<body>

<?php
  $fp = @fopen("takada", "r") or
        die ("Berkas takada tidak ditemukan");

  $data = fgets($fp, 255);
  print($data);

?>

</body>
</html>
