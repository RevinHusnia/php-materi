<!DOCTYPE html>
<html>
<head>
<title>Pengaruh Lingkup Global</title>
</head>
<body>

<?php
  function ganti()
  {
     global $bunga;

     $bunga = "Mawar";
  }

  $bunga = "Melati";

  ganti();

  print("$bunga");

?>

</body>
</html>
