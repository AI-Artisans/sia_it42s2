<?php
<<<<<<< HEAD
// Array to store the numbers
$numbers = [];
// Prompt the user to enter 10 numbers
echo "Please enter 10 different numbers:\n";

// Read 10 numbers from the console
for ($i = 0; $i < 10; $i++) {
    echo "Enter number " . ($i + 1) . ": ";
    $input = trim(fgets(STDIN)); // Read input from the console
    if (is_numeric($input)) {
        $numbers[] = (float) $input; // Add the number to the array
    } else {
        echo "Invalid input. Please enter a number.\n";
        $i--; // Decrement counter to re-enter the current number
    }
}

// Sort the array in ascending order
sort($numbers);

// Output the sorted numbers
echo "\nSorted order of the entered numbers:\n";

foreach ($numbers as $number) {
    echo $number . " ";
}
echo "\n";
=======
    
    $numbers = [];

    
    echo "Please enter 10 different numbers:\n";

    
    for ($i = 0; $i < 10; $i++) {
        echo "Enter number " . ($i + 1) . ": ";
        $input = trim(fgets(STDIN));
        if (is_numeric($input)) {
            $numbers[] = (float)$input; 
        } else {
            echo "Invalid input. Please enter a number.\n";
            $i--; 
        }
    }

   
    sort($numbers);

  
    echo "\nSorted order of the entered numbers:\n";

    foreach ($numbers as $number) {
        echo $number . " ";
    }
    echo "\n";
>>>>>>> 76df8b35806b0e87e9f4cc195bc729080f0d222f
?>