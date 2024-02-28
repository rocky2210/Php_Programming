<?php

// 1. array_reverse — Return an array with elements in reverse order
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);

/*
    Output:
        Array
        (
            [0] => php
            [1] => 4
            [2] => Array
                (
                    [0] => green
                    [1] => red
                )

        )
*/
print_r($reversed);

/*
    Output:
        Array
        (
            [0] => Array
                (
                    [0] => green
                    [1] => red
                )

            [1] => 4
            [2] => php
        )
*/
print_r($preserved);

/*
    Output:
        Array
        (
            [2] => Array
                (
                    [0] => green
                    [1] => red
                )

            [1] => 4
            [0] => php
        )
*/
echo "-----------\n";



// 2. array_search — Searches the array for a given value and returns the first corresponding key if successful
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
print($key);
/*
    Output:
        1
*/
// array_keys() - Return all the keys or a subset of the keys of an array
// array_values() - Return all the values of an array
// array_key_exists() - Checks if the given key or index exists in the array
// in_array() - Checks if a value exists in an array
echo "\n-----------\n";



// 3. array_shift — Shift an element off the beginning of array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

/*
    Output:
        Array
        (
            [0] => banana
            [1] => apple
            [2] => raspberry
        )
*/
echo "-----------\n";



//4. array_slice — Extract a slice of the array
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
// note the differences in the array keys
print_r(array_slice($input, 2, -1));

/*
    Output:
        Array
        (
            [0] => c
            [1] => d
        )
*/
print_r(array_slice($input, 2, -1, true));

/*
    Output:
        Array
        (
            [2] => c
            [3] => d
        )
*/
echo "-----------\n";



//5. count — Counts all elements in an array or in a Countable object
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));
/*
    Output:
        int(3)
*/
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

/*
    Output:
        int(3)
*/
echo "-----------\n";

?>