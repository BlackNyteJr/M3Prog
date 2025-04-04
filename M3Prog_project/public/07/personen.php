<?php

$persoon = [
    'Voornaam' => 'Luigi',
    'Achternaam' => 'Mario',
    'Leeftijd' => 19,
    'Favoriet eten' => 'Pasta',
    'Minst favoriet eten' => 'Paddenstoelen',
    'Woonplaats' => 'Mushroom Kingdom'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($persoon as $key => $value)
        {
            echo "<tr><td>$key</td><td>$value</td></tr>";        
        };
        ?>
    </table>