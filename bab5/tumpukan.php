<!DOCTYPE html>
<html>
<head>
<title>Pengurutan Data Secara Alamiah</title>
</head>
<body>

<?php
  // Data array semula

  $tumpukan[0] = "A";
  $tumpukan[1] = "B";
  $tumpukan[2] = "D";

  // Tambah dua buah elemen di akhir array
  $jum = array_push($tumpukan, "E", "F");

  print("Hasil setelah array_push : <br>\n");
  while ( list($indeks, $nilai) = each($tumpukan) )
     print("$nilai ");

  print("<br>\n");

  print("Jumlah elemen = $jum <br>\n");

  // Hapus elemen terakhir
  $nilai = array_pop($tumpukan);

  print("Data yang dihapus: $nilai<br>\n");

  // Tambah dua buah elemen di awal array
  $jum = array_unshift($tumpukan, "X", "Z");

  print("Hasil setelah array_unshift : <br>\n");
  while ( list($indeks, $nilai) = each($tumpukan) )
     print("$nilai ");

  print("<br>\n");

  print("Jumlah elemen = $jum <br>\n");

  // Hapus elemen pertama
  $nilai = array_shift($tumpukan);

  print("Data yang dihapus: $nilai<br>\n");

  // Tampilkan isi array\
  print("Isi tumpukan sekarang : <br>\n");
  while ( list($indeks, $nilai) = each($tumpukan) )
     print("$nilai ");

  print("<br>\n");

?>

</body>
</html>
