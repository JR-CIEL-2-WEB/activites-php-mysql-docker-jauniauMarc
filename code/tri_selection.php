<?php

/*
$montableau = array("-1", "-5", "2", "4", "-6", "45", "22", "14");
sort($montableau);
foreach ($montableau as $key => $val) {
	echo "Tab[" . $key . "] = " . $val . "\n</br>";
	}
*/	


function tri_selection(&$t){
    $n = count($t);
    for($i=0;$i<$n-1;$i++){
        $min=$i;
        for($j=$i+1;$j<$n;$j++){
            if($t[$j]<$t[$min]){
                $min=$j;
            }
        }
        if ($min !== $i){
            $temp=$t[$i];
            $t[$i]=$t[$min];
            $t[$min]=$temp;
        }
    }
    
}
?>