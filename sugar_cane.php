<?php
// Function to calculate profit for selling N glasses of sugarcane juice
function calculate_profit($n) {
    // Total income from selling N glasses
    $total_income = $n * 50;
    // Profit is 30% of total income
    $profit = 0.3 * $total_income;
    return intval($profit); 
}

// get input number of test case
$t = intval(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {
    // get input N (number of glasses sold)
    $n = intval(fgets(STDIN));
    
    // Output the profit for each test case
    echo calculate_profit($n) . "\n";
}
