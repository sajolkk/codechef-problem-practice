<?php

    // get the number of test cases
    $T = intval(fgets(STDIN));

    // through loop for each test
    for ($i=0; $i < $T; $i++) { 
        list($X, $Y) = array_map('intval', explode(" ", fgets(STDIN)));
        $totalCoins = $X * $Y;
        $maximumBags = intval($totalCoins / 100);
        echo $maximumBags."\n";
    }