<!DOCTYPE html>
<html>
<head>
<title>Denah Perumahan</title>
</head>
<body>
<h1>Perumahan Bumi Harapan Indah</h1>

<?php
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
    "SELECT lokasi,terjual,id_rumah FROM rumah");

  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

  $string_peta = "";
  while ( $baris = mysqli_fetch_row($hasil) )
  {
     $lokasi = explode(",", $baris[0]);
     $string_peta .= "<area alt=\"" . $baris[2] .
                    "\" shape=\"poly\" coords=\"" .
                    $baris[0] .
                    "\" href=\"rmhdetil.php?id=" .
                    $baris[2] ."\">\n";
  }

  echo "<img src=\"denah.php\" usemap=\"#rumah\">";
  
  mysqli_close($id_mysql);
?>

<map name="rumah">
<?php print($string_peta) ?>
</map>

</body>
</html>
