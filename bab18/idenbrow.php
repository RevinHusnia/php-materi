<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Nama Browser</title>
</head>
<body>

<?php
  print("Browser: ");
  $id_browser = $_SERVER["HTTP_USER_AGENT"];
  print($id_browser);
?>

</body>
</html>
