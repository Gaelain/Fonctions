<?php


    function mini(){
        $min_array=array(53,56,1,130,45,58);
        $min=$min_array[0];
   foreach ($min_array as $value) 
   {
    if($value<$min)
    {
        $min=$value;
    }
   }
    return $min;
   }