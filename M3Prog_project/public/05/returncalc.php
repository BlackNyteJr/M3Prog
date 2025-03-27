<?php

$getal1	= 23;
$getal2	= 54;
$getal3 = 100;
$getal4 = 4;
$getal5 = 9;
$getal6 = 33;
$addResult1 = add1($getal1, $getal2);
$addResult2 = add2($getal3);
$addResult3 = add3($getal4, $getal5);
$addResult4 = add4($getal6);
$subtractResult = subtract($getal1, $getal2);
$divideResult = divide($getal1, $getal2);
$multiplyResult = multiply($getal1, $getal2);

function add1($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

function add2($getal3){
    $som = $getal3 + $getal3;
    return $som;
}

function add3($getal4, $getal5){
    $som = $getal4 + $getal5;
    return $som;
}

function add4($getal6){
    $som = $getal6 + $getal6;
    return $som;
}

function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}

function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}

function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}

print_r($addResult1);
echo "<br>";
print_r($addResult2);
echo "<br>";
print_r($addResult3);
echo "<br>";
print_r($addResult4);
echo "<br>";
echo "<br>";
print_r($subtractResult);
echo "<br>";
print_r($divideResult);
echo "<br>";
print_r($multiplyResult);
echo "<br>";