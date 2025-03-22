<?php
// Array to store the numbers
$numbers = [];

// Prompt the user to enter 10 numbers
echo "Please enter 10 different numbers: \n";

// Read 10 numbers from the console
for ($i = 0; $i < 10; $i++) {
    echo "Enter number " . ($i + 1) . ": ";
    $input = trim(fgets(STDIN));
    if (is_numeric($input)) {
        $numbers[] = (float) $input;
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
?>