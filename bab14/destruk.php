<?php
  class Kelas_x
  {
     // Properti
     var $alfa;
     var $beta;

     // Konstruktor
     function __construct($a = 1,
                          $b = 0)                         
     {
        $this->alfa = $a;
        $this->beta = $b;

        print("Konstruktor dijalankan<br>\n");
     }

     // Destruktor
     function __destruct()                         
     {
        print("Destruktor dijalankan<br>\n");
     }

     // Metode

     function tampil_nilai()
     {
        printf("alfa = $this->alfa, " .
               "beta = $this->beta <br>\n");
     }       
  }

  // Bentuk objek
  $obj =  new Kelas_x();
  $obj->tampil_nilai();
  
  print("Skrip mau berakhir<br>\n");
?>
