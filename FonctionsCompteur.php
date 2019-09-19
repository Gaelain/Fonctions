<?php
function elementTableaux($array)
{
    $compteur = array(1 => 0,2 => 0,3 => 0,4 => 0,5 => 0);

    foreach($array as $value)
    {
        $compteur[$value]++;
    }
    $phrase = "";
    for($i = 1; $i <= 5; $i++)
    {
        $phrase = $phrase."La valeur ".$i." est présente ". $compteur[$i]." fois."."<br>";
    }
    return $phrase;
}
?>