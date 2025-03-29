<?php

// Function to get 10 valid numeric inputs from the user
function getNumbersFromUser($count = 10) {
    $numbers = [];

    echo "Please enter $count different numbers:\n";

    for ($i = 0; $i < $count; $i++) {
        while (true) {
            echo "Enter number " . ($i + 1) . ": ";
            $input = trim(fgets(STDIN));

            // Validate if the input is a numeric value
            if (is_numeric($input)) {
                $numbers[] = (float)$input;
                break;
            } else {
                echo "Invalid input. Please enter a number.\n";
            }
        }
    }

    return $numbers;
}

// Function to sort an array in ascending order
function sortNumbersAscending(&$numbers) {
    sort($numbers);
}

// Function to display sorted numbers
function displaySortedNumbers($numbers) {
    echo "\nSorted order of the entered numbers:\n";
    echo implode(" ", $numbers) . "\n";
}

// Main program execution
$numbers = getNumbersFromUser();
sortNumbersAscending($numbers);
displaySortedNumbers($numbers);

?>
