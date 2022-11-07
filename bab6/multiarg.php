<!DOCTYPE html>
<html>
<head>
<title>Penanganan Jumlah Argumen Tidak Pasti</title>
</head>
<body>

<?php
  function tesmulti()
  {
     $jum_arg = func_num_args();
     if ($jum_arg == 0)
        return 0;

     // Ambil argumen dengan func_get_arg
     print("Melalui func_get_arg: <br>\n");
     for ($i = 0; $i < $jum_arg; $i++)
     {
        print("Nilai argumen ke-$i : ");
        print(func_get_arg($i));
        print("<br>\n");
     }

     // Ambil argumen dengan func_get_args
     print("Melalui func_get_args: <br>\n");
     $argumen = func_get_args();
     foreach ($argumen as $kunci => $nilai)
        print("Argumen ke-$i : $nilai <br>\n");
  }

  print(tesmulti(1, 2, 5, 9));
?>

</body>
</html>
