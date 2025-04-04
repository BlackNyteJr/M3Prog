<?php


$steden = [
    "Amsterdam",
    "Rotterdam",
    "Utrecht"
];
$jsonString = json_encode($steden);
header('Content-Type: application/json');

echo $jsonString;