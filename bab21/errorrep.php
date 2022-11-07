<!DOCTYPE html>
<html>
<body>

<?php
  error_reporting(0);

  $fp = fopen("takada", "r");
  $data = fgets($fp, 255);
  print($data);
?>

</body>
</html>
