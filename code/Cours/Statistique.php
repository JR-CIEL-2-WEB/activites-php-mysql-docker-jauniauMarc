<?php

function moyenne($notes){
    foreach ($notes as $note) {
        $somme += $note; 
    }
    $moyenne = $somme / count($notes); 
    return $moyenne; 
}


?>