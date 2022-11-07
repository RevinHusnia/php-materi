<?php
  class Kelas_bata
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
