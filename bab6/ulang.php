<!DOCTYPE html>
<html>
<head>
<title>Contoh Nilai Argumen Bawaan</title>
</head>
<body>

<?php
  function tulis_kar($teks, $jumlah = 1)
  {
     for ($i = 1; $i <= $jumlah; $i++)
        print($teks);
  }

  Tulis_kar("P", 5);
  print("<br>\n");
  tulis_kar("+");
  print("<br>\n");
  tulis_kar("+", 1);
?>

</body>
</html>
