<?php include('FonctionsCompteur.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $array = array(1,4,3,3,4,2,2,2,4,1) ?>

    <table border="solid 1px black" cellspacing="0">
            <tr>
            <?php for ($i = 0; $i < 10; $i++)
            {
            ?>
                <td><?php echo $array[$i]; ?></td>
            <?php
            }
            ?>
            </tr>
        </table>
    <p>
        <?php echo elementTableaux($array); ?>
    </p>
    
</body>
</html>