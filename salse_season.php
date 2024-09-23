<?php

    // get the number of test 
    $T = intval(fgets(STDIN));
    
    for ($i = 0; $i < $T; $i++) {
        $X = intval(fgets(STDIN));
        if($X > 5000) {
            $discount = 500;
        } elseif ($X > 1000 || $X == 5000) {
            $discount = 100;
        } elseif ($X >= 1000 || $X > 100) {
            $discount = 25;
        } else {
            $discount = 0;
        }
        $payableAmount = $X - $discount;
        echo $payableAmount."\n";
    }