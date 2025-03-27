<?php

include_once "returncalc.php";
echo "<br>";
include_once "macht2.php";

$getal1	= 60;
$getal2	= 40;
$getal3 = 100;
$getal4 = 10;
$getal5 = 4;
$getal6 = 2;
$getal7 = 6;

$addResult = add($getal1, $getal2);
$subtractResult = subtract2($getal3, $getal4);
$divideResult = divide2($getal5, $getal6);
$multiplyResult = multiply2($getal7);

function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

function subtract2($getal3, $getal4){
    $som = $getal3 - $getal4;
    return $som;
}

function divide2($getal5, $getal6){
    $som = $getal5 / $getal6;
    return $som;
}

function multiply2($getal7){
    $som = $getal7 * $getal7;
    return $som;
}

print_r($addResult);
echo "<br>";
print_r($subtractResult);
echo "<br>";
print_r($divideResult);
echo "<br>";
print_r($multiplyResult);
echo "<br>";