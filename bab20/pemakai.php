<?php
  include "umum.php";

  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database server MySQL tak dapat dikoneksi");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  // Kosongkan tabel
  mysqli_query($id_mysql,
    "DELETE FROM pemakai") or
    die("Tak dapat menghapus tabel");
 
  $pass1 = md5('bintang1');
  mysqli_query($id_mysql,
    "INSERT INTO pemakai " .
    "VALUES ('bintang1', '$pass1')") or
    die("Tak dapat menambahkan data 1");

  $pass2 = md5('bintang2');
  mysqli_query($id_mysql,
    "INSERT INTO pemakai " .
    "VALUES ('bintang2', '$pass2')") or
    die("Tak dapat menambahkan data 2");

  print("Data password sudah ditambahkan;");
?>
