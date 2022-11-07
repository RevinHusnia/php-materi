<!DOCTYPE html>
<html>
<head>
<title>Array Berdimensi Dua</title>
</head>
<body>

<?php
  // Membuat array berdimensi dua

  $peserta = array
     ("PHP"    => array("Anto", "Edi", "Sita"),
      "Delphi" => array("Anto", "Rina"),
      "MySQL"  => array("Nana", "Dito", "Ika", "Setia"),
      "C++"    => array("Ika", "Sari", "Joned"),
      "PERL"   => array("Nana", "Irvan"));

  // Menampilkan isi array
  while ( list($indeks1, $nilai1) = each($peserta) )
  {
     print("Peserta $indeks1 : <br>\n");

     $nomor = 1;
     while ( list($indeks2, $nilai2) = each($nilai1) )
     {
        print("$nomor. $nilai2 <br>\n");
        $nomor++;
     }
  }
?>

</body>
</html>
