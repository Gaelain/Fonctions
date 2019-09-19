<?php

function somme($tab)
{
    $somme=0;
    foreach ($tab as $x) {

         $somme += $x;
    }
    return "La somme des valeurs du tableau est ".$somme."<br>";
}
?>