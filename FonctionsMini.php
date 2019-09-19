<?php
    function mini($array){
        $min=$array[0];
   foreach ($array as $value) 
   {
    if($value<$min)
    {
        $min=$value;
    }
   }
    return "La valeur minimale du tableau est ".$min."<br>";
   }