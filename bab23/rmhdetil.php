<?php
  $id = $_GET["id"] ?? "";
  if (empty($id))
     die("Identitas rumah tidak tersedia");

  $pemakai  = "php";
  $password = "007php";
  $id_mysql = mysqli_connect("localhost",
                             $pemakai,
                             $password);
  if (! $id_mysql)
     die("Database server MySQL tak dapat dikoneksi");

  if (! mysqli_select_db($id_mysql, "tes"))
     die("Database tidak bisa dipilih");

  $hasil = mysqli_query($id_mysql,
    "SELECT * FROM rumah WHERE id_rumah = '$id'");

  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

  $baris = mysqli_fetch_row($hasil);
  print("Kode rumah : $baris[0]<BR>\n");
  print("Luas tanah : $baris[1]<BR>\n");
  print("Luas bangunan : $baris[2]<BR>\n");

  if ($baris[3] == "B")
     $status_rumah = "Belum terjual";
  else
     $status_rumah = "Sudah terjual";

  print("Status : $status_rumah<BR>\n");
?>
