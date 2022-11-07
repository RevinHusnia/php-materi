<?php
  class Kelas_tanggal
  {
     // Properti
     var $tanggal;
     var $bulan;
     var $tahun;

     // Metode
     function set_tanggal($tg, $bl, $th)
     {
        $this->tanggal = $tg;
        $this->bulan   = $bl;
        $this->tahun   = $th;
     }
  }
?>
