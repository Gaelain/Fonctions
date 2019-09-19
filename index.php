<?php include('FonctionsCompteur.php'); ?>
<?php include('FonctionsMini.php'); ?>
<?php include('FonctionSomme.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

    <?php echo somme($somme) ?>

    
</body>
</html>