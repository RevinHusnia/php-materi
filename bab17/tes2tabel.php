<!DOCTYPE html>
<html>
<head>
<title>Pengaksesan 2 Tabel</title>
</head>
<body>
<?php
  $pemakai  = "php";
  $password = "007php";
  $dsn = "mysql:host=localhost;dbname=bukualmt";
  
  // Inisialisasi $koneksi
  $koneksi = null;
  
  try
  {
	 // Koneksi ke MySQL
     $koneksi = new PDO($dsn, $pemakai, $password);
  }
  catch(PDOException $e)
  {
     die("Koneksi gagal: " . $e->getMessage() );
  }
  
  // Query
  $sql = "SELECT daftar.nama, " .
                "daftar.alamat, kota.nama_kota " .
                "FROM daftar, kota " .
                "WHERE daftar.id_kota = kota.id_kota " .
                "ORDER BY daftar.nama";

  $hasil = $koneksi->query($sql);
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  // Buat tabel
  print("<table border=\"2\">\n");

  // Peroleh jumlah kolom
  $jum_field = $hasil->columnCount();

  // Tampilkan hasil
   while ($baris = $hasil->fetch())
  {
     // Mengawali baris
     print("<tr>\n");

     for($i = 0; $i < $jum_field; $i++)
     {
        $data = $baris[$i];
        print("<td>$data</td>");
     }

     // Menutup baris
     print("</tr>\n");
  }

  // Tutup tabel
  print("</table>\n");

  // Tutup koneksi secara eksplisit
  $koneksi = null;
?>

</body>
</html>
