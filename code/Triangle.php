<?php


function triangle($etoile) {
    for ($i = 1; $i <= $etoile; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n</br>";
    }
}

triangle(10);

?>