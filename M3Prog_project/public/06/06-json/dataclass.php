<?php

class student
{
    public $name;
    public $gemiddeldCijfer;
    public $klas;
    
}

class dataObject
{
    public $studenten;
}

$mario = new student();
$mario->name = "Mario";
$mario->gemiddeldCijfer = 8;
$mario->klas = "Flower";

$bowser = new student();
$bowser->name = "Bowser";
$bowser->gemiddeldCijfer = 8;
$bowser->klas = "Lava Castle";

$peach = new student();
$peach->name = "Peach";
$peach->gemiddeldCijfer = 8;
$peach->klas = "castle";

$wario = new student();
$wario->name = "Wario";
$wario->gemiddeldCijfer = 8;
$wario->klas = "Moneh";

$dataObject = new dataObject();
$dataObject->studenten = [$mario, $bowser, $peach, $wario];

$jsonString = json_encode($dataObject);
header('Content-Type: application/json');
echo $jsonString;