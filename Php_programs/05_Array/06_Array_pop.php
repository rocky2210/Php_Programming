<?php 
// Array Pop

/*
    Array Pop:
        Use the PHP array_pop() function to remove 
        the last element of an array.
*/
$numbers = [1,2,3];

$last_number = array_pop($numbers);

echo $last_number; 
echo "\n";
print_r($numbers);


/*
    Output:
        3
        Array
        (
            [0] => 1
            [1] => 2
        )
*/
?>