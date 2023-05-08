<?php
    $read = file('trangthaiLED.txt');
    foreach ($read as $line) 
    {
      echo $line;
    }
?>