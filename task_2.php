<?php
function removeEvenNumbers($numbers) {
    $OddNumbers = array();
    
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $OddNumbers[] = $number;
        }
    }
    
    print_r($OddNumbers);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);
?>

