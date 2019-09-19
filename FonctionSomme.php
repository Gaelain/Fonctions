<?php

function somme($tab)
{
    $somme=0;
    foreach ($tab as $x) {

         $somme += $x;
    }
    return $somme;
}
?>