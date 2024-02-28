<?php
// Array Push

/*
    Array Push:
        Use the PHP array_push() function to add 
        one or more elements to the end of an array.
*/
$numbers = [1,2,3];

array_push($numbers,4,5);

print_r($numbers);


/*
    Output:
        Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
        )
*/
?>