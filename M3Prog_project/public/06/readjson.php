<?php

$steden = [
    "Amsterdam",
    "Rotterdam",
    "Utrecht"
];
$jsonString = json_encode($steden);
$stedenRead = json_decode($jsonString);
$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';
$dataObject = json_decode($json);
print_r($stedenRead);
echo "<br>";
print_r($dataObject);
echo "<br>";
echo $dataObject->studenten[0]->name . "<br>";
echo $dataObject->studenten[1]->gemiddeldCijfer . "<br>";