<!DOCTYPE html>
<html>
<head>
<title>Pemanggilan Fungsi Secara Dinamis</title>
</head>
<body>

<?php
  function tulis_miring($teks)
  {
     print("<i>$teks</i>");
  }

  function tulis_tebal($teks)
  {
     print("<b>$teks</b>");
  }

  $var_fungsi = "tulis_miring";
  $var_fungsi("Pemrograman");
  print("<br>\n");

  $var_fungsi = "tulis_tebal";
  $var_fungsi("PHP");

?>

</body>
</html>
