<!DOCTYPE html>
<html>
<head>
<title>Pengaruh Lingkup Global</title>
</head>
<body>

<?php
  function ganti()
  {
     $GLOBALS["bunga"] = "Mawar";
  }

  $bunga = "Melati";
   
  ganti();

  print("$bunga");

?>

</body>
</html>
