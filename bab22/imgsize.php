<?php
  
  $berkas_gb = "bulatan.jpg";
  $hasil = @getimagesize($berkas_gb);
  if (! $hasil)
    die("Berkas $berkas_gb tak dapat dibuka");

  print("<IMG SRC=\"$berkas_gb\">");
  print("<P>");
  print("Lebar  : $hasil[0] <BR>\n");
  print("Tinggi : $hasil[1] <BR>\n");
  print("Tipe   : $hasil[2] -> ");

  switch ($hasil[2])
  {
     case IMAGETYPE_XBM:
        print("XBM <BR>\n");
        break;
     case IMAGETYPE_JPEG:
        print("JPEG <BR>\n");
        break;
     case IMAGETYPE_GIF:
        print("GIF <BR>\n");
        break;
     case IMAGETYPE_PNG:
        print("PNG <BR>\n");
        break;
     default:
        print("Bukan XBM, JPEG, GIF, ataupun PNG <BR>\n");
  } 

  print("String : $hasil[3] <BR>\n");
  print("MIME : " . $hasil['mime'] . "<BR>\n");

?>
