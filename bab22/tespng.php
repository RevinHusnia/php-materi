<?php
  $info = imagetypes(); 
  if ($info & IMG_PNG)
     print("PNG didukung");
  else
     print("PNG tidak didukung");
?>
