<?php
    function syracuse($nombre)
    {
        $tableaux = [$nombre];
        for($i=1; $i<20; $i++)
        {
            if($nombre%2 == 0)
            {
                $nombre /=2;
                $tableaux[]= $nombre;
            }
            else
            {
                $nombre = $nombre*3 +1;
                $tableaux[]= $nombre;
            }
        }
        return $tableaux;
    }
?>