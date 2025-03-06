<?php

//R = Rood, O = Oranje, G = Groen
$stoplichtKleur = 'O';

if($stoplichtKleur == 'G') //als groen
{
    echo "<button style='background-color:green;height:25px;width:25px;'/>";
}
else if($stoplichtKleur == 'O') //als oranje
{
    echo "<button style='background-color:orange;height:25px;width:25px;'/>";
}
else //als rood
{
    echo "<button style='background-color:red;height:25px;width:25px;'/>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>
<body>

</body>
</html>