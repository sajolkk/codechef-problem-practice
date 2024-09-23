<?php

// Function to determine the faster option
function fasterOption($X, $Y)
{
    if ($X < $Y) {
        return "BIKE";
    } elseif ($X > $Y) {
        return "CAR";
    } else {
        return "SAME";
    }
}

// get the number of test cases
$T = intval(trim(fgets(STDIN)));

// Loop through each test case
for ($i = 0; $i < $T; $i++) {
    // get the values of X (time by bike) and Y (time by car)
    list($X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));

    echo fasterOption($X, $Y) . "\n";
}
