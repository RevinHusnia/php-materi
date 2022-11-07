<!DOCTYPE html>
<html>
<head>
<title>Contoh Pemeriksaan Kode Pos</title>
</head>
<body>

  <form>
    Kode Pos: 
    <input type=text name=kode_pos maxlength="5"><br><br>
    <input type=submit value="Cek">
  </form>

<?php
  $kode_pos = $_GET["kode_pos"] ?? NULL;
  if (isset($kode_pos))
     if (empty($kode_pos))
        print("Harap mengisikan kode pos <br>\n");
     else
     {
        // Cek kode pos
        if (preg_match("/^[1-9][0-9]{4}$/", $kode_pos))
           print("Kode pos $kode_pos valid <br>\n");
        else
           print("Kode pos $kode_pos tidak valid <br>\n");
     }
?>

</body>
</html>
