<?php

// https://localhost/script.php?stad=Amsterdam&temperatuur=23&land=Nederland
echo $_GET['stad'] . "<br>";
echo $_GET['temperatuur'] . "<br>";
echo $_GET['land'] . "<br>";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weerbericht</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5rem;
            padding: 5rem;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 40rem;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 1rem rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            margin: 5px 0;
        }
    </style>
</head>
<body>