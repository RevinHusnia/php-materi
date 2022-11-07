<?php
  include_once "tgl2.php";

  class Kelas_waktu extends Kelas_tanggal
  {
     // Properti tambahan
     var $jam;
     var $menit;

     // Konstruktor
     function __construct($tg, $bl, $th,
                          $jm=12, $mn=0)
     {
        parent::__construct();

        $this->jam     = $jm;
        $this->menit   = $mn;

        print("Konstruktor kelas_waktu dijalankan<br>\n");
     }

     // Metode
     function peroleh_tgl()
     {
        return "$this->tanggal" .
               "/$this->bulan" .
             "/$this->tahun";
     }

     function peroleh_jam()
     {
        return "$this->jam:$this->menit";
     }
  }

?>
