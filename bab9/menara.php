<!DOCTYPE html>
<html>
<head>
<title>Contoh Menghitung Tinggi Menara</title>
</head>
<body>

<img src="../citra/menara.png">

<hr>
<form>

Panjang: 
<input type="text" name="panjang"><br>
Sudut (dalam derajat):
<input type="text" name="sudut"><br>

<input type="submit" value="Hitung">
</form>

<?php
  $panjang = $_GET["panjang"] ?? Null;
  $sudut = $_GET["sudut"] ?? Null;
  if (isset($panjang) and isset($sudut))
  {
     $tinggi = $panjang * tan($sudut * M_PI / 180);     

     print("Panjang: $panjang<BR>\n");
     print("Sudut: $sudut derajat<BR>\n");
     print("Tinggi: $tinggi<BR>\n");
  }
  else
     print("<b>Panjang dan sudut perlu diisi<b>");
?>

</body>
</html>
