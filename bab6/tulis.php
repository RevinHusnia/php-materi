<!DOCTYPE html>
<html>
<head>
<title>Contoh Fungsi</title>
</head>
<body>

<?php
  function tulis_tebal($teks)
  {
     print("<b>$teks</b><br>\n"); 
  }

  tulis_tebal("Perhatian !");
  tulis_tebal("Baris ini dicetak tebal");
  print("Baris ini tidak tebal<br>\n");
?>

</body>
</html>
