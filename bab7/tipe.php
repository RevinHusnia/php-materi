<!DOCTYPE html>
<html>
<head>
<title>Contoh Fungsi Pemeriksa Tipe</title>
</head>
<body>

<?php
  function ya_tidak($arg)
  {
     if ($arg)
        return "Ya";
     else
        return "Tidak";
  }

  $data = "27.5";

  printf("is_bool? %s <br>\n",
         ya_tidak(is_bool($data)));
  printf("is_string? %s <br>\n",
         ya_tidak(is_string($data)));

  printf("is_double? %s <br>\n",
         ya_tidak(is_double($data)));

  printf("is_numeric? %s <br>\n",
         ya_tidak(is_numeric($data)));

  printf("Tipe data: %s <br>\n",
         gettype($data));
?>

</body>
</html>
