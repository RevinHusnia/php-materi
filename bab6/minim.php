<!DOCTYPE html>
<html>
<head>
<title>Mencari Bilangan Terkecil</title>
</head>
<body>

<?php
  function terkecil()
  {
     $jum_arg = func_num_args();
     if ($jum_arg == 0)
        return 0;

     $minim = func_get_arg(0);
     for ($i = 1; $i < $jum_arg; $i++)
     {
        $bilangan = func_get_arg($i);
        if ($minim > $bilangan)
           $minim = $bilangan;
     }

     return $minim;

  }

  print(terkecil(1, 2, 5, 9));
  print("<br>\n");
  print(terkecil(10, 20, 50, 90, 7, 70));
?>

</body>
</html>
