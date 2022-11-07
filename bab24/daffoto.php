<!DOCTYPE html>
<html>
<head>
<title>Daftar Bintang Film</title>
</head>
<body>
<center>
<h1>daftar bintang film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect("localhost",
                             "php",
                             "007php");
  if (! $id_mysql)
     die ("Gagal koneksi ke database server");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die ("Gagal memilih database");
   
  $hasil = mysqli_query($id_mysql,
    "SELECT kode_bintang, nama ".
    " FROM bintang ORDER BY nama");

  print ("<table border=\"1\">\n");
  while ( $baris = mysqli_fetch_row($hasil) )
  {
     print("<tr>");
     print("<td>");
     print("$baris[1]");
     print("</td>");
     print("<td>");
     print("<a href=\"foto.php?kode=$baris[0]\">");
     print("Foto</a>");
     print("</td></tr>");
  }

  print("</table>");

  mysqli_close($id_mysql);
?>
