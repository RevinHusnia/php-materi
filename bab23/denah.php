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
    "SELECT lokasi, terjual FROM rumah");

  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

  // Menciptakan gambar
  $gb = imagecreatetruecolor(500, 400);

  // Menentukan warna 
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);

  $putih = imagecolorallocate(
           $gb, 255, 255, 255);

  $merah = imagecolorallocate(
           $gb, 255, 0, 0);

  $hijau = imagecolorallocate(
           $gb, 0, 255, 0);

  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $putih);
  
  // Proses seluruh data rumah
  while ( $baris = mysqli_fetch_row($hasil) )
  {
     $lokasi = explode(",", $baris[0]);

     // Menambahkan titik awal
     $lokasi[count($lokasi)] = $lokasi[0];
     $lokasi[count($lokasi)] = $lokasi[1];

     // Menentukan warna yang sudah terjual
     //   dan yang belum
     if ($baris[1] == 'B')
        $warna = $hijau;
     else
        $warna = $merah;

     // Menggambar denah
     imagefilledpolygon($gb, $lokasi,
        count($lokasi)/2, $warna);

     imagepolygon($gb, $lokasi,
        count($lokasi)/2, $putih);
  }

  // Menampilkan gambar
  header("Content-Type: image/jpeg");
  imageJPEG($gb);

  // Mendealokasikan memori
  imagedestroy($gb);
  
  mysqli_close($id_mysql);
?>
