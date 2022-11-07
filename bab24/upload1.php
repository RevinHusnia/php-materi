<!DOCTYPE html>
<html>
<head>
<title>Proses Upload</title>
</head>
<body>

<?php
  $datafile = $_FILES["namafile"] ?? "";
  if (!empty($datafile))
     print("Nama berkas: " . 
        $datafile["name"] . 
        "<br>\n");
?>

</body>
</html>
