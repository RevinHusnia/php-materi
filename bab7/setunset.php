<!DOCTYPE html>
<html>
<head>
<title>Contoh isset, empty, dan unset</title>
</head>
<body>

<?php
  function bnr_slh($argumen)
  {
     if ($argumen)
        return "benar";
     else
        return "salah";
  }

  // Tes variabel musik
  $ada = isset($musik);
  printf("1) musik ada ? %s<br>\n", bnr_slh($ada));

  // Isi variabel musik
  $musik = "Jazz";

  $ada = isset($musik);
  printf("2) musik ada ? %s<br>\n", bnr_slh($ada));
    
  // Cek apakah kosong
  $kosong = empty($musik);
  printf("3) musik kosong ? %s<br>\n", bnr_slh($kosong));

  // Ubah isi musik
  $musik = "0";

  // Cek apakah kosong
  $kosong = empty($musik);
  printf("4) musik kosong? %s<br>\n", bnr_slh($kosong));

  // Hapus variabel musik
  unset($musik);

  // Tes variabel musik
  $ada = isset($musik);
  printf("5) musik ada ? %s<br>\n", bnr_slh($ada));

  // Cek apakah kosong
  $kosong = empty($musik);
  printf("6) musik kosong ? %s<br>\n", bnr_slh($kosong));

?>

</body>
</html>
