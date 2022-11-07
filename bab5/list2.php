<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Isi Array Menggunakan Pointer</title>
</head>
<body>

<?php
    
  $hari["Sunday"]    = "Minggu";
  $hari["Monday"]    = "Senin";
  $hari["Tuesday"]   = "Selasa";
  $hari["Wednesday"] = "Rabu";
  $hari["Thursday"]  = "Kamis";
  $hari["Friday"]    = "Jumat";
  $hari["Saturday"]  = "Sabtu";

  // Menampilkan semua elemen
  while ( list($indeks, $nilai) = each($hari) )
     print("Indeks: $indeks -> Nilai: $nilai <br>\n");

?>

</body>
</html>
