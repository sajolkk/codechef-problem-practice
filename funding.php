<?php
// Function to check if NEXTGEN satisfies the government's requirement
function is_funding_approved($a, $b, $x, $y) {
    // Calculate the total power required and the total power that can be generated
    $required_power = $a * $b;
    $generated_power = $x * $y;
    
    // If generated power is greater than or equal to the required power, return "YES"
    if ($generated_power >= $required_power) {
        return "YES";
    } else {
        return "NO";
    }
}

// Reading input
$t = intval(fgets(STDIN));  

for ($i = 0; $i < $t; $i++) {
    // Reading A (minimum power per year), B (number of years), X (Helium-3 in grams), and Y (power per gram)
    list($a, $b, $x, $y) = array_map('intval', explode(' ', fgets(STDIN)));
    
    // Output the result for each test case
    echo is_funding_approved($a, $b, $x, $y) . "\n";
}
?>
