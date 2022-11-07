<!DOCTYPE html>
<html>
<head>
<title>Contoh Penentuan Diskon</title>
</head>
<body>

<form method="get">
Besar Pembelian: 
<input type="text" name="total_beli"><br><br>
<input type=submit value="Tentukan Diskon">
</form>

<?php
  $total_beli = 0;
  if (isset($_GET["total_beli"]))
    $total_beli = $_GET["total_beli"];

  $total_beli = intval($total_beli);
  $diskon = 0;
  if ($total_beli >= 100000)
    $diskon = intval(0.1 * $total_beli);

  if ($total_beli != 0)
  {
    printf("Diskon     = %d <br>\n", $diskon);
    printf("Pembayaran = %d <br>\n",
           $total_beli - $diskon);
  }
?>

</body>
</html>
