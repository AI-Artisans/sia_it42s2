<?php
    $numbers = [];
    
    echo "Please Enter 10 Different Numbers\n";

    for($i = 0; $i < 10; $i++){
        echo "Enter Number " . ($i + 1) . ". ";
        $input = trim(fgets(STDIN));
        if(is_numeric($input)){
            $numbers[] = (float)$input;
        }else{
            echo "Invalid Input. Please Enter a Number.\n";
        }
    }

    sort($numbers);

    echo "\nSorted order of the entered numbers.\n";

    foreach ($numbers as $number){
        echo $number . " ";
    }
    echo "\n"
?>