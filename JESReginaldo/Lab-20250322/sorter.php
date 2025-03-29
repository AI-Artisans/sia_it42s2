<?php
  $numbers = [];

  echo "Please enter 10 different number:\n";

  for ($i = 0; $i < 10; $i++) {
    echo "Enter number " . ($i + 1) . ": ";
    $input = trim(fgets(STDIN));
    if (is_numeric($input)) {
        $number[] = (float) $input;
    } else {
        echo "Invalid input. Please enter a number./n";
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