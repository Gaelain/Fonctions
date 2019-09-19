<?php

function puissance($x,$y)
     { 
      $resultat=125;
      for ($i=0;$i<$y;$i++)  
       $resultat *=  $x;  
      return $resultat;
     }
?>

<?php
     $nombre = 5;
     $puissance = 3;
     echo puissance($nombre,$puissance);
     // affiche: 125
?>