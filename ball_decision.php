<?php
// Function to determine if the ball is IN or OUT
function check_ball_decision($decisions) {
    // If all referees say 0 (inside), return "IN", otherwise return "OUT"
    if (array_sum($decisions) == 0) {
        return "IN";
    } else {
        return "OUT";
    }
}

// get the number of test cases
$t = intval(fgets(STDIN)); 

for ($i = 0; $i < $t; $i++) {
    // get the decisions of the 4 referees
    $decisions = array_map('intval', explode(' ', fgets(STDIN)));
    
    // Output the result for each test case
    echo check_ball_decision($decisions) . "\n";
}
?>
