<DOCTYPE html>
<html>
<head>
<title>BUKU TAMU</title>
</head>
<body>

<?php
  // Peroleh variabel URL
  $nama = $_GET["nama"] ?? "";
  $jender = $_GET["jender"] ?? "";
  $email = $_GET["email"] ?? "";
  $komentar = $_GET["komentar"] ?? "";
  $minat1 = $_GET["minat1"] ?? Null;
  $minat2 = $_GET["minat2"] ?? Null;
  $minat3 = $_GET["minat3"] ?? Null;
  $minat4 = $_GET["minat4"] ?? Null;

  if ( empty($nama) or
       empty($email) or 
       empty($komentar))
  {
     print("Data nama, e-mail, dan komentar harap diisi");
     exit;
  }

  // Cek kotak cek

  if (isset($minat1))
     $kode_minat1 = "v";
  else
     $kode_minat1 = "-";

  if (isset($minat2))
     $kode_minat2 = "v";
  else
     $kode_minat2 = "-";

  if (isset($minat3))
     $kode_minat3 = "v";
  else
     $kode_minat3 = "-";

  if (isset($minat4))
     $kode_minat4 = "v";
  else
     $kode_minat4 = "-";

  $kode_minat = $kode_minat1 . $kode_minat2 .
                $kode_minat3 . $kode_minat4;

  // Simpan
  $pegangan = fopen("BUKUTAMU.DAT", "a");
  fputs($pegangan, $nama . "\n");
  fputs($pegangan, $jender . "\n");
  fputs($pegangan, $email . "\n");
  fputs($pegangan, $kode_minat . "\n");
  fputs($pegangan, $komentar . "\n");
  fputs($pegangan, "*-*\n");
  fclose($pegangan);

  print("Halo, $nama. Data Anda sudah disimpan <br>\n");
  print("Terima kasih. <br>\n");

?>

</body>
</html>
