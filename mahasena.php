<?php
    // get the number of test case
    $N = intval(fgets(STDIN));

    $A = array_map('intval', explode(" ", fgets(STDIN)));

    $totalOddSoldier = $totalEvenSoldier = 0;

    for ($i=0; $i < $N; $i++) { 
        if(($A[$i] % 2) == 0) {
            $totalEvenSoldier++;
        } else {
            $totalOddSoldier++;
        }
    }

    if($totalEvenSoldier > $totalOddSoldier) {
        echo "READY FOR BATTLE";
    } else {
        echo "NOT READY";
    }