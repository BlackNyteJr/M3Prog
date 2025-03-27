<?php



function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){
    $kosten_euro = 0;
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}