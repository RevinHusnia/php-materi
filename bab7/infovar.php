<!DOCTYPE html>
<html>
<head>
<title>Info Variabel</title>
</head>
<body>

<?php
  $wadah = array(1, 2,
                 array("Jazz", "Swing", "Fusion"));

  print("<b>Info print_r: </b><br>\n");
  print_r($wadah);
    
  print("<br>\n<b>Info var_dump \$wadah: </b><br>\n");
  var_dump($wadah);

  $keadaan = TRUE;
  print("<br>\n<b>Info var_dump \$keadaan: </b><br>\n");
  var_dump($keadaan);

  ?>

</body>
</html>
