<!DOCTYPE html>
<html>
<head>
<title>Latihan Menampilkan Variabel</title>
</head>
<body>

  <?php
    $nama_pemakai = $_GET['nama_pemakai'] ?? "";
    print("Selamat belajar PHP, <b>$nama_pemakai</b>");  
  ?>

</body>
</html>
