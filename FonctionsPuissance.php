<?php
function puissance($nombre,$puissance)
     { 
      $resultat=$nombre;
      for ($i=0;$i<$puissance-1;$i++)  
       $resultat *=  $nombre;  
     return $nombre."x".$puissance."=".$resultat;
     }
?>
