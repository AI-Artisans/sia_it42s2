<?php

$numbers = [];

echo "please enter 10 different numbers:\n";

for ($i = 0; $i < 10; $i++) {
    echo "enter number " . ($i + 1) . ":";
    $input = trim(fgets(STDIN));
    if (is_numeric(input)) {
        $numbers[] = (float) $input;
    } else {
        echo "invalid input. Please enter a number. \n";
        $i--;
    }
}

sort($numbers);

echo "\Sorted order of the entered numbers:\n";

foreach ($numbers as $number) {
    echo $number . " ";
}
echo "\n";
?>