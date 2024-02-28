<?php
// Array shift

/*
    Array shift:
            Use the PHP array_shift() function to remove an array 
            from the beginning of an array and return it.
*/
$numbers = [1,2,3];

$first_number = array_shift($numbers);

print_r($numbers);

/*
    Output:
        Array
        (
            [0] => 2
            [1] => 3
        )
*/
?>