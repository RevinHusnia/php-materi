<!DOCTYPE html>
<html>
<head>
<title>Operasi Pointer Internal pada Array</title>
</head>
<body>

<?php
  $data["A"] = "Sangat Baik";
  $data["B"] = "Baik";
  $data["C"] = "Cukup";
  $data["F"] = "Gagal";

  // Contoh penggunaan current dan key
  print("<B>Setelah pendefinisian array </B><br>\n");

  $indeks = key($data);
  $nilai  = current($data);
  print("Indeks sekarang       : $indeks <br>\n");
  print("Nilai elemen sekarang : $nilai <br>\n");

  // Contoh penggunaan end
  $nilai = end($data); // Ke elemen terakhir
  $indeks = key($data);

  print("<B>Setelah pemanggilan end </B><br>\n");
  print("Indeks sekarang       : $indeks <br>\n");
  print("Nilai elemen sekarang : $nilai <br>\n");

  // Contoh penggunaan prev
  $nilai = prev($data); // Ke elemen sebelumnya
  $indeks = key($data);

  print("<B>Setelah pemanggilan prev </B><br>\n");
  print("Indeks sekarang       : $indeks <br>\n");
  print("Nilai elemen sekarang : $nilai <br>\n");

  // Contoh penggunaan reset
  $nilai = reset($data); // Ke elemen pertama
  $indeks = key($data);

  print("<B>Setelah pemanggilan reset </B><br>\n");
  print("Indeks sekarang       : $indeks <br>\n");
  print("Nilai elemen sekarang : $nilai <br>\n");

  // Contoh penggunaan next
  $nilai = next($data); // Ke elemen berikutnya
  $indeks = key($data);

  print("<B>Setelah pemanggilan next </B><br>\n");
  print("Indeks sekarang       : $indeks <br>\n");
  print("Nilai elemen sekarang : $nilai <br>\n");
?>

</body>
</html>
