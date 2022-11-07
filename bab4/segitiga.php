<!DOCTYPE html>
<html>
<head>
<title>Segitiga</title>
</head>
<body>

  <?php
    $tinggi = 5;
    for ($baris = 1; $baris <= $tinggi; $baris++)
	{
	  for ($kolom = 1; $kolom <= $baris; $kolom++)
        print("*");
	
	  print("<br>");
	}
  ?>

</body>
</html>
