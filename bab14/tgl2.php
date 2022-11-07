<?php
  class Kelas_tanggal
  {
      // Properti
      var $tanggal;
      var $bulan;
      var $tahun;

      // Metode
      function Kelas_tanggal($tg = 1,
                             $bl = 9,
                             $th = 1964)
      {
         $this->tanggal = $tg;
         $this->bulan   = $bl;
         $this->tahun   = $th;

         print("Konstruktor dijalankan<br>\n");
      }

      function set_tanggal($tg, $bl, $th)
      {
         $this->tanggal = $tg;
         $this->bulan   = $bl;
         $this->tahun   = $th;
      }
  }
?>
