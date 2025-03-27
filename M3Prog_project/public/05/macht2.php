<?php

$getal1 = 2;
$getal2 = 16;
$getal3 = 100;
$macht1 = macht1($getal1);
$macht2 = macht2($getal2);
$macht3 = macht3($getal3);


function macht1($getal1){
    $som = $getal1 * $getal1;
    return $som;
}

function macht2($getal2){
    $som = $getal2 * $getal2;
    return $som;
}

function macht3($getal3){
    $som = $getal3 * $getal3;
    return $som;
}

print_r($macht1);
echo "<br>";
print_r($macht2);
echo "<br>";
print_r($macht3);
echo "<br>";
echo "<br>";