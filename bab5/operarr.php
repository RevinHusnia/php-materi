<!DOCTYPE html>
<html>
<head>
<title>Menguji Operator Array</title>
</head>
<body>

<?php
$musik1 = array("j" => "jazz", "b" => "blues");
$musik2 = array("j" => "jazz", "k" => "keroncong", 
                "p" => "pop");
$musik3 = array("b" => "blues", "j" => "jazz");

print("Isi \$musik1: <br>\n");
foreach ($musik1 as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

print("Isi \$musik2: <br>\n");
foreach ($musik2 as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

$gab = $musik1 + $musik2;
print("Gabungan \$musik1 dan  \$musik2: <br>\n");
foreach ($gab as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

$gab = $musik2 + $musik1;
print("Gabungan \$musik2 dan  \$musik1: <br>\n");
foreach ($gab as $indeks => $nilai)
     print("$indeks -> $nilai <br>\n");

print("Apakah \$musik1 dan \$musik3 sama? ");
$jawab = ($musik1 == $musik3) ? "Ya" : "Tidak";
print("$jawab<br>\n");

print("Apakah \$musik1 dan \$musik3 identik? ");
$jawab = ($musik1 === $musik3) ? "Ya" : "Tidak";
print("$jawab<br>\n");

?> 

</body>
</html>
