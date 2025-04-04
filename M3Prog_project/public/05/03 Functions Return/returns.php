<?php

$mijnFunctionResultaat = mijnFunction();
$returnVariableResultaat = returnVariable();

function mijnFunction()
{
    return 1;
}

function returnVariable()
{
    $result = rand();
    return $result;
}

print_r($mijnFunctionResultaat);
echo "<br>";
print_r($returnVariableResultaat);
echo "<br>";
print_r($returnVariableResultaat);
echo "<br>";
print_r($returnVariableResultaat);