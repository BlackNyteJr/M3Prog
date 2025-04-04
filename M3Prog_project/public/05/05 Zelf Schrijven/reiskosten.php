<?php

$kosten = berekenRitKosten1(663, 15, 1.90);
$kosten2 = berekenRitKosten2(1438, 20, 1.46);
$kosten3 = berekenRitKosten3(1991, 18.47, 2.23);

function berekenRitKosten1($afstand_km1, $km_per_liter1, $liter_prijs1){
    $kosten_euro = 0;
    $aantal_liters = $afstand_km1 / $km_per_liter1;
    $kosten_euro = $aantal_liters * $liter_prijs1;
    return $kosten_euro;
}

function berekenRitKosten2($afstand_km2, $km_per_liter2, $liter_prijs2){
    $kosten_euro = 0;
    $aantal_liters = $afstand_km2 / $km_per_liter2;
    $kosten_euro = $aantal_liters * $liter_prijs2;
    return $kosten_euro;
}

function berekenRitKosten3($afstand_km3, $km_per_liter3, $liter_prijs3){
    $kosten_euro = 0;
    $aantal_liters = $afstand_km3 / $km_per_liter3;
    $kosten_euro = $aantal_liters * $liter_prijs3;
    return $kosten_euro;
}

echo "Berlijn: €" . number_format($kosten, 2);
echo "<br>";
echo "Stockholm: €" . number_format($kosten2, 2);
echo "<br>";
echo "Kiev: €" . number_format($kosten3, 2);
