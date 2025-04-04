<?php

$trophiesPerGame = [
    "Demon's Souls" => 11,
    "Mario" => 0,
    "Rayman Origins" => 9,
    "Tetris" => 10,
];

$trophiesForDS = $trophiesPerGame["Demon's Souls"];
$trophiesForRO = $trophiesPerGame["Rayman Origins"];
$trophiesForMario = $trophiesPerGame["Mario"];
$trophiesFprTetris = $trophiesPerGame["Tetris"];

echo "Trophies for Demon Souls: $trophiesForDS<br>";
echo "Trophies for Rayman Origins: $trophiesForRO<br>";
echo "Trophies for Mario: $trophiesForMario<br>";
echo "Trophies for Tetris: $trophiesFprTetris<br>";