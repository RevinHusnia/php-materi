<?php
  include "tgl2.php";

  $tgl1 = new Kelas_tanggal;

  printf("Tanggal %d/%d/%d <br>\n",
         $tgl1->tanggal,
         $tgl1->bulan,
         $tgl1->tahun);

  $tgl2 = new Kelas_tanggal(24, 6, 1965);
  printf("Tanggal %d/%d/%d <br>\n",
         $tgl2->tanggal,
         $tgl2->bulan,
         $tgl2->tahun);

?>
