<?php

// Function to calculate the number of notebooks
function calculateNotebooks($kgOfPulp)
{
    // 1 kg of pulp produces 1000 pages, and each notebook has 100 pages
    // Total pages from kg of pulp
    $pages = $kgOfPulp * 1000; 

    // Number of notebooks
    $notebooks = intval($pages / 100); 
    return $notebooks;
}

// get the number of test cases
$T = intval(trim(fgets(STDIN)));

// Loop through each test case
for ($i = 0; $i < $T; $i++) {
    // get the weight of pulp in kg for the current test case
    $N = intval(trim(fgets(STDIN)));

    // call the function to calculate the number of notebooks
    $result = calculateNotebooks($N);

    echo $result . "\n";
}
