<!DOCTYPE html>
<html>
<head>
<title>Membaca Berkas Microsoft Access</title>
</head>
<body>

<?php
  $pemakai  = "";
  $password = "";
  $buku_alamat = odbc_connect("contoh_mdb",
                              $pemakai,
                              $password);
  if (! $buku_alamat)
     die("Database tidak dapat dibuka");

  $permintaan = "SELECT daftar.nama, " .
                "daftar.alamat, kota.nama_kota " .
                "FROM daftar, kota " .
                "WHERE daftar.id_kota = kota.id_kota " .
                "ORDER BY daftar.nama";

  $hasil = odbc_do($buku_alamat, $permintaan);

  // Buat tabel
  print("<table border=\"2\">\n");

  // Peroleh jumlah kolom
  $jum_field = odbc_num_fields($hasil);

  print("Hasil Permintaan: <b>$permintaan</b> :<br>\n");
  // Peroleh data dan tampilkan
  while (odbc_fetch_row($hasil))
  {
     // Mengawali baris
     print("<tr>\n");

     for($i = 1; $i <= $jum_field; $i++)
     {
        $data = odbc_result($hasil, $i);
        print("<td>$data</td>");
     }

     // Menutup baris
     print("</tr>\n");
  }

  // Tutup tabel
  print("</table>\n");

  odbc_close($buku_alamat);
?>

</body>
</html>
