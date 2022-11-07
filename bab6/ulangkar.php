<!DOCTYPE html>
<html>
<head>
<title>Contoh Fungsi dengan Dua Argumen</title>
</head>
<body>

<?php
  function tulis_kar($teks, $jumlah)
  {
     for ($i = 1; $i <= $jumlah; $i++)
        print($teks);
  }

  tulis_kar("P", 5);
  print("<br>\n");
  tulis_kar("+", 10);
?>

</body>
</html>
