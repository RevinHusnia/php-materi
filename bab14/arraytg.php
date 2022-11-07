<?php
  include "tgl2.php";

  $tgl_bersejarah[1] =
    new Kelas_tanggal(17, 8, 1945);

  $tgl = new Kelas_tanggal;
  $tgl_bersejarah[2] = $tgl;

  printf("Tanggal %d/%d/%d <br>\n",
         $tgl_bersejarah[1]->tanggal,
         $tgl_bersejarah[1]->bulan,
         $tgl_bersejarah[1]->tahun);

  printf("Tanggal %d/%d/%d <br>\n",
         $tgl_bersejarah[2]->tanggal,
         $tgl_bersejarah[2]->bulan,
         $tgl_bersejarah[2]->tahun);
?>
