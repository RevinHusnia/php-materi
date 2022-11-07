<?php

  // --------------------------------------
  // Fungsi untuk membuat diagram lingkaran
  //
  // Argumen: data = Array yang berisi data
  // --------------------------------------

  function diag_lingkaran($data)
  {
    // ---------------------------------
    // Definisi warna yang dipakai
    //   dalam diagram lingkaran
    // ---------------------------------

    // Menciptakan gambar 
    $gb = imagecreatetruecolor(300, 300);
    
    $warna[0]  = imagecolorallocate($gb, 0,   0,   0);
    $warna[1]  = imagecolorallocate($gb, 255, 255, 255);
    $warna[2]  = imagecolorallocate($gb, 255, 0,   0);
    $warna[3]  = imagecolorallocate($gb, 0,   255, 0);
    $warna[4]  = imagecolorallocate($gb, 0,   0,   255);
    $warna[5]  = imagecolorallocate($gb, 255, 255, 0);
    $warna[6]  = imagecolorallocate($gb, 0,   255, 255);
    $warna[7]  = imagecolorallocate($gb, 255, 0,   255);
    $warna[8]  = imagecolorallocate($gb, 99,  0,   0);
    $warna[9]  = imagecolorallocate($gb, 0,   99,  0);
    $warna[10] = imagecolorallocate($gb, 0,   0,   99);
    $warna[11] = imagecolorallocate($gb, 99,  99,  0);
    $warna[12] = imagecolorallocate($gb, 0,   99,  99);
    $warna[13] = imagecolorallocate($gb, 99,  0,   99);
    $warna[14] = imagecolorallocate($gb, 255, 99,   0);
    $warna[15] = imagecolorallocate($gb, 99,  40,  40);

    $jum_elemen_wrn = count($warna);

    $warna_tepi = $warna[1];
    
    // ---------------------------------
    // Hitung total data
    // ---------------------------------

    $jumlah = 0;
    for ($i = 0; $i < count($data); $i++)
        $jumlah += $data[$i];

    // ---------------------------------
    // Menggambar diagram lingkaran
    // ---------------------------------

    $sdt_awal = 0;
    $x_pusat = imageSX($gb)/2;
    $y_pusat = imageSY($gb)/2;
    $jari_jari = 1/2 * imageSX($gb) - 10;
  
    // Mengatur warna latar belakang
    imagefill($gb, 0, 0, $warna[0]);
    
    // Menggambar lingkaran
    imagearc($gb, $x_pusat, $y_pusat,
             2 * $jari_jari,
             2 * $jari_jari,
             0,
             360,
             $warna_tepi);

    // Buat sektor dalam diagram lingkaran
    $indeks_warna = 1;
    for($i = 0; $i < count($data); $i++)
    {
       $sdt_akhir = $sdt_awal + $data[$i] / $jumlah * 360;

       $rad_awal = deg2rad($sdt_awal);
       $x_awal = $jari_jari * cos($rad_awal);
       $y_awal = $jari_jari * sin($rad_awal);

       $rad_akhir = deg2rad($sdt_akhir);
       $x_akhir = $jari_jari * cos($rad_akhir);
       $y_akhir = $jari_jari * sin($rad_akhir);

       // Garis dari pusat lingkaran
       //   ke titik awal dalam busur
       imageline($gb, $x_pusat, $y_pusat,
                 $x_pusat + $x_awal,
                 $y_pusat + $y_awal,
                 $warna_tepi);

       // Garis dari pusat lingkaran
       //   ke titik akhir dalam busur
       imageline($gb, $x_pusat, $y_pusat,
                 $x_pusat + $x_akhir,
                 $y_pusat + $y_akhir,
                 $warna_tepi);

       // Menentukan warna untuk memblok sektor
       $indeks_warna++;
       if ($indeks_warna == $jum_elemen_wrn)
          $indeks_warna = 2;

       $warna_blok = $warna[$indeks_warna];

       // Titik sampel untuk membanjiri sektor
       $sdt_tengah = ($sdt_akhir + $sdt_awal)/2;
       $rad_tengah = deg2rad($sdt_tengah);
       $x_tengah = $jari_jari / 2 * cos($rad_tengah);
       $y_tengah = $jari_jari / 2 * sin($rad_tengah);
       imagefilltoborder($gb, $x_pusat + $x_tengah,
              $y_pusat + $y_tengah,
              $warna_tepi, $warna_blok);

       $sdt_awal = $sdt_akhir;
    }

    // Menampilkan gambar
    header("Content-Type: image/jpeg");
    imageJPEG($gb);

    // Mendealokasikan memori
    imagedestroy($gb);
  }
?>
