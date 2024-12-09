<?php
$budget = 1000;
$achats = 500;

function budget($budget, $achats) {
    if ($achats > $budget) {
        return false;
    } if ($achats <= $budget) {
        return true;
    }
}
?>
