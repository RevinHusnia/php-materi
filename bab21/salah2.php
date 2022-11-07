<!DOCTYPE html>
<html>
<body>

<?php
  $fp = fopen("takada", "r");
  $data = fgets($fp, 255);
  print($data);
?>

</body>
</html>
