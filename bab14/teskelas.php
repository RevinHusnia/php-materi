<?php
  function __autoload($nama_kelas) {
     require_once $nama_kelas . '.php';
  }

  $x = new Kelas_alif(5);
  $x->tampil_nilai();

  $y = new Kelas_alif(7);
  $y->tampil_nilai();

?>
