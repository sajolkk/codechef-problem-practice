<?php
    
    // get the number of test case
    $T = intval(fgets(STDIN));

    // loop through each test case
    for($i = 0; $i < $T; $i++) {
        list($X, $Y) = array_map('intval', explode(" ", fgets(STDIN)));
        $totalHours = ($X * 4) + $Y;
        echo "$totalHours \n";
    }