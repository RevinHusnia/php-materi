<?php
  // Pengaturan header
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " .
         gmdate("D, d M Y H:i:s"));

  if ($_SERVER["SERVER_PROTOCOL"] == "HTTP/1.0")
     header("Pragma: no-cache");
  else
     header("Cache-Control: no-cache, must-revalidate");

  // Pencacah
  if (! isset($_COOKIE["counter"]))
     $pencacah = 0;
  else
     $pencacah = $_COOKIE["counter"];

  $pencacah++;
  setcookie("counter", $pencacah,
            time() + 365 * 24 * 3600);
?>

<!DOCTYPE html>
<html>
<head>
<title>Contoh halaman yang tidak di-cached</title>
</head>
<body>
<?php
  print("Pencacah : $pencacah");
?>
</body>
</html>
