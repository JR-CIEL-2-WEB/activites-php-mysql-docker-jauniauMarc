<?php
include 'fetch_salaries.php';

function calculer_mediane($salaires) {
    sort($salaires);
    $n = count($salaires);

    if ($n % 2 == 0) {
        // Si le nombre est pair, moyenne des deux valeurs centrales
        $mediane = ($salaires[$n / 2 - 1] + $salaires[$n / 2]) / 2;
    } else {
        // Si le nombre est impair, valeur centrale
        $mediane = $salaires[floor($n / 2)];
    }
    return $mediane;
}

$mediane = calculer_mediane($salaires);
echo "La médiane des salaires est : " . $mediane . "€";
?>
