<?php
// Function to check if Munchy is an expert
function is_expert($x, $y)
{
    // If at least 50% of the problems are approved
    if ($y / $x >= 0.5) {
        return "YES";
    } else {
        return "NO";
    }
}

// get the number of test cases
$t = intval(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {
    // Reading X (number of problems submitted) and Y (number of problems approved)
    list($x, $y) = array_map('intval', explode(' ', fgets(STDIN)));

    // Output the result for each test case
    echo is_expert($x, $y) . "\n";
}
