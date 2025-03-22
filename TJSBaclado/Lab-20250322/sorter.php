<?php

// Initialize an empty array to store numbers
$numbers = [];

// Prompt the user for 10 numbers
echo "Enter 10 numbers:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Enter number " . ($i + 1) . ": ";
    $input = trim(fgets(STDIN));
    
    // Validate if input is a number
    if (!is_numeric($input)) {
        echo "Invalid input. Please enter a valid number.\n";
        $i--; // Decrement to retry the same iteration
        continue;
    }
    
    $numbers[] = (float)$input; // Store the input as a float
}

// Sort the numbers in ascending order
sort($numbers);

// Display the sorted numbers
echo "\nSorted numbers:\n";
foreach ($numbers as $num) {
    echo $num . "\n";
}

?>