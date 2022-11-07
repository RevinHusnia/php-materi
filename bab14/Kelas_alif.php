<?php
  class Kelas_alif
  {
     // Properti
     var $nilai;

     // Konstruktor
     function __construct($nl)
     {
        $this->nilai = $nl;
     }

     // Metode
     function tampil_nilai()
     {
        print("Nilai: $this->nilai<br>\n");
     }
  }
?>
