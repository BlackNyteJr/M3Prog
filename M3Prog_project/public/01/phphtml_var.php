<?php

$title = "Mijn mooie website"; 
$datum = date('d-m-Y'); 
$tijd = date("H:i"); 
$favorieteGame = "Super metroid"; 
$mooisteGetal = 77;
$favorieteShow = "Amazing World of Gumball";
$leuksteStad = "Amsterdam";
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        <p><h2>Het mooiste Getal:</h2><?= $mooisteGetal ?></p>
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame?></p>
        <p><h2>Mijn favoriete show</h2><?php echo $favorieteShow?></p>
        <p><h2>Het leukste stad</h2><?php echo $leuksteStad?></p>
    </body>
</html>