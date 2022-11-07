<!DOCTYPE html>
<html>
<head>
<title>Mengambil Data Secara Random</title>
</head>
<body>

<?php
  $peserta = array ("Andi", "Siti", "Jatmiko" ,"Edi");

  srand((double) microtime()* 10000000);
  $kunci_random = array_rand($peserta, 2);

  print("Nilai indeks random: <br>\n");
  print("$kunci_random[0] <br>\n");
  print("$kunci_random[1] <br>\n");

  printf("Pemenang pertama : %s<br>\n",
          $peserta[$kunci_random[0]]);

  printf("Pemenang kedua : %s<br>\n",
          $peserta[$kunci_random[1]]);

?>

</body>
</html>
