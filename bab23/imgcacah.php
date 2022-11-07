<?php
  $pemakai  = "php";
  $password = "007php";
  $database = "tes";

  $id_mysql = mysqli_connect("localhost",
                             $pemakai,
                             $password, $database);
  if (! $id_mysql)
     die("Database server MySQL tak dapat dikoneksi");

  // Mengunci tabel counter
  $hasil = mysqli_query($id_mysql, 
                  "LOCK TABLES counter WRITE");
  if (! $hasil)
     die("Permintaan gagal dilaksanakan");

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

  $hasil = mysqli_query($id_mysql, $perintah_update);

  // Bebaskan penguncian
  $hasil = mysqli_query($id_mysql, "UNLOCK TABLES");

  // Tutup hubungan ke MySQL
  mysqli_close($id_mysql);

  // Tampilkan dalam bentuk gambar
  header("Content-Type: image/jpeg");
  $gb = imagecreatetruecolor(50, 30);

  // Menentukan warna
  $hitam = imagecolorallocate(
           $gb, 0, 0, 0);
  $putih  = imagecolorallocate(
           $gb, 255, 255, 255);
  
  // Mengatur warna latar belakang
  imagefill($gb, 0, 0, $hitam);
  
  $ukuran_font = 5;

  $pos_x = (imageSX($gb) - strlen($pencacah) *
                      imagefontwidth($ukuran_font))/2;
  $pos_y = (imageSY($gb) - imagefontheight($ukuran_font))/2;

  imagestring($gb, $ukuran_font,
            $pos_x, $pos_y, $pencacah, $putih);
  imageJPEG($gb);
  imagedestroy($gb);

?>
