<?php

header('Content-Type: application/json');

$mario = ["name" => "Mario", "gemiddeldCijfer" => 7.5, "klas" => "Mushroom"];
$wario = ["name" => "Wario", "gemiddeldCijfer" => 4.5, "klas" => "W"];
$bowser = ["name" => "Bowser", "gemiddeldCijfer" => 8.5, "klas" => "Shell"];
$peach = ["name" => "Peach", "gemiddeldCijfer" => 6.5, "klas" => "Mushroom"];
$dataObject = ["studenten"=> [$mario, $wario, $bowser, $peach]];
$jsonString = json_encode($dataObject);

echo $jsonString;