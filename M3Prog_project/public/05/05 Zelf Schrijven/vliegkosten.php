<?php

include_once 'vliegkostenfunctions.php';

$kosten1 = berekenRetourPrijs(3722, 2.05, 20, false);
$kosten2 = berekenRetourPrijs(9276, 3.11, 10, false);
$kosten3 = berekenRetourPrijs(803, 2.83, 0, true);

echo "Kosten voor vlucht 1: €" . number_format($kosten1, 2) . "<br>";
echo "Kosten voor vlucht 2: €" . number_format($kosten2, 2) . "<br>";
echo "Kosten voor vlucht 3: €" . number_format($kosten3, 2) . "<br>";