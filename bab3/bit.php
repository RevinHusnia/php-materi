<!DOCTYPE html>
<html>
<head>
<title>Contoh Operasi dalam Level Bit --</title>
</head>
<body>

<?php
  $bil1 = 10;
  $bil2 = 12;
  printf("%d & %d = %d <br>\n",
         $bil1, $bil2, $bil1 & $bil2);
  printf("%d | %d = %d <br>\n",
         $bil1, $bil2, $bil1 | $bil2);
  printf("%d ^ %d = %d <br>\n",
         $bil1, $bil2, $bil1 ^ $bil2);

  printf("~%d = %d <br>\n",
         $bil1, ~$bil1);

  printf("%d >> 1 = %d <br>\n",
         $bil1, $bil1 >> 1 );

  printf("%d >> 2 = %d <br>\n",
         $bil1, $bil1 >> 2 );

  printf("%d << 1 = %d <br>\n",
         $bil1, $bil1 << 1 );

  printf("%d << 2 = %d <br>\n",
         $bil1, $bil1 << 2 );
?>

</body>
</html>
