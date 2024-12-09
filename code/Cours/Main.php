<?php
include 'Moyenne.php';
include 'tri_selection.php';

$mes_notes=array(5,12,7,10);
echo "La moyenne est de " .moyenne(notes: $mes_notes). "/20" . '<br>';

$salaires=array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$resultat = tri_selection($salaires);
echo implode(',',$salaires); 

?>