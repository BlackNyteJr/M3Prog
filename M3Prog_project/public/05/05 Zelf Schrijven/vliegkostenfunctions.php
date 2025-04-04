<?php

function berekenRetourPrijs($afstand_km, $kerosine_prijs, $bagage_kg, $business_class) {
    $basisprijs = ($kerosine_prijs * $afstand_km) / 30;
    $totale_kosten = $basisprijs + ($bagage_kg * 5);

    if ($business_class) {
        $totale_kosten *= 1.5;
    }
    return $totale_kosten;
}