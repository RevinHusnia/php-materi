<!DOCTYPE html>
<html>
<head>
<title>Pencacah dengan Database</title>
</head>
<body>

<?php
  $pemakai  = "php";
  $password = "007php";
  $database = "tes";

  $id_mysql = mysqli_connect("localhost",
                            $pemakai,
                            $password, $database);
  if (! $id_mysql)
     die("Gagal melakukan koneksi ke Database server MySQL");

  // Mengunci tabel counter
  $hasil = mysqli_query($id_mysql,
                        "LOCK TABLES counter WRITE");
  if (! $hasil)
	  die(mysqli_error($id_mysql));

  // Membaca nilai pencacah
  $hasil = mysqli_query($id_mysql,
                        "SELECT * FROM counter");

  $data = mysqli_fetch_row($hasil);
  $pencacah = $data[0];

  // Naikkan pencacah
  $pencacah++;

  // Simpan nilai pencacah ke tabel counter
  $perintah_update =
    "UPDATE counter SET pencacah = $pencacah";

  $hasil = mysqli_query($id_mysql,
                        $perintah_update);

  // Bebaskan penguncian
  $hasil = mysqli_query($id_mysql,
                  "UNLOCK TABLES");

  // Tutup hubungan ke MySQL
  mysqli_close($id_mysql);

  // Tampilkan
  print("Anda adalah pengunjung ke-$pencacah");
?>

</body>
</html>
