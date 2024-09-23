<?php

// to check if the score can become C:D from A:B
function isScoreConsistent($A, $B, $C, $D) {

    if ($C >= $A && $D >= $B) {
        return "POSSIBLE";
    } else {
        return "IMPOSSIBLE";
    }
}

// get the number of test cases
$T = intval(trim(fgets(STDIN)));

// Loop through each test case
for ($i = 0; $i < $T; $i++) {
    // get initial scores A and B
    list($A, $B) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // get final scores C and D
    list($C, $D) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // output
    echo isScoreConsistent($A, $B, $C, $D) . "\n";
}
