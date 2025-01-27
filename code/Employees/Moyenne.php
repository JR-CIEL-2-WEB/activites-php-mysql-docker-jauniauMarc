<?php
function moyenne($salaires) {
    $somme = 0;
    foreach ($salaires as $salaire) {
        $somme += $salaire;
    }
    $moyenne = $somme / count($salaires);
    return $moyenne;
}
?>
