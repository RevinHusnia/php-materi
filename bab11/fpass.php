<!DOCTYPE html>
<html>
<head>
<title>Contoh fpassthru</title>
</head>
<body>

<?php
  $website = "http://www.google.com";
  $berkas = fopen($website, "r");
  if ($berkas)
     fpassthru($berkas);
  else
     print("Berkas $website tidak dapat dibuka");
?>

</body>
</html>
