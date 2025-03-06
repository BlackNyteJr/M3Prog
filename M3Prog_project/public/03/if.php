<?php

$aantalOpVoorraad = 0;
$opvoorraad = $aantalOpVoorraad > 0;

//if($opvoorraad == false)
if($aantalOpVoorraad > 0)
{
    echo "niet op voorraad";
}

else
{
    echo "Artikel is op voorraad";
}

?>