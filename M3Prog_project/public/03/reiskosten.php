<?php

$stad1 = Amsterdam
$stad2 = Frankrijk
$plaats = Bordeaux
$benzine = 1 liter benzine

echo "De totale afstand van Nederland naar Bordeaux is $afstand</br>";

$verbruik = $afstand / 15;

echo "Hoeveel liter je verbruikt = $verbruik</br>";

$XTanken = $verbruik / $tankInhoud;

echo "Aantal x tanken = $XTanken </br>";

$kosten = $verbruik * $benzine;
echo "De kosten in totaal = $kosten </br>";

if ($kosten > $treinRit)
{
    echo "treinrit is goedkoper";
}
else
{
    echo "auto is goedkoper";
}
?>