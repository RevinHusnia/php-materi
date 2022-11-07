<!DOCTYPE html>
<html>
<head>
<title>Contoh Rekursi</title>
</head>
<body>

<?php
  function faktorial($m)
  {
     if ($m == 0)
        return 1;
     else
        return $m * faktorial($m - 1);
  }

  printf("1! = %d <br>\n", faktorial(1));
  printf("4! = %d <br>\n", faktorial(4));
?>

</body>
</html>
