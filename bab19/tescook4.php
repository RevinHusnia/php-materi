<?php
  // Menghapus cookie
  $nama = $_COOKIE["nama"] ?? "";
  print("Isi nama semula : $nama");
  print("<br>\n");

  setcookie("nama");

  $nama = $_COOKIE["nama"] ?? "";
  print("Isi nama sekarang : $nama");
  print("<br>\n");
?>
