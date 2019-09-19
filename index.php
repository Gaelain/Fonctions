<?php include('FonctionsCompteur.php'); ?>
<?php include('FonctionsMini.php'); ?>
<?php include('FonctionSomme.php'); ?>
<?php include('FonctionsPuissance.php'); ?>
<?php include('FonctionsSyracuse.php'); ?>
<?php include('dessin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Fonction Somme</h4>
    <?php $compteur = array(1,4,3,3,4,2,2,2,4,1) ?>

    <table border="solid 1px black" cellspacing="0">
        <tr>
        <?php for ($i = 0; $i < 10; $i++)
        {
        ?>
            <td><?php echo $compteur[$i]; ?></td>
        <?php
        }
        ?>
        </tr>
        </table>
    <?php echo elementTableaux($compteur); ?>
    <h4>Fonction Mini</h4>
    <?php $mini = array(53,56,1,130,45,58); ?>

    <table border="solid 1px black" cellspacing="0">
        <tr>
        <?php for ($i = 0; $i < 6; $i++)
        {
        ?>
        <td>
            <?php echo $mini[$i]; ?>
        </td>
        <?php
        }
        ?>
        </tr>
    </table>
    <?php echo mini($mini) ?>
    <h4>Fonction Compteur</h4>
    <?php $somme = array(5,78,23,13,12,58); ?>
    <table border="solid 1px black" cellspacing="0">
        <tr>
        <?php for ($i = 0; $i < 6; $i++)
        {
        ?>
        <td>
            <?php echo $somme[$i]; ?>
        </td>
        <?php
        }
        ?>
        </tr>
    </table>

    <?php echo somme($somme); ?>
    <h4>Fonction Syracuse</h4>
    <?php 
    $nombre = 155;
    $syracuse = syracuse($nombre);
    echo "Les 20 premiers termes de la suite de syracuse avec comme premier nombre ".$nombre." sont : ";
    foreach ($syracuse as $value)
    {
        echo ", ".$value;
    }
    ?> <br>
    <h4>Fonction Dessin</h4>
    <?php dessin(); ?>
    <h4>Fonction Puissance</h4>
    <?php echo puissance(5,3); ?>
    

    

    
</body>
</html>