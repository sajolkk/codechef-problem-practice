<?php

    // get the number of test cases
    $T = intval(fgets(STDIN));

    // through loop for each test
    for ($i=0; $i < $T; $i++) { 
        $B = array_map('intval', explode(" ", fgets(STDIN)));
        $emptyBottle = 0;
        foreach ($B as $value) {
            if($value === 0) {
                $emptyBottle++;
            }
        }
        if($emptyBottle >= 2) {
            echo "Water filling time\n";
        } else {
            echo "Not now\n";
        }
    }