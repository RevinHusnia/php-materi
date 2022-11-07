<?php
  include "otentik.php";

  session_start();

  $sesi_user = $_SESSION["sesi_user"] ?? "";
  $sesi_pass = $_SESSION["sesi_pass"] ?? "";

  if (! otentikasi($sesi_user, $sesi_pass))
  {
     $msg = "Harap diisi dengan benar";
     $alamat = "http://$NAMA_SERVER/bab20/loginbin.php";
     header("Location: $alamat?msg=$msg");
     exit();
  }

  $kode_bintang = $_POST["kode_bintang"] ?? "";
  
  if (empty($kode_bintang)) 
  {
     $alamat = "http://$NAMA_SERVER/bab20/dafbff.php";
     header("Location: $alamat");
     exit();
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>Menambah Bintang Film & Film</title>
</head>
<body>
<center>
<h1>Informasi Penambahan Bintang Film & Film</h1>
<hr>

<?php
  $id_mysql = mysqli_connect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
     die("Database MySQL tak dapat dibuka");

  if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak bisa dipilih");

  $kf = $_POST["kf"] ?? "";
  
  if (!empty($kf))
     foreach ($kf as $kunci => $nilai)
     {
        $kode_film = $_SESSION["daf_film"][$kunci];
        $query1 = "INSERT INTO main " .
           "(kode_bintang, kode_film)" .
           " VALUES ('$kode_bintang', " .
           " '$kode_film')";

        mysqli_query($id_mysql, $query1);
        if (mysqli_affected_rows($id_mysql) > 0)
           $status_query = "Berhasil";
        else
           $status_query = "Gagal";

        $query2 = "SELECT judul " .
           " FROM film " .
           " WHERE kode_film = '$kode_film'";
        $hasil = mysqli_query($id_mysql, $query2);
        $baris = mysqli_fetch_row($hasil);
        $judul_film = $baris[0];

        print("Status perekaman $judul_film : ");
        print("$status_query <br>\n");
     }

  mysqli_close($id_mysql);

?>

<br>
<hr>
<a href="dafbff.php">Menu Bintang Film & Film</A>

</body>
</html>
