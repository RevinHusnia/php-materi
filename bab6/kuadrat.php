<!DOCTYPE html>
<html>
<head>
<title>Contoh Fungsi dengan Nilai Balik</title>
</head>
<body>

<?php
  function kuadrat($bilangan)
  {
     $tmp = $bilangan * $bilangan;
     return $tmp;
  }

  printf(kuadrat(5));
  print("<br>\n");
  printf(kuadrat(5.5));
?>

</body>
</html>
