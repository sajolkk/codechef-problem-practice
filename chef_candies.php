<?php

// Function to calculate the minimum number of candy packets needed
function calculatePackets($N, $X)
{

    // get how many more candies are needed
    $neededCandies = $N - $X;

    // If Chef already has enough candies, no packets are needed
    if ($neededCandies <= 0) {
        return 0;
    }

    // Calculate the number of packets (each packet contains 4 candies)
    // Use ceil to round up the division
    return ceil($neededCandies / 4);
}

// get the number of test cases
$T = intval(trim(fgets(STDIN)));

// Loop through each test case
for ($i = 0; $i < $T; $i++) {
    // get the values of N (number of children) and X (candies Chef already has)
    list($N, $X) = array_map('intval', explode(' ', trim(fgets(STDIN))));

    // call the function to calculate the number of packets Chef needs to buy
    $result = calculatePackets($N, $X);

    echo $result . "\n";
}
