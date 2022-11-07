<?php
  include "puswaktu.php";

  $pertemuan =
    new Kelas_waktu(26, 1, 2002, 13, 30);

  print("Tanggal: " .
        $pertemuan->peroleh_tgl() .
        "<br>\n");
  print("jam : " .
        $pertemuan->peroleh_jam() .
        "<br>\n");
?>
