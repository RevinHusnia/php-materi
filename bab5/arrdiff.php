<!DOCTYPE html>
<html>
<head>
<title>Contoh Pemakaian array_diff()</title>
</head>
<body>

<?php
  $daftar_1 = array ("Pisang", "Mangga", "Kelengkeng" ,
                     "Apel", "Jeruk");
  $daftar_2 = array ("Apel", "Mangga", "Rambutan" ,"Pepaya");

  $perbedaan = array_diff($daftar_1, $daftar_2);

  foreach ($perbedaan as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

?>

</body>
</html>
