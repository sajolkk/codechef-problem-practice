<?php
// Function to calculate minimum number of pizzas
function minimum_pizzas($N, $X) {
    // Total slices required
    $total_slices = $N * $X;
    
    // Each pizza has 4 slices, so we need to divide total_slices by 4
    // and use ceil to round up to the nearest integer
    return ceil($total_slices / 4);
}

// get the number of test case
$T = intval(fgets(STDIN)); 

for ($i = 0; $i < $T; $i++) {
    // Reading N (number of friends) and X (slices per friend)
    list($N, $X) = array_map('intval', explode(' ', fgets(STDIN)));
    
    // Output the minimum number of pizzas for each test case
    echo minimum_pizzas($N, $X) . "\n";
}
?>
